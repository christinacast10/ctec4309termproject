<?php
// acquire shared info from other files
include("dbconn.inc.php"); // database connection 
include("shared.php"); // stored shared contents, such as HTML header and page title, page footer, etc. in variables

// make database connection
$conn = dbConnect();
$output = ""; // Initialize output variable
$SubmissionID = ""; // place holder for product id information


//See if a product id is available from the client side. If yes, then retrieve the info from the database based on the product id.  If not, present the form.
if (isset($_GET['SubmissionID'])) { // note that the spelling 'SubmissionID' is based on the query string variable name

	// product id available, validate the information, then compose a query accordingly to retrieve information.

	$SubmissionID = intval($_GET['SubmissionID']); // force all input into an integer.  If the input is a string or empty, it will be converted to 0.

	// validate the product id -- check to see if it is greater than 0
		if ($SubmissionID>0 ){
			//compose the query
			$sql = "DELETE from MidnightContact WHERE SubmissionID = ?"; // note that the spelling "SubmissionID" is based on the field name in the database product table.

			$stmt = $conn->stmt_init();

			if ($stmt->prepare($sql)){

				$stmt->bind_param('i',$SubmissionID);

				if ($stmt->execute()){ // $stmt->execute() will return true (successful) or false
                    $stmt->store_result();
                    //echo '$stmt->affected_rows: '.$stmt->affected_rows;
                    
                    if ($stmt->affected_rows === 1){
                        $output = "<span class='success'>Success!</span><p>The selected record has been seccessfully deleted.</p>";
                    } else if ($stmt->affected_rows === 0) { // no row was affected by the query. --> $SubmissionID number does not exist.
                        $output = "<div class='error'>The database operation to delete the record was not successful. Please try again or contact the system administrator with an error code of 0.</div>";
                    } else {
                        $output = "<div class='error'>The database operation was unexpected.  Please try again or contact the system administrator.</div>";
                    }
                    	
				} else { // $stmt->execute() was not successful
					$output = "<div class='error'>The database operation to delete the record was not successful.  Please try again or contact the system administrator.</div>";
				}
                
				
			}
				
			
		} else {
			// product id <= 0. reset $SubmissionID. prepare error message
			$SubmissionID = "";
			// compose an error message
			$output = "<div class='error'><b>!</b> If you are expecting to delete an exiting item, there are some error occured in the process -- the product you selected is not recognizable. Please contact the webmaster.  Thank you.</div>";
		}
} else {
	// $_GET['SubmissionID'] is not set, which means that no product id is provided
	$output = "<p><b>!</b> To manage product records, please follow the link below to visit the admin page.  Thank you. </p>";
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
<?= $admin_nav ?>
<main>
    
    <div>   
        <?= $output ?>
        
        <div class="centerrow"><p>Back to the <a href='admin_home.php'> Contact form submissions list page</a></p></div>
    </div>
    </div>
</main>
</body>
</html>