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

</body>
</html>