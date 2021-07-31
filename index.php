<?php
    include "config.php";
    $sql="SELECT `category_name` FROM `categories` ";
    $result=mysqli_query($connect,$sql);
    
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>OtuyaTech</title>
<script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body onkeydown="synthesise()">
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
              <sub id="sub">  We provides solution for all your technology sales, hardware repairs, upgrades, computer maintainance and  We also sell technology products.</sub>
          <!-- Page Content -->
          <div class="container">
  
    

            <h1 id="welcome" class="welcome">Welcome to OtuyaTech  !</h1>

            <h5 class="welcome">we got your IT solutions covered</h5>
            <div class="border-div">
                
            </div>
        </header>
        <div class="wrapper">
        <h1  id="categories">CATEGORIES</h1>

  <div class="slider">

    <!-- Works with as many slides as are added in-->

    <input type="radio" name="slide-switches" id="slide_text" checked class="slide-switch">
    <label for="slide_text" class="slide-label">Slide Text</label>
    <div class="slide-content padded">
    <h4>SALES</h4>
    <?php
                    if (mysqli_num_rows($result) > 0){
                         while($records = mysqli_fetch_assoc($result)) {
                          echo "<p>".$records['category_name']."</p>";

                         }
                        }

                         
                    ?>
    </div>

    <input type="radio" name="slide-switches" id="slide_image" class="slide-switch">
    <label for="slide_image" class="slide-label">Slide Image</label>
    <div class="slide-content">    
    <h4 style="text-align:center;">UPGRADES</h4>
                    <p class="upgrades">Ram upgrades</p>
                    <p class="upgrades">Rom upgrades</p>
                    <p class="upgrades">Graphics card</p>
                 
             
    </div>

    <input type="radio" name="slide-switches" id="slide_video" class="slide-switch">
    <label for="slide_video" class="slide-label">Slide Video</label>
    <div class="slide-content">
    <h4>MAINTAINANCE</h4>
                    <p>desktops servicing</p>
                    <p>laptops servicing</p>
    </div>
    
  

  </div>


</div>
    
          <!-- /.container -->
        

      
  </body>
 <script>
 function speechSyntesise(){
  var msg = new SpeechSynthesisUtterance();
msg.text = document.getElementById("welcome").innerHTML;
window.speechSynthesis.speak(msg);

 }
 </script>
 <script src="soundsynthesise.js"></script>
 <script src="speech_recognition.js"></script>

  <style> 
    .sound-input{
      margin-left:45%;
      outline:none;
    }
  </style>
  <footer class="footer">
      <p> copyright&copy; ourselves@gmail.com 2021</p>
  </footer>
</html>