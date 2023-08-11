<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font/css/all.min.css">
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
.content-right{ 
  height:auto; 
  float:left; 
  padding:20px 20px 0px 20px;}
.categories-right{ 
  font-variant:small-caps; 
  font-size:23px; 
  background:#EEE; 
  width:930px; 
  margin:0px 15px; 
  padding:8px 15px; 
  border:1px solid black;
}
.content-right-product{ 
  width:290px; 
  padding:0px 5px; 
  margin:15px; 
  float:left;
 -webkit-box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.3) !important; 
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.3) !important;
}
.content-right-product-h4{ 
    width:285px; 
    font-size:18px; 
    font-weight:600; 
    color:#000; 
    padding:5px 15px; 
    float:left; 
    text-align:center !important;} 
.content-right-product-p{
    width:270px; 
    color:#333; 
    line-height:26px; 
    padding:5px 15px; 
    float:left; 
    text-align:center !important;}
.content-right-product-amount{
    width:240px; 
    color:#df001a !important; 
    font-weight:bold; 
    font-size:26px; 
    padding:5px 15px 10px; 
    float:left; 
    text-align:center !important;}
.cart{ 
    width:215px; 
    float:left; 
    margin-bottom:10px; 
    padding:0px 25px 0px 75px;}

    /* this is the new css  */
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: black;
}

html{
    font-size: 62.5%;
}

main{
    max-width: 1500px;
    width: 95%;
    margin: 30px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 10vh;
}

main .card{
    max-width: 240px;
    flex: 1 1 210px;
    text-align: center;
    height: 425px;
    border: 1px solid lightgray;
    margin: 20px;
}

main .card .image{
    height: 8cm;
    margin-bottom: 5px;
    width: 4cm;
}

main .card .image img{
    margin-left: 30px;
    object-fit: cover;
}

main .card .caption{
    padding-left: 1em;
    text-align: left;
    line-height: 2em;
    height: 25%;
}

main .card .caption p{
    font-size: 1.5rem;
}

del{
    text-decoration: line-through;
}

main .card .caption .rate{
    display: flex;
}

main .card .caption .rate i{
    color: gold;
    margin-left: 2px;
}

main .card a{
    width: 50%;
}

main .card a{
    border: none;
    padding: 1em;
    width: 80%;
    cursor: pointer;
    margin-top: 2em;
    font-weight: bold;
    position: relative;
}
main .card a{
  background-color: #04AA6D;
    color: white;
    top: 10px;
    padding: 6px 15px;
    border: none;
    font-size: 15px;
    border-radius: 4px;
    margin-left: 65px;
    cursor: pointer;
    text-decoration: none;
}
main .card a:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
    margin: 0;
}

main .card a::after{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
}

main .card a:hover::before{
    width: 30%;
}

main .card a:hover::after{
    width: 30%;
}
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 2px solid black;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid black;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 40%;
  position: absolute;
  top: 17%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

</head>
<body>
<div class="menu"  id="read_list">
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
    <!-- <div class="wrap">
   <div class="search" id="searchItem">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div> -->


    <main class="find">
       <?php
       include('db.php');
          $query=mysqli_query($con,"SELECT * FROM books");
          while($row = mysqli_fetch_array($query))
          {
       ?>
      <div class="card">
           <div class="image">
               <img src="<?php echo $row["bcover"]; ?>" alt="">
           </div>
           <div class="caption">
              
               <p class="product_name"><?php echo $row["bookname"];  ?></p>
               <p class="price"><b><?php echo $row["blang"]; ?></b></p>
               <p href="single.php" <?php echo $row['bdesc'];?>><?php echo substr($row['bdesc'],0,50),'...'; ?></p>
              
           
               <a href="single.php?id=<?php echo $row['id']; ?>">Read</a>
           </div>
        
           <!-- <button class="add"  name="open" onclick="window.open('desc.php')">Read Now</button> -->
       </div>
       <?php

          }
     ?>
   </main>
    <script>

    </script>
</body>
</html>