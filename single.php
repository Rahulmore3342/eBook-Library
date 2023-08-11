<html>
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
.single-product-container{
    padding: 25px 0;
    min-height: 700px;
}
.single-product-container .row{
    display: flex;
    margin: 50px;
}

.single-product-container .product-image{
    text-align: center;
    width:30%;
}
.si
.single-product-container .product-image img{
    width: 100%;
}
.single-product-container .product-content{
  margin-left:50px;
}
.single-product-container .product-content .btn{
  margin-top: 70px;

}
.single-product-container .product-content .title{
    font-size: 25px;
    margin: 0 0 10px;
}
.single-product-container .product-content .price{
    font-size: 23px;
    margin: 0 0 5px;
}
.single-product-container .product-content .description{
    font-size: 15px;
    margin: 0 0 20px;
    letter-spacing: 0.5px;
}
.single-product-container .product-content a{
    font-size: 15px;
    font-weight: 600;
    margin: 0 10px 0 0;
    text-transform: uppercase;
    color: #fff;
    background-color: #df3500;
    padding: 7px 15px;
    display: inline-block;
    border: 3px solid #df3500;
    border-radius: 20px;
    transition: all 0.3s;
}

.single-product-container .product-content a:hover{
    background-color: #fff;
    color: #df3500;
}
    </style>
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
<div class="single-product-container">
    <div class="container">

        <div class="row">
        <?php
       include('db.php');
          $id = $_GET['id'];
          $query=mysqli_query($con,"SELECT * FROM books WHERE id = '$id'");
          while($row = mysqli_fetch_array($query))
          {
       ?>
                <div class="detail"></div>
                    <div class="product-image">
                        <img id="product-img" src="<?php echo $row['bcover'] ?>" alt=""/>
                    </div>
                    <div class="product-content">
                    <p class="book_name" style="font-size: 1cm;"><?php echo $row["bookname"];  ?></p>
                    <p class="book_lang" style="margin: 5px;"><b><?php echo $row["blang"]; ?></b></p>
                    <p class="book_desc" style="margin: 10px;"><b><?php echo $row["bdesc"]; ?></b></p>
                  <div class="btn"></div>
                    <a href="pdf.php?id=<?php echo $row['id']; ?>" style="text-decoration:none;">Read Now</a>
                        <!-- <a href="download.php<?php echo $row['id']; ?>" style="text-decoration:none;">Download Book</a> -->
                  </div>
                    </div>
                </div>
        <?php } ?>
        </div>
    </div>
</div>
</body>
</html>