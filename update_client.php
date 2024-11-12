<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['access']) || $_SESSION['access'] !== true) {
    header("Location: admin.php"); // Redirect to login if not logged in
    exit;
}

// Include database connection and shared content
include("dbconn.inc.php"); // Database connection
include("shared.php"); // Shared contents like header, footer, etc.

// Make database connection
$conn = dbConnect();

// Retrieve the SubmissionID from the URL
$SubmissionID = isset($_GET['SubmissionID']) ? intval($_GET['SubmissionID']) : 0;

// Initialize variable for displaying the client's name
$clientName = "";

// Fetch the client's name based on SubmissionID
if ($SubmissionID > 0) {
    $sql_name = "SELECT Name FROM MidnightContact WHERE SubmissionID = ?";
    $stmt_name = $conn->prepare($sql_name);
    $stmt_name->bind_param("i", $SubmissionID);
    $stmt_name->execute();
    $stmt_name->store_result();
    $stmt_name->bind_result($Name);

    if ($stmt_name->fetch()) {
        $clientName = htmlspecialchars($Name);
    } else {
        echo "<p>No client found for this Submission ID.</p>";
        exit;
    }

    $stmt_name->close();
} else {
    echo "<p>Invalid Submission ID.</p>";
    exit;
}

// Handle form submission to add a new update
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Status = $_POST['Status'] ?? '';
    $InternalNotes = $_POST['InternalNotes'] ?? '';
    $UpdatedAt = date("Y-m-d H:i:s"); // Current timestamp

    // Insert the new update into the MidnightContactManagement table
    $sql_insert = "INSERT INTO MidnightContactManagement (SubmissionID, Status, InternalNotes, UpdatedAt) VALUES (?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("isss", $SubmissionID, $Status, $InternalNotes, $UpdatedAt);

    if ($stmt_insert->execute()) {
        header("Location: admin_log.php?SubmissionID=$SubmissionID"); // Redirect back to the client's log page
        exit;
    } else {
        echo "<p>Error adding update. Please try again.</p>";
    }

    $stmt_insert->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<?php echo $Head; ?>
<body>
    <div class="admincontainer">
            <img src="midnightnewlogo.png" alt="midnight hour logo" width="400px" />
        </div>
    
        <div class="admincontainer">
            <h3>Midnight Hour Admin Login</h3>
<?= $admin_nav ?>

        <main class="client-info">
            <h3>Create Update for <?php echo $clientName; ?></h3>
            <form action="update_client.php?SubmissionID=<?php echo $SubmissionID; ?>" method="POST">
                <div class="form-group">
                    <label for="Status">Status</label>
                    <select name="Status" id="Status" required class="form-control">
                        <option value="New">New</option>
                        <option value="Pending">Pending</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InternalNotes">Internal Notes</label><br>
                    <textarea name="InternalNotes" id="InternalNotes" required class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Update</button>
            </form>
        </main>
    </div>
</body>
</html>
