
  <div >
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h3>
    </div>
    <p>
        <a href="../reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="../logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>