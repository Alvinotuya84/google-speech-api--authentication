<?php
   include "config.php";

$sql="SELECT * FROM products LEFT JOIN categories ON products.category_id=categories.category_id ORDER BY product_id";
$result=mysqli_query($connect,$sql);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="    width: 100% !important;
    background-color: white !important;
    background-color: rgba(255,255,255,0.5) !important;
    color: white !important;">
        <div class="container">
          <a class="navbar-brand" href="#">
              <div class="logo-holder">
                <h5 style="border-left: 4px solid red;color: tomato;  background-clip: padding-box;
                ">ComTech</h5>


              </div>
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="store.php">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About us</a>
                
                </li>

               
              </li>
            </ul>
          </div>
          
        </div>
</header>


<body onkeydown="synthesiseProductName()" onload="synthesiseProductName()">  
<table class="table table-hover table-dark">
  <thead>
    <?php while($row=mysqli_fetch_array($result)):?>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Product name</th>
      <th scope="col">Description</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><a href="product.php?id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row['file_name']?>" alt="" srcset=""></a></th>
      <td><a href="product.php?id=<?php echo $row['product_id']; ?>"><p id="product-name"class="product-name"><?php echo $row['product_name']?></p></a>
      <td><a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['prod_descrption']?></a></td>
      <td><a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['category_name']?></a></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>   
</body>
<script >
  var speec=new SpeechSynthesisUtterance();
speec.lang="en-US";
  function synthesiseProductName(){
    //for(i=0;i< products.length;i++){
   //console.log(products[i].innerHTML;);




   const selectByTagElements = document.getElementsByClassName('product-name');
 var products="";
 var realNumberInString="";
var numberUnused=0;
for (let i = 0; i < selectByTagElements.length; i++) { 
 
      console.log(selectByTagElements[i].innerHTML);
      numberUnused++;
       realNumberInString=numberUnused.toString();
        products +=","+" "+selectByTagElements[i].innerHTML;
       

       

}

speec.text="Welcome to our store page, these are our products,"  + " "+products+","+" " +"for repeat press any key";
speec.rate=0.8;

   window.speechSynthesis.speak(speec);
console.log(products1);
}



</script>
<style>
  img{
    height:60px;
    width:80px;
    
  }
  footer{
    position: fixed !important;
    bottom:0 !important;
  }
</style>
<footer class="footer">
    <p> copyright&copy; seed@gmail.com</p>
</footer>
</html>