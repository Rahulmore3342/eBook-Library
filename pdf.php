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
    <title>eBook Library</title>
</head>
<body>
<?php
       include('db.php');
          $id = $_GET['id'];
          $query=mysqli_query($con,"SELECT * FROM books WHERE id = '$id'");
          while($row = mysqli_fetch_array($query))
          {
       ?>
   <div class="book">

    <embed src="<?php echo $row["bfile"]; ?>" type="" width=1000 height=700>
   </div>
   <?php

          }
     ?>
</body>
</html>