
<?php   
 session_start();  
 ?>  
 <?php
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $ret = [
        'result' => 'OK',
    ];
    print json_encode($ret);
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Culinary Healing Sign in</title></title>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

      </head>  
      <body>  
  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 style="align:center">Culinary Healing Sign-in</h3><br />  
                <br />  
                <br />  
                <br />  
                <br />  
                <br />  
                <?php  
                if(isset($_SESSION['username']))  
                {  
                ?>  
                <div style="align:center">  
                     <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
                     <a href="#" id="logout">Logout</a>  
                </div>  
                <?php  
                }  
                else  
                {  
                ?>  
                <div style="align:center">  
                     <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>  
                </div>  
                <?php  
                }  
                ?>  
           </div>  
           <br />  
      </body>  
 </html>  
 <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Login</h4>  
                </div>  
                <div class="modal-body">  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>  
 </div> 


 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  