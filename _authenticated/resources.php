<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <link rel="icon"  type="image/jpg" href="assets/images/favicon.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>21-Day Cleanse - Resources - Culinary Healing</title>
    <meta name="robots" content="noimageindex, noindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26808506-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-26808506-2');
  </script>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    

    
    <link rel="stylesheet" href="assets/css/21day.css">
  </head>


  <body id="resources">
    
<!-- navigation -->
    <div class="nav-div"> 
      <?php include_once("includes/nav.html"); ?>
    </div>




<!-- content Body -->
    <div class="container ">  
      <h1> Resources</h1>
      <div class="container intro">  
        <p class="card-text"> Below are a few tools and resources that will help us out along the way! </p>
         <hr>
      </div>
    
      <div class="media">
        <div class="media-body">
          <h5 class="mt-0"><a href="substitutions.php">>> Food Substitutions</a></h5>
          <hr>
        </div>
      </div>
      <div class="media">
        <div class="media-body">
        <h5 class="mt-0"><a href="firststeps.php#roadmap">>> Day By Day Roadmap</a></h5>
        <hr>
        </div>
      </div>
 <div class="media">
        <div class="media-body">
        <h5 class="mt-0"><a href="https://photos.app.goo.gl/tKLJs2cwN6ZnkEYq6">>> Photo Tour of my Pantry</a></h5>
        <hr>
        </div>
      </div>

      <div class="media">
        <div class="media-body">
          <h5 class="mt-0"><a href="https://docs.google.com/document/d/1cC1dWrGP80H9j25vTLd2Q4wh21h8-jic8fuFtWKJB7I/edit">>> Menu Planner</a></h5>
          <hr>
        </div>
      </div>

      <div class="media">
        <div class="media-body">
        <h5 class="mt-0"><a href="faqs.php">>> FAQ's</a></h5>
        <hr>
        </div>
      </div>


      <div class="media">
        <div class="media-body">
        <h5 class="mt-0"><a href="https://calendar.google.com/calendar/b/2?cid=Y3VsaW5hcnloZWFsaW5nQGdtYWlsLmNvbQ">>> Sync with your Calendar</a></h5>
         
        </div>
      </div>

   

    </div>

    <!-- Footer-->
    <div>
      <?php include_once("includes/footer.html"); ?> 
    </div>

      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="assets/js/21day.js"></script>
    </body>
</html>