<?php
  require_once 'db.php';

  $sql = "SELECT * FROM books";
  $all_product = $con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  font-family:'Cambria', 'Cochin', 'Georgia', 'Times', 'Times New Roman', 'serif';
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
.img{
  background: transparent;
  width: 100%;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
}
.center .btns{
  margin-top: 20px;
}
.center .btns a{
  height: 60px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  text-decoration:none;
  transition: all 0.3s ease;
}
.center .btns a:first-child{
  color: #fff;
  background: none;
}
.btns a:first-child:hover{
  background: white;
  color: black;
}
.mySlides{
    opacity: 70%;
}
.section-head{
    text-align: center;
    color: #444;
    font-size: 28px;
    font-weight: 400;
    text-transform: capitalize;
    margin: 0 0 30px;
}

.section-head:after{
    content: '';
    display: block;
    clear: both;
    width: 150px;
    height: 2px;
    border-top: 2px dashed #e7e7e7;
    margin: 10px auto 0;
}

.product-section .product-grid{
    text-align: center;
    margin: 0 15px 30px;
}
.product-section .product-grid.popular{
    margin: 0;
}

.product-grid .product-image{
    background-color: #fff;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    height: 260px;
}
.product-grid .product-image.latest{
    height: 330px;
}
.product-grid .product-image.popular{
    height: 250px;
}

.product-grid .product-image a.image{ display: block; }

.product-grid .product-image img{
    width: auto;
    height: 100%;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
}

.owl-carousel .owl-theme img{
    width: auto !important;
}

.product-grid .product-button-group{
    font-size: 0;
    width: 140px;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
}
.product-grid .product-button-group a{
    display: inline-block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 4px;
    border-radius: 50%;
    color: #df3500;
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0,0,0,0.5);
    transform: scale(0);
    transition: all 0.3s;
}
.product-grid .product-button-group a:hover{
    color: #fff;
    background-color: #df3500;
    text-shadow: 0 0 2px #333;
    box-shadow: 0 0 10px rgba(0,0,0,0.5) inset;
}
.product-grid:hover .product-button-group a{
    transform: scale(1);
}

.product-grid .product-content {
    padding: 12px;
}

.product-grid .title{
    font-size: 14px;
    font-weight: 600;
    display: block;
    margin: 0 0 5px;
    text-transform: capitalize;
}

.product-grid .title a {
    color: #555;
}
.product-grid .title a:hover {
    color:#df3500;
}

.product-grid .price {
    font-size:16px;
    color: #555;
    font-weight: 500;
    margin: 0 2px;
}

</style>
</head>
<body>
<div class="menu" id="home">
        <div class="logo"> <a href="#">BOOK_LIBRARY</a></div>
        <div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="regi.php">SighUp</a></li>
            </ul>
        </div>
    </div>
<section>
  <img class="mySlides" src="images/b1.jpg"
  style="width:100%">
  <img class="mySlides" src="images/b2.jpg"
  style="width:100%">
  <img class="mySlides" src="images/b3.jpg"
  style="width:100%">
</section>

<div class="img"></div>
  <div class="center">
    <div class="title">Today's Reader</div>
    <div class="sub_title">Tomorrow's Leader</div>
    <div class="btns">
      <!-- <button>Read</button> -->
      <a href="login.php" class="button">Read Now</a>
    </div>
  </div>
  
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}


</script>
</body>
</html>