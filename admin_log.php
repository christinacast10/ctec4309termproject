<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['access']) || $_SESSION['access'] !== true) {
    header("Location: admin.php"); // Redirect to login if not logged in
    exit;
}

// Include database connection and shared content
include("dbconn.inc.php"); // database connection
include("shared.php"); // shared contents like header, footer, etc.

// Make database connection
$conn = dbConnect();

// Retrieve the SubmissionID from the URL
$SubmissionID = isset($_GET['SubmissionID']) ? intval($_GET['SubmissionID']) : 0;

// Initialize the output variable to store HTML content
$output = "";

// Check if a valid SubmissionID was provided
if ($SubmissionID <= 0) {
    $output .= "<p>Invalid Submission ID.</p>";
} else {

// Query for the initial contact information from MidnightContact
$sql_initial = "SELECT Name, Email, Phone, InquiryType, Message, CreatedAt FROM MidnightContact WHERE SubmissionID = ?";
$stmt_initial = $conn->prepare($sql_initial);
$stmt_initial->bind_param("i", $SubmissionID);
$stmt_initial->execute();
$stmt_initial->store_result();
$stmt_initial->bind_result($Name, $Email, $Phone, $InquiryType, $Message, $CreatedAt);

// Display the initial contact information
if ($stmt_initial->fetch()) {
    $output .= "<h2>Initial Contact</h2>
                <table class='itemList'>
                    <tr><th>Name</th><td>" . htmlspecialchars($Name) . "</td></tr>
                    <tr><th>Email</th><td>" . htmlspecialchars($Email) . "</td></tr>
                    <tr><th>Phone</th><td>" . htmlspecialchars($Phone) . "</td></tr>
                    <tr><th>Inquiry Type</th><td>" . htmlspecialchars($InquiryType) . "</td></tr>
                    <tr><th>Message</th><td>" . htmlspecialchars($Message) . "</td></tr>
                    <tr><th>Date</th><td>" . htmlspecialchars($CreatedAt) . "</td></tr>
                </table>";
} else {
    $output .= "<p>No initial contact information found for this Submission ID.</p>";
}

$stmt_initial->close();

// Query for the updates from MidnightContactManagement
$sql_updates = "SELECT Status, InternalNotes, UpdatedAt FROM MidnightContactManagement WHERE SubmissionID = ? ORDER BY UpdatedAt ASC";
$stmt_updates = $conn->prepare($sql_updates);
$stmt_updates->bind_param("i", $SubmissionID);
$stmt_updates->execute();
$stmt_updates->store_result();
$stmt_updates->bind_result($Status, $InternalNotes, $UpdatedAt);

    // Display the updates if there are any records
    $output .= "<h2>Update History</h2>";

    if ($stmt_updates->num_rows > 0) {
        $output .= "<table class='itemList'>
                        <tr><th>Status</th><th>Internal Notes</th><th>Updated At</th></tr>";
        while ($stmt_updates->fetch()) {
            $output .= "<tr>
                            <td>" . htmlspecialchars($Status) . "</td>
                            <td>" . nl2br(htmlspecialchars($InternalNotes)) . "</td>
                            <td>" . htmlspecialchars($UpdatedAt) . "</td>
                        </tr>";
        }
        $output .= "</table>";
    } else {
        $output .= "<p>No updates found for this client.</p>";
    }
    
    $output .= "<a href='update_client.php?SubmissionID={$SubmissionID}' class='btn btn-primary'>Add Update</a>";

    $stmt_updates->close();
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
        <h3>Client Information</h3>
        <div>
            <?= $output ?>
        </div>
    </main>
    </div>
</body>
</html>
