<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['access']) || $_SESSION['access'] !== true) {
    header("Location: admin.php"); // Redirect to login if not logged in
    exit;
}
// acquire shared info from other files
include("dbconn.inc.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();

// This form is used for both adding or updating a record.
// When adding a new record, the form should be an empty one.  When editing an existing item, information of that item should be preloaded onto the form.  How do we know whether it is for adding or editing?  Check whether a product id is available -- the form needs to know which item to edit.

$SubmissionID = ""; // place holder for product id information.  Set it as empty initally.  You may want to change its name to something more fitting for your application.  However, please note this variable is used in several places later in the script. You need to replace it with the new name through out the script.

// Set all values for the form as empty.  To prepare for the "adding a new item" scenario.  
$Name = $Email = $Phone = $InquiryType = $Message = ""; 

$errMsg = "";
$updateSuccess = false; 

// check if an entry is being edited by fetching SubmissionID from the query string
if (isset($_GET['SubmissionID'])) {
    $SubmissionID = intval($_GET['SubmissionID']); 
    if ($SubmissionID > 0) { //validating the SubmissionID
        // prefilling the selected records data
        $sql = "SELECT Name, Email, Phone, InquiryType, Message FROM MidnightContact WHERE SubmissionID = ?";
        $stmt = $conn->stmt_init();
        if ($stmt->prepare($sql)) {
            $stmt->bind_param('i', $SubmissionID); 
            $stmt->execute();
            $stmt->bind_result($Name, $Email, $Phone, $InquiryType, $Message);
            $stmt->fetch();
        }
        $stmt->close();
    }
}

// submission for updating the link
if (isset($_POST['Submit'])) {
    // form inputs
    $SubmissionID = intval($_POST['SubmissionID']); // retrieve SubmissionID from hidden field
    $Name = trim($_POST['Name']);
    $Email = trim($_POST['Email']);
    $Phone = trim($_POST['Phone']);
	$InquiryType = trim($_POST['Inquiry Type']);
    $Message = trim($_POST['Message']);

    // validate all required fields
    if ($SubmissionID > 0 && !empty($Name) && !empty($Email) && $Message > 0) {
        // update statement
        $sql = "UPDATE MidnightContact SET Name = ?, Email = ?, Phone = ?, InquiryType = ?, Message = ? WHERE SubmissionID = ?";
        $stmt = $conn->stmt_init();
        $stmt_prepared = 0; // initializes the statement

        if ($stmt->prepare($sql)) {
            $stmt->bind_param('sssssi', $Name, $Email, $Phone, $InquiryType, $Message, $SubmissionID);
            $stmt_prepared = 1; //signals the statement is successfully prepared
        }

        // execute if prepared
        if ($stmt_prepared == 1) {
            if ($stmt->execute()) {
                $updateSuccess = true;

                // display success output, got rid of foreach loop to display the fields individually
                $output = "<span class='success'>Success!</span><p>The following information has been saved in the database:</p>";
                $output .= "<b>URL:</b> " . htmlentities($Name) . "<br>";
                $output .= "<b>Anchor Text:</b> " . htmlentities($Email) . "<br>";
                $output .= "<b>Category:</b> " . htmlentities($Phone) . "<br>";
				$output .= "<b>Anchor Text:</b> " . htmlentities($InquiryType) . "<br>";
                $output .= "<b>Category:</b> " . htmlentities($Message) . "<br>";
                $output .= "<p>Back to the <a href='admin_home.php'>Admin Panel</a></p>";
            } else {
                $output = "<div class='error'>Database operation failed. Please contact the webmaster.</div>";
            }
        } else {
            $output = "<div class='error'>Database query failed. Please contact the webmaster.</div>";
        }

        $stmt->close();
    } else {
        // Missing required fields
        $output = "<div class='error'><p>The following required fields are missing in your form submission. Please check your form again and fill them out. <br>Thank you.<br>\n<ul>\n";
        if (empty($Name)) $output .= "<li>URL</li>";
        if (empty($Email)) $output .= "<li>Anchor Text</li>";
        if ($InquiryType == 0) $output .= "<li>Category</li>";
        $output .= "</ul></div>\n";
    }
}

// function to create the options for Inquiry Type drop-down list
function InquiryTypeOptionList($selectedType){
    $list = ""; // placeholder for Inquiry Type options list
    global $conn;
    
    // Static Inquiry Type options
    $types = ['General Inquiry', 'Product Inquiry', 'Feedback', 'Support'];

    foreach ($types as $type) {
        $selected = ($type == $selectedType) ? "selected" : "";
        $list .= "<option value='$type' $selected>$type</option>";
    }

    return $list;
}
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

<?php echo $admin_nav ?>

<main>

<div>
    
<h3>Client Information Form</h3>

    <p><?= $errMsg ?></p>

	<form action="admin_edit.php?SubmissionID=<?= htmlentities($SubmissionID) ?>" method="POST">
    <input type="hidden" name="SubmissionID" value="<?= htmlentities($SubmissionID) ?>">

	<table class='formTable'>
                <tr><th>Name*:</th><td><input type="text" name="Name" size="45" value="<?= htmlentities($Name) ?>"></td></tr>
                <tr><th>Email*:</th><td><input type="email" name="Email" size="45" value="<?= htmlentities($Email) ?>"></td></tr>
                <tr><th>Phone*:</th><td><input type="tel" name="Phone" size="45" value="<?= htmlentities($Phone) ?>"></td></tr>
                <tr><th>Inquiry Type*:</th><td><select name="InquiryType"><?= InquiryTypeOptionList($InquiryType) ?></select></td></tr>
                <tr><th>Message*:</th><td><textarea name="Message" cols="43" rows="6"><?= htmlentities($Message) ?></textarea></td></tr>
                <tr><td colspan=2><input type="submit" name="Submit" value="Submit Changes"></td></tr>
    </table>

</form>
</div>
</main>


</body>
</html>