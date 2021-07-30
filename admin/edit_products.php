<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php");
  exit;
}
if(empty($_GET['id'])){
  header("location:index.php");
 }
	include "../config.php";

?>
<?php


$id = intval($_GET['id']); // get id through query string

$qry = mysqli_query($connect,"select * from products where product_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $productName = $_POST['name'];
    $productDescription = $_POST['description'];
    $price=$_POST['price'];
    $category_name=$_POST["category"];
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
    $edit = mysqli_query($connect,"UPDATE products SET product_name = '$productName', prod_descrption = '$productDescription', product_price = '$price', category_id  ='$category_id' WHERE product_id ='$id';");
	
    if($edit)
    {
      echo "<script>alert('product updated succesfully')</script>";


        mysqli_close($connect); // Close connection
        header ("Refresh: 1;URL='index.php"); 
        exit;
    }
    else
    {
        echo mysqli_error($connect);
    }    	
}
switch( $data['category_id']){
  case 1:
    $category_type="laptop";
    break;
    case 2:
      $category_type="desktop";
    break;
    case 3:
      $category_type="gaming laptop";
    break;
    case 4:
      $category_type="computer parts";
    break;
    default:$category_type="";
}

?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <nav class="nav justify-content-center">
      <a class="nav-link active" href="index.php">home</a>
      <a class="nav-link " href="#"> </a>
    </nav>
<h3>Edit product </h3>


<div class="form-group">
<form method="POST">
  <label for="">product name</label>
  <input type="text" name="name" value="<?php echo $data['product_name'] ?>" placeholder="Enter Full product Name" Required>
  <label for="">product description</label>
  <input type="text" name="description" value="<?php echo $data['prod_descrption'] ?>" placeholder="Enter description" Required>
  <label for="">product price</label>
  <input type="text" name="price" class value="<?php echo $data['product_price'] ?>" placeholder="Enter price " Required>
<label for="">category</label>
<datalist id="encodings">
<?php while ($row = mysqli_fetch_array($results)) { ?>

    <option value="<?php echo $data['category_name'];?>"><?php echo $data['category_name'];}?></option>
    

</datalist>
  <input type="text" name="category" class value="<?php echo $category_type?>" placeholder="Enter category " Required>
  <input type="submit" name="update" class="btn btn-success" value="Update">
</form>
</div>
<style>
  form{
    padding: 12px;
  }
  input{
    display:flex;
    border: 1px solid #ccc;
    border-radius:5px;
    margin:10px;
  }
  label{
    display:flex;
  }
   h6{
     color:red;
   }
</style>