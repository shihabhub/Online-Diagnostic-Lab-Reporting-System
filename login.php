<?php session_start();
include 'conn.php'; // Database connection

if(isset($_POST["submit"])){
 $_SESSION["user"] = $_POST["user"];
 $_SESSION["pass"] = $_POST["pass"];
 $_SESSION['last_time'] = time();
 {
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //selecting database
 $query = mysqli_query($conn, "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");
 $numrows= mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $username=$row['username'];
 $password=$row['password'];
 }
 if($user == $username && $pass == $password)
 {
 //Redirect Browser
 header('Location: report.php');
 }
 }
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="user" id="user" placeholder="Enter Username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="pass" id="pass" placeholder="Enter Password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="submit" value="Submit">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>

<!--<!doctype html>
<html>
<body>
<h1>User Login</h1>
<form method="post">

<input type="text" name="user" id="user" placeholder="Enter Username"><br/><br/>
<input type="password" name="pass" id="pass" placeholder="Enter Password"><br/><br/>

<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>
-->