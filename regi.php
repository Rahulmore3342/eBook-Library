
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/regi.css">
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
.head{    
  border-radius: 5px;
  background-color: #00000038;
  padding: 20px;
  width: 50%;
  margin: auto;
  border: 2px solid black;
}
.title{
    margin-left: 15vh;
}
.in input{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.ok{
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
            <!-- <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="read.php">Read</a></li>
                <li><a href="upload.php">Publish</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul> -->
        </div>
    </div>
    <div class="head">
        <form action="connect.php" method="post" id="register">
        <div class="title"><h2>Register for Membership</h2>
    </div>
    <br>
    <br>
    <div class="in" >   
        <label>Enter Your Full Name :</label>
        <input type="text" id="fullname"placeholder="Enter Your full Name" name="fullname" required> <br>
        <label>Enter Your Email Address :</label>
        <input type="text" id="email" placeholder=" Enter Your Email" name="email"  required><br>
        <label> Enter Your User Name :</label>
        <input type="text" id="userid" placeholder=" Enter User Name" name="userid" required><br>
        <label>Enter Your Password </label>
        <input type="password" placeholder="Enter Your Password" id="password" name="password" required><br>
        <label> Comfirm Password</label>
        <input type="password" id="cpass" name="cpass"onkeyup="check(this)" placeholder="Comfirm Your Password"><br>
        <span id="alert"></span>
        <br>  
        <input type="submit"  value="submit" class="ok" name="register">
        </div> 
      </form>
    </div>  
</body>
<Script type="text/javascript">
  var password = document.getElementById('password');
  function check(elem){
    if(elem.value.length > 0){
      if(elem.value != pass.value)
      document.getElementById('alert').innerText = "Comfirm password does not match";
    }
    else{
      document.getElementById('alert').innerText = "";

    }

  } 
  else{
    document,getElementById('alet').innerText ="please Emter Confirm Password"
  }

</Script>
</html>