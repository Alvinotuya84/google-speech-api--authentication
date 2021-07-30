<?php
   include '../config.php';
   session_start();
 
   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     echo "<script>alert('please login first to access this page')</script>";
       header("Refresh:.2; url='login.php'");
       exit;
   }
   
 $sql='SELECT category_name FROM categories';
 $results=mysqli_query($connect,$sql);
?>





<!doctype html>
<html lang="en">
  <head>
    <title>add product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <header>
    <nav class="nav justify-content-center">
      <a class="nav-link active" href="index.php">home</a>
      <a class="nav-link " href="#"> </a>
    </nav>
</header>
  <body>
 
      <div class="form-group">
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <label for="">product name</label>
          <input type="text" name="productName" id="" required>
          <label for="">product category</label>
          <input list="encodings" value="" name="category" class="col-sm-6 custom-select custom-select-sm">
<datalist id="encodings">
<?php while ($row = mysqli_fetch_array($results)) { ?>

    <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];}?></option>
    

</datalist>
<label for="">product description</label>
<input type="text" name="productDescr">
<label for="">product price</label>
<input type="text" name="productPrice" id="">
<label for="">product quantity</label>
<input type="number" name="quantity">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
<style>
input,label{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
}
</style>
<?php

$productName_err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["productName"])){
    echo "please enter product name";
  }else{
    $sql_insert="SELECT product_id FROM products WHERE product_name=?";
    if($stmt = mysqli_prepare($connect,$sql_insert)){
      mysqli_stmt_bind_param($stmt, "s", $param_productName);
      
      $param_productName= trim($_POST["productName"]);
      if(mysqli_stmt_execute($stmt)){
        
        mysqli_stmt_store_result($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 1){
          $productName_err = "product already there";

  
        }
        else{
          $productName = trim($_POST["productName"]);
          $productDescr=trim($_POST["productDescr"]);
          $productPrice=trim($_POST["productPrice"]);
          $quantity=trim($_POST["quantity"]);
          $category_name=trim($_POST["category"]);
          switch($category_name){
            case "laptop":
              $category_id=1;
              break;
              case "desktop":
                $category_id=2;
              break;
              case "gaming laptop":
                $category_id=3;
              break;
              case "computer parts":
                $category_id=4;
              break;
              default:$category_id=0;
          }
          
 
  
        }
  
      }
      else{
        echo "Oops! Something went wrong. Please try again later.";
      }
      mysqli_stmt_close($stmt);

  
  
    }
  }
  
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
      echo $quantity;
    
    $sql_product_insert = "INSERT INTO `products` (`product_name`, `prod_descrption`, `product_price`, `quantity`, `category_id`) VALUES ( ?,?,?,?,?)";


    
    if($stmt = mysqli_prepare($connect, $sql_product_insert)){
    
      
      mysqli_stmt_bind_param($stmt, "sssii", $param_productName, $param_productDescr,$param_productPrice,$param_category_id,$param_quantity);


      $param_productName = $productName;
      $param_productPrice=$productPrice;
      $param_productDescr=$productDescr;
      $param_category_id=$category_id;
      $param_quantity=$quantity;


      if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('product added succesfully')</script>";
        header("Refresh:.4;url='index.php'");
        
    } else{
        echo "<script>alert('Oops! Something went wrong. Please try again later.')</script>";
    }

    mysqli_stmt_close($stmt);



    }


  }
    mysqli_close($connect);

}

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>