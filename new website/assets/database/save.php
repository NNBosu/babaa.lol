<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onLoad="JavaScript:timeRefresh(20000);">
    <style>
        body{
            background-color: #0d1117;
        }
        *{
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        p{
            color: lightgreen;
            font-size: 2em;
            margin-top: 11em;
        }
        p-text{
            font-size: 1.1em;
            color: #CCC;
        }
    </style>

    <script>
        function timeRefresh(timeoutPeriod) {
            setTimeout("location.reload(true);", timeoutPeriod);
        }
    </script>
</body>
</html>



<?php
	$connection = mysqli_connect("localhost","root","");
	$login_design = mysqli_select_db($connection,'login_design');

	if(isset($_POST['update']))
	{
		$id = $_POST['user_name'];

		$query = "UPDATE `users` SET user_name='$_POST[user_name]',password='$_POST[password]',email='$_POST[email]' WHERE id='$_POST[id]' ";
		$query_run = mysqli_query($connection,$query);
	}

    echo '<p id="success"> Success!</p> <p-text>You can change any of your profile Settings again when ever you want!</p-text>';
?>