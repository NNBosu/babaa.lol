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

<style>
   .profile-content .profile_hidden{
    display: none;
    opacity: 0;
  }
</style>

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
      <!-----/ <hr> /----->
      <div class="profile-wrapper">
         <div class="profile-content">
            <div class="top-wrapper">
               <img class="profile_img" src="assets/image/dc_image.jpg">
               <h1><?php echo $user_data['user_name']; ?></h1>
            </div>
         <div class="wrapper-box">
         <form method="POST" action="assets/database/save.php">
            <input class="profile_hidden" name="id" value="<?php echo $user_data['id']; ?>" style="display: none;opacity: 0;"></input>
               <p>Username</p>
                  <input type="user_name" minlength="5" maxlength="10" name="user_name" value="<?php echo $user_data['user_name']; ?>" />
               <p>Email</p>
                  <input id="blur" minlength="10" maxlength="40" name="email" type="email" value="<?php echo $user_data['email']; ?>" />
               <p>Password</p>
                  <input id="blur" type="text" minlength="7" maxlength="15"name="password" value="<?php echo $user_data['password']; ?>" />
               <div class="update-btn">
                  <input id="upd-btn" type="submit" style="color: #eee;" name="update" value="Save" />
                  <input onclick="location.href='assets/database/logout.php'" id="upd-btn" type="button" style="text-align: center;background-color: #f44336ff;color: #eee;" value="Logout" />
               </div>
         </form>
      </div>
   </div>
</div>

</body>
</html>