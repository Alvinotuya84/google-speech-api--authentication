<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="nav justify-content-center">
      <a class="nav-link active" href="index.php">home</a>
      <a class="nav-link " href="#"> </a>
    </nav>
<?php
   include '../config.php';
   session_start();
 
   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     echo "<script>alert('please login first to access this page')</script>";
       header("Refresh:.2; url='login.php'");
       exit;
   }
   
 $sql='SELECT *FROM products WHERE file_name IS NULL';
 $results=mysqli_query($connect,$sql);
?>



<div class="form-group">
          <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="">product image:</label>
          <input type="file" name="file" required>
          <label for=""><h5 style="color:red;">*must select product name from list*</h5>product name:</label>
          <input list="encodings" value="" name="product_name" class="col-sm-6 custom-select custom-select-sm" required>
<datalist id="encodings">
<?php while ($row = mysqli_fetch_array($results)) { ?>

    <option><?php echo $row['product_name'];}?></option>
    

</datalist>
          <input type="submit" class="btn btn-primary" name="submit">
        </form>
      </div>
      <style>
          input,label{display:flex;}
      </style>