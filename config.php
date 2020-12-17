<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
  define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'jlodywmy_lamanaml' );
   define('DB_PASSWORD', 'T@b00@r!');
   define('DB_NAME', 'jlodywmy_21day_signin');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>