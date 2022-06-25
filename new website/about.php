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


      <div class="about-wrapper">
         <div class="about-border">
            <date>Posted: 2022-06-27</date>
            <h2>About-us</h2>
            <p>There is not much about us actually except that we are happy to help make your choice of websites, Or (responsive design) for your finished website or something else like animations or anything else you can come up with!<br><br>If you need help with any of the examples, you can contact us at: babaa.developer@gmail.com and we will respond as soon as possible.<br><br><h2 style="margin-top: 10px;">Rules</h2><p>We got some rules here that we want you to follow or else we will have to ban you. So please follow this simple rules which is.<br><br><ol style="margin-left: 15px;"><li>Don't disrespect anyone on the website or outside our website</li><li>We have 0% tolerance for racism or other degrading words.</li><li>Please do not swear either because some people just don't accept it so you gotta accept them by not swearing.</li></ol></p></p>
         </div>
      </div>

</body>
</html>