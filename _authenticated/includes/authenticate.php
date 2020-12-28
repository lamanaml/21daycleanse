   <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../login.php");
    exit;
}
?>
   
   <div >
       Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.
    </div>
    <p>
        <a href="../../reset-password.php" >Reset Your Password</a>
        <a href="../../logout.php">Sign Out of Your Account</a>
    </p>