<?php 
session_start();

	include("assets/database/connection.php");
	include("assets/database/functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Home</title>
</head>
<body>

      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               <p><?php echo $user_data['user_name']; ?></p>
            </div>
            <ul class="list-items">
               <li id="home_style"></li>
               <li><a id="home" href="welcome.php"><i class="fas fa-home"></i>Home<i id="second-fa" class="fas fa-home"></i></a></li>
               <li><a href="profile.php"><i class="fas fa-user"></i>Profile<i id="second-fa" class="fas fa-user"></i></a></li>
               <li><a href="update-log.php"><i class="fas fa-link"></i>Updates<i id="second-fa" class="fas fa-link"></i></a></li>
               <li><a href="about.php"><i class="fas fa-cloud"></i>About us<i id="second-fa" class="fas fa-cloud"></i></a></li>
               <div class="icons">
                  <a href="#"><i class="fab fa-discord"></i></a>
                  <a href="#"><i class="fab fa-steam"></i></a>
                  <ul>
                  </ul>
               </div>
            </ul>
         </nav>
      </div>

      <div class="update-wrapper">
         <div class="border">
            <div onclick="dropContent()"></div>
            <date>Posted: 2022-06-23</date>
            <h2>Website is pre-released!</h2>
            <p>This website is pre-released and that means that we are not totally done but we are in progress so we are hopefully done as soon as possible.</p>
         </div>
         <div class="border">
            <div onclick="dropContent()"></div>
            <date>Posted: 2022-06-23</date>
            <h2>We are still in progress but we're working on it! </h2>
            <p>We are still in progress but while waiting im updating you guys with that our team is about to make 2 more pages and hen we are done with the website and can officialy go online.</p>
         </div>
      </div>

</body>
</html>