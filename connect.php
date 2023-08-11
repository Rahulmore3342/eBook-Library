<?php
include 'db.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE email='$email' && password='$password'";
    $run = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($run);
    if(count($data)>0){
      $_SESSION['isUserLoggedIn']=true;
      $_SESSION['userid'] = $_POST['userid'];
      echo "<script>window.location.href = 'home.php';</script>";
    }else{
      echo "<script>alert('Incorrect email id or password !')</script>";
    }
  }


if(isset($_POST['register']))
{
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
   $sql="insert into registration(fullname,email,userid,password)values('$fullname','$email','$userid','$password')";
   if(mysqli_query($con,$sql))
   {
    echo"<script>alert('YOUR REGISTRATION SUCCESSFUL...!')</script>";
    echo"<script>window.open('login.php','_self')</script>";
   }
   else
   {
    echo "error:".mysqli_error($con);
   }
   mysqli_close($con);
}

if(isset($_POST['publish']))
{
    
    $bookname = $_POST['bookname'];
    $publisher = $_POST['publisher'];
    $blang = $_POST['blang'];
    $bdesc = $_POST['bdesc'];
    $bcover = $_FILES['bcover'];

    $filename = $bcover['name'];
    $filepath = $bcover['tmp_name'];
    $fileerror = $bcover['error'];

    if($fileerror == 0){
        $destfile = 'cover/'.$filename;
        move_uploaded_file($filepath, $destfile);
    }
    $bfile = $_FILES['bfile'];

    $filename = $bfile['name'];
    $path = $bfile['tmp_name'];
    $error = $bfile['error'];

    if($fileerror == 0){
        $destination = 'books/'.$filename;
        move_uploaded_file($path, $destination);
    }
    
    
   $sql="insert into books(bookname,publisher,blang,bdesc,bcover,bfile) values('$bookname','$publisher','$blang','$bdesc','$destfile','$destination')";
   if(mysqli_query($con,$sql))
   {
    echo"<script>alert('YOUR BOOK PUBLISHED...!')</script>";
    echo"<script>window.open('home.php','_self')</script>";
   }
   else
   {
    echo"<script>alert('YOUR BOOK NOT PUBLISHED...!')</script>";
    echo "error:".mysqli_error($con);
   }

   mysqli_close($con);
}

if(isset($_POST['send']))
{
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['Email'];
    $query = $_POST['query'];
    
   $sql="insert into feedback(firstname,lastname,Email,query)values('$firstname','$lastname','$Email','$query')";
   if(mysqli_query($con,$sql))
   {
    echo"<script>alert('YOUR Query SENDDING...!')</script>";
    echo"<script>window.open('home.php','_self')</script>";
   }
   else
   {
    echo"<script>alert('SOMETHING WENT'S WRONG...!')</script>";
    echo "error:".mysqli_error($con);
   }

   mysqli_close($con);
}


?>