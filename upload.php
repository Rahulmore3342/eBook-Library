
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
  width: 70%;
  margin: auto;
  border: 2px solid black;
}
.head input {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  }
  .head .file{
    border-bottom: 0px;
    margin: 10px;
    display: flow-root;

  }
  button{
    float: center;
    color: #fff;
    font-size: 16px;
    padding: 12px 35px;
    border-radius: 50px;
    display: inline-block;
    border: 0;
    outline: 0;
    box-shadow: 0px 4px 20px 0px #49c628a6;
    background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
  }
  .head .ok{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 79px;
  }
  .head h3{
    font-size: 180%;
    margin-left: 25%;
  }
  textarea{
    height: 15vh;
    width: 90%;
  }
  form{
    margin-left: 30px;
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
    <div class="head">
        <h3>Publish Your Book/Article</h3><br><br>
    <form action="connect.php" method="post" enctype="multipart/form-data">
       <div class="re">
        <div class="in">
        <label for="bookname">Enter Your Book Name :</label>
        <input type="text" name="bookname" id="bookname" placeholder="Enter Your Book title " required><br>
        <label for="publisher">Enter Your Book Author :</label>
        <input type="text" name="publisher" id="publisher" placeholder="Book Publish By" required><br>
        <label for="language">Enter Your Book Language :</label>
        <input type="text" name="blang" id="language" placeholder="Enter Book Language" required><br>

         <div class="des">
        <label for="description">Enter your Book Description </label>   
        <textarea name="bdesc" id="Description" placeholder="Enter Book Description" required></textarea><br>
        </div>
        </div>

        <div class="file">
        <label for="bcover">Select your Book cover :</label>
        <input type="file" name="bcover" id="bcover" class="file" required>

        <label for="bfile">Select your file :</label>
        <input type="file" name="bfile" id="bfile" class="file" required>

        </div>

        <input type="Submit" class="ok" name="publish">
        </div>
    </form>
</div>
</body>
</html>