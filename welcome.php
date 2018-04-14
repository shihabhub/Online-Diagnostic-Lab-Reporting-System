<?php session_start();
if(isset($_SESSION["user"]))
{
 if((time() - $_SESSION['last_time']) > 60) 
 {
 header("location:logout.php");
 }
 else
 {
 $_SESSION['last_time'] = time();
 echo "<h1 align='center'>Welcome ".$_SESSION["user"]. "</h1>";
 //echo "<h3 align='center'>Automatic Logout </h3>";
 //echo "<p align='center'><a href='logout.php'>Logout</a></p>";
 }
}
else
{
 header('Location:login.php');
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1)) {
    // request 30 seconds ago
    session_destroy();
    session_unset();
     header("location:logout.php");
}
$_SESSION['LAST_ACTIVITY'] = time(); 

// update last activity time
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	*{
    		background-color: #D4EDDA;
    	}
    </style>
<title>Login</title>
</head>
<body>



<div class="alert alert-danger">
  <strong> Success! </strong> Welcome to Time Session Login... 
</div>
</body>
</html>