<?php
if(empty($_GET['id'])){
 header("location:store.php");
}
$id=intval($_GET['id']);
 include "config.php";
 $sql="SELECT*FROM products WHERE product_id='$id'";
 $result=mysqli_query($connect,$sql);
 //echo $id;
?>




<!doctype html>
<html lang="en">
  <head>
    <title>product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <header> 

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="    width: 100% !important;
        background-color: white !important;
        background-color: rgba(255,255,255,0.5) !important;
        color: white !important;">
            <div class="container">
              <a class="navbar-brand" href="#">
                  <div class="logo-holder">
                    <h4 style="border-left: 4px solid red;color: red;  padding:1px; 
                    ">OtuyaTech</h4>


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
          </nav>

        </header>
  <body>
      <br>
      <br>


  <?php while($data=mysqli_fetch_array($result)):?>
  <img src="<?php  echo $data['file_name'];?>" class="" alt="..." id="product_image" onmouseover=" imageEnlarge();" onmouseout=" imageReset()">
  <h1><?php echo $data['product_name'];?></h1>
  <h5><?php echo $data['prod_descrption']?></h5>
  <h5><?php echo $data['product_price']?></h5>
  <?php endwhile;?>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type='text/javascript' src="main1.js">
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      img{
        border:1px solid transparent;
        border-radius:2%;
        margin-left:40%;
      }
        h1,h5{
         text-align:center;
         color:white;   
        }
    </style>
  </body>
  <footer class="footer">
      <p> copyright&copy; ourselves@gmail.com 2021</p>
  </footer>
</html>