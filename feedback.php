<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  font-family: 'Cambria', 'Cochin', 'Georgia', 'Times', 'Times New Roman', 'serif';
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #00000038;
  padding: 20px;
  width: 60%;
  margin: auto;
  border: 2px solid black;
}
h2{
  margin-left:14vh;
}
    </style>


</head>
<body>
<div class="menu" >
        <div class="logo"> <a href="#">BOOK_LIBRARY</a></div>
        <div>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="read.php">Read</a></li>
                <li><a href="upload.php">Publish</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
  <form action="connect.php" method="post">
    <h2>Your Review About This Platform </h2><br><br>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="email">Email</label>
    <input type="text" id="email" name="Email" placeholder="Your Email Address.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="query" placeholder="Write something.." style="height:100px" required></textarea>

    <input type="submit" value="Submit" name="send">
  </form>
</div>

</body>
</html>