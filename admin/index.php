<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include "../config.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
	link
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body onkeydown="speechSysnthesise()">
    <h1 id="welcome"class="my-5">Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Welcome Back!!.<?php?></h1>
    <p>
        <a href="reset_password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
	<h1>add product</h1>
	<a href="add_products.php" class="add_btn" ><button type="button" class="btn btn-success" >ADD PRODUCT</button></a>

    <?php $results = mysqli_query($connect, "SELECT *FROM products ORDER BY product_id"); ?>
<h2 style="align-item:left;" id="h2">products</h2>
<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Features</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td scope="row"><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['prod_descrption']; ?></td>
			<td>
				<a href="edit_products.php?id=<?php echo $row['product_id']; ?>" class="edit_btn" ><button type="button" class="btn btn-primary" >EDIT</button></a>
			</td>
			<td>
				<a href="delete_product.php?id=<?php echo $row['product_id']; ?>" class="del_btn"><button type="button" class="btn btn-danger" onclick="return confirm('are you sure you want do delete this product?')">DELETE</button></a>
			</td>
		</tr>
	<?php } ?>
</table>
<a href="add_product_image.php" class="add_btn" ><button type="button" class="btn btn-secondary" >ADD PRODUCT IMAGE</button></a><br><br><br>
<button id="speechButton" onclick="speechSysnthesise()">speech</button>
<script>

		var speech=new SpeechSynthesisUtterance();
       speech.text=document.getElementById("welcome").innerHTML;
  function speechSysnthesise(){
	   window.speechSynthesis.speak(speech);


}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>