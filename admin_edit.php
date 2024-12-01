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

// Process only if there is any submission
if (isset($_POST['Submit'])) {

    echo "<script>console.log('111');</script>"; // DELETE MEEEEEE
	// ==========================
	//validate user input
	
	// set up the required array 
    $required = array("Name", "Email", "Phone", "InquiryType", "Message"); // adjust field Names

    // set up the expected array
    $expected = array("Name", "Email", "Phone", "InquiryType", "Message", "SubmissionID"); 
    
    // set up a label array, use the field Name as the key and label as the value
    $label = array(
        'Name' => 'Name', 
        "Email" => 'Email', 
        "Phone" => 'Phone', 
        "InquiryType" => 'Inquiry Type', 
        "Message" => 'Message',
        "SubmissionID" => 'Submission ID'
    );

    $missing = array();
    $stmt_prepared = 0; //setting stmtprepared to zero
	
	foreach ($expected as $field){
		// Under what conditions the script needs to record a field as missing -- $field is required and one of the following two (1)  $_POST[$field] is not set or (2) $_POST[$field] is empty
        
        // Enable the line below to debug
		//echo "$field: in_array(): ".in_array($field, $required)." empty(_POST[$field]): ".empty($_POST[$field])."<br>"; 

		if (in_array($field, $required) && empty($_POST[$field])) {
            array_push ($missing, $field);
		} else {
			// Passed the required field test, set up a variable to carry the user input.  
			// Note the variable set up here uses the $field value as the veriable Name. Notice the syntax ${$field}.  This is a "variable variable". For example, the first $field in the foreach loop here is "title" (the first one in the $expected array) and a $title variable will be created.  The value of this variable will be either "" or $_POST["title"] depending on whether $_POST["title"] is set up.
            // once we run through the whole $expected array, then these variables, $title, $artist, $price, $categoryID, $pDtail, and $pid, will be generated.
            
			if (!isset($_POST[$field])) {
				//$_POST[$field] is not set, set the value as ""
				${$field} = "";
			} else {
				
				${$field} = $_POST[$field];
				
			}
		
		}
		
    }
	//print_r ($missing); // for debugging purpose

	/* add more data validation here */
	// ex. $price should be a number

	/* proceed only if there is no required fields missing and all other data validation rules are satisfied */
		if (empty($missing)){
            // Prepare SQL statement
            $stmt = $conn->stmt_init();

        $SubmissionID = $_POST['SubmissionID'] ?? ""; //setting SubmissionID to empty because i was getting an undefined variable error

        if ($SubmissionID != "") {
			/* there is an existing pid ==> need to deal with an existing reocrd ==> use an update query */ 
			// Ensure $pid contains an integer. 
			$SubmissionID = intval($SubmissionID); 
    
                // Update existing record
            $sql = "UPDATE MidnightContact SET Name = ?, Email = ?, Phone = ?, InquiryType = ?, Message = ? WHERE SubmissionID = ?";
    
            if ($stmt->prepare($sql)) {
                $stmt->bind_param('sssssi', $Name, $Email, $Phone, $InquiryType, $Message, $SubmissionID);
                $stmt_prepared = 1;
            }
            } else {
                // Insert new record
                $sql = "INSERT INTO MidnightContact (Name, Email, Phone, InquiryType, Message) VALUES (?, ?, ?, ?, ?)";
    
                if ($stmt->prepare($sql)) {
                    $stmt->bind_param('sssss', $Name, $Email, $Phone, $InquiryType, $Message);
                    $stmt_prepared = 1;
                }
            }
            if ($stmt_prepared == 1){
                if ($stmt->execute()){
                    // Success output
                    $output = "<span class='success'>Success!</span><p>The following information has been saved in the database:</p>";
                    $output .= "<b>{$label['Name']}</b>: {$Name} <br>";
                    $output .= "<b>{$label['Email']}</b>: {$Email} <br>";
                    $output .= "<b>{$label['Phone']}</b>: {$Phone} <br>"; 
                    $output .= "<b>{$label['InquiryType']}</b>: {$InquiryType} <br>";
                    $output .= "<b>{$label['Message']}</b>: {$Message} <br>"; 
                    
                    $output .= "<p>Back to the <a href='admin_home.php'>contact form list page</a></p>";
                } else {
                    $output = "<div class='error'>Database operation failed. Please contact the webmaster.</div>";
                }
            } else {
                $output = "<div class='error'>Database query failed. Please contact the webmaster.</div>";
            }
        } else { 
            // If required fields are missing
            $output = "<div class='error'><p>The following required fields are missing in your form submission. Please check your form again and fill them out. <br>Thank you.<br>\n<ul>\n";
            foreach($missing as $m){
                $output .= "<li>{$label[$m]}</li>\n";
            }
            $output .= "</ul></div>\n";
        }
    
    } else {
        $output = "<div class='error'>Please begin your client management operation from the <a href='admin_home.php'>admin page</a>.</div>";
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
    
<h3>Client Information Submission</h3>
        <div>
        <?= $output ?>
        </div>
    </div>
</main>
</body>
</html>