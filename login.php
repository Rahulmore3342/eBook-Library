<?php
require('db.php');
if(isset($_POST['login'])){

  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM registration WHERE userid ='$userid' && password='$password'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_array($run);
  if(count($data)>1){
    $_SESSION['isUserLoggedIn']=true;
    $_SESSION['userid'] = $_POST['userid'];
    echo "<script>window.location.href = 'home.php';</script>";
         "<script>alert('login successful')</script>";
  }else{
    echo "<script>alert('Incorrect email id or password !')</script>";
  }
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    

	<style>
                *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
.menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  background: black;
  margin-bottom: 5vh;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 25vh;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}  
form{
  border-radius: 5px;
  background-color: #00000038;
  padding: 20px;
  width: 50%;
  margin: auto;
  border: 2px solid black;
}
input, p, button {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
h2{
  margin-left: 30vh;
}
.log{
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 70px;
}
</style>
	
</head>
<body>
<div class="menu" >
        <div class="logo"> <a href="#">BOOK_LIBRARY</a></div>
        <div>
            <ul>
                <!-- <li><a href="home.php">Home</a></li>
                <li><a href="read.php">Read</a></li>
                <li><a href="upload.php">Publish</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="feedback.php">Feedback</a></li> -->
            </ul>
        </div>
    </div>

	<form action="" method="post">
		<div class="right">
		<h2>Login</h2><br>
    <br>
		<div class="inputs">
      <label for="">Enter Your User Name:</label>
			<input type="text" placeholder="Enter User Name" name="userid" required>
			<br>
      <label for="">Enter  Your Password:</label>
			<input type="password" placeholder="Enter Your Password" name="password" required>
		</div>
			<br>
			<button type="submit" name="login" class="log">Login</button>
	</div>
	</form>
	
</div>
</body>
</html>