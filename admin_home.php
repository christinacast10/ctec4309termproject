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

?>

<script>
function confirmDel(Name, SubmissionID) {
    // JavaScript function to ask for deletion confirmation
    var url = "delete_submission.php?SubmissionID=" + SubmissionID;  // Delete URL with SubmissionID

    // Confirmation dialog with the name of the item
    var agree = confirm("Delete this submission: <" + Name + "> ?");
    
    if (agree) {
        // If user agrees, redirect to the delete script
        location.href = url;
    } else {
        // Do nothing if the user cancels
        return;
    }
}
</script>

<?php
// Prepare the SQL statement to fetch contact form submissions
$sql = "SELECT SubmissionID, Name, Email, Phone, InquiryType, Message, CreatedAt FROM MidnightContact ORDER BY CreatedAt DESC";

$stmt = $conn->stmt_init();

if ($stmt->prepare($sql)) {

    // Execute the query and bind the result variables
    $stmt->execute();
    $stmt->bind_result($SubmissionID, $Name, $Email, $Phone, $InquiryType, $Message, $CreatedAt);

    // Initialize a variable to hold the rows of the table
    $tblRows = "";

    // Fetch the results and build the table rows
    while ($stmt->fetch()) {
        // Sanitize the output
        $Name_js = htmlspecialchars($Name, ENT_QUOTES);
        $Email_js = htmlspecialchars($Email, ENT_QUOTES);
        $Phone_js = htmlspecialchars($Phone, ENT_QUOTES);
        $InquiryType_js = htmlspecialchars($InquiryType, ENT_QUOTES);
        $Message_js = htmlspecialchars($Message, ENT_QUOTES);
        $CreatedAt_js = htmlspecialchars($CreatedAt, ENT_QUOTES);
    
        // Add each row to the table
        $tblRows .= "<tr>
                        <td>$Name</td>
                        <td>$Email</td>
                        <td>$Phone</td>
                        <td>$InquiryType</td>
                        <td>$Message</td>
                        <td>$CreatedAt</td>
                        <td>
                            <a href='form_submission.php?SubmissionID=$SubmissionID'>Edit</a> | 
                            <a href='javascript:confirmDel(\"$Name_js\", $SubmissionID)'>Delete</a>
                        </td>
                        <td><a href='admin_log.php?SubmissionID=$SubmissionID'>View</a></td>
                    </tr>";
    }
    
    // Combine the table rows into the final table HTML
    $output = "
        <table class='itemList'>\n
        <tr><th>Name</th><th>Email</th><th>Phone</th><th>Inquiry Type</th><th>Message</th><th>Date</th><th>Options</th><th>History</th></tr>\n" . 
        $tblRows . 
        "</table>\n";
    
    // Close the statement
    $stmt->close();
} else {
    $output = "Query to retrieve contact form submissions failed.";
}

// Close the database connection
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
<main>
<?= $admin_nav ?>
    <div class="container">
        <h3>Contact Form Submissions</h3>
        <?php echo $output; ?> <!-- Output the table with data -->
    </div>
</main>
    </div>      
</body>
</html>
