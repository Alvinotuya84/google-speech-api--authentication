<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="    width: 100% !important;
    background-color: white !important;
    background-color: rgba(255,255,255,0.5) !important;
    color: white !important;">
        <div class="container">
          <a class="navbar-brand" href="#">
              <div class="logo-holder">
                <h5 style="border-left: 4px solid red;color: red;  background-clip: padding-box;
                ">OtuyaTech</h5>


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
<div class="about-section">
  <h1>About Us Page</h1>
  <p>We modify software to fix errors, adapt it to new hardware, improve its performance, or upgrade interfaces,
direct system testing and validation procedures,
direct software programming and documentation development and also
Consult with departments or customers on project status and proposals</p>
</div>

<h2 style="text-align:center;
color:white;">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/Alvin_image.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Niquette</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>niquettegithinji@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/Alvin_image.jpg" alt="" style="width:100%">
      <div class="container">
      <h2>Alvin Otuya</h2>
        <p class="title">BACK END DESIGNER</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>alvinotuya@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/Alvin_image.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Maryanne Sasha</h2>
        <p class="title">FRONT END DESIGNER</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>maryanne@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
<style>
  .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: transparent;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<footer class="footer">
    <p> copyright&copy; ourselves@gmail.com</p>
</footer>
</html>