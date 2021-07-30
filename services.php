<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    
</head>
<body>
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
</nav>

        <div class="services">
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>SALES</h4>
          </div>
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>REPAIRS</h4>
          </div>
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>UPGRADES</h4>
          </div>
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>MAINTAINANCE</h4>
          </div>
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>MAINTAINANCE</h4>
          </div>
          <div class="service">
          <i class='fas fa-wrench' style='font-size:48px;color:red'></i>

            <h4>MAINTAINANCE</h4>
          </div>
          
        </div>
    
</body>
<style>
  .services{
    display:grid;
    grid-template-columns:auto auto auto ;
    

  }
  .service{
    margin-top:20%;
  }
 
  h4{
    color:white;
    
  }
  i{
   margin-left:47%  }
</style>
<footer class="footer">
    <p> copyright&copy; seed@gmail.com</p>
</footer>
</html>