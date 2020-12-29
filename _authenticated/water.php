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
    <title>21-Day Cleanse - Water - Culinary Healing</title>
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


  <body id="liquids">
      
<!-- navigation -->
    <div class="nav-div">
      <?php include_once("includes/nav.html"); ?>
    </div>
     
   
<!-- Header -->
      <div class="container">
        <h1 >Water</h1>
          <div style="float:right; width:20%">
        <?php include_once("includes/roadmapmini.html"); ?>
      </div>
  <!-- content Body -->
        <div class="container intro">  
          <h3 >The Water Phase</h3>
           <p class="card-text">During each phase we will need to incorporate water to help flush out toxins in our system.  During the one day water phase we only drink distilled water.  No tea, no juice, no lemon in the water, no supplements.. just distilled water.   The reason is that on water day we want to completely deprive toxins of all vitamins, minerals, other nutrients, which are found in other types of waters. 
          </p> 
          <p class="card-text">Drink at least 8 cups of water throughout the day to stay hydrated. Distilled water is best for the Water Day because it pulls out the toxins from your organs.  It literally pulls out the trash that gets caught in the follicles of the colon that breeds disease.</p> 
          <p class="card-text">The most important thing for this day is to stay at peace.  Go out to a park and just relax, stay in bed all day, meditate, pray, relax on the beach, do some yoga. I forbid you to do anything strenuous this day...I mean it! </p> 



          <h5>What can we do?</h5>
          We will make it through this day, together, the best we can.  Here are a few recommended activities. 
          <ul class="default">
            <li>Rest</li>
            <li>Sleep</li>
            <li>Write in your journal</li>
            <li>Yoga</li>
            <li>Pray/meditate</li>
          </ul>
        </div>
  <h5>Extra Credit</h5>
        <p class="card-text">
        Check out this research on the effects of words, thoughts and sound on water.
        </p>
          
         <iframe width="560" height="315" src="https://www.youtube.com/embed/1qQUFvufXp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
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