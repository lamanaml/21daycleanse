<?php  
 session_start();  
//  $connect = mysqli_connect("jlodywmy_21day", "root", "T@b00@r!", "testing");  

 $connect = mysql_connect ("localhost", "jlodywmy_21day", "password")
or die ('I cannot connect to the database.');
mysql_select_db ("jlodywmy_21day");

 if(isset($_POST["username"]))  
 {  
      $query = "  
      SELECT * FROM admin_login  
      WHERE admin_name = '".$_POST["username"]."'  
      AND admin_password = '".$_POST["password"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?>  
