<?php
session_start();
include 'shared.php';

// clear out session value
if (isset($_GET['logout'])){
    $_SESSION['access'] = false;
}

// check to see if there's a form submission of user name and password
if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //echo "u: $username - p: $password <br>";
    
    // add additional validation here if necessary
    
    // validate user name and password
    // -- in this example, only one set of user name and password is valid so it's hard-coded here.  If there are multiple accounts, you may want to check the user input against your database records to grand access
    
    if ($username == "Admin" && $password == "Midnight") {
        // grant access
        $_SESSION['access'] = true;
        // redirect it to the admin page #1
        header('Location: admin_home.php');
        exit;
    } else {
        // error message
        $message = "<div class='error'>The user name and password you provided are incorrect.  Please try again.</div>";
    }

} else if (isset($_POST['username']) || isset($_POST['password'])){
    $message = "<div class='error'>Please enter both the user name and password to log in.</div>";
    
}else {
    $message = "<div>Please use the form below to log in to the admin page</div>";
    
}

?>

<!doctype html>
<html lang="en">
    <?php echo $Head; ?>
    <body>
    <div class="admincontainer">
            <img src="midnightnewlogo.png" alt="midnight hour logo" width="400px" />
        </div>
    
        <div class="admincontainer">
            <h3>Midnight Hour Admin Login</h3>
    <main>
<?php if (isset($message)) echo $message; ?>
    
    <form action="" method="post"><br><br>
        User name: <input type='text' name="username"> 
        Password: <input type='text' name="password">
        <br><br>
        <input type="submit" name="submit" value="Log in">        
    </form>

</main>
    </div>      
</body>
</html>