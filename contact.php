
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    
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
        <h1>contact us</h1>
        <form id="form" method="POST" name="form" class="contact-form" action="" onsubmit="return checkUser()">
                    <label for="">Name</label>
                    <input id="name" class="input-field"type="text"  name="name" onfocus="this.value=''" required />
                    <label for="">Email</label>
                    <input id="email"  class="input-field"type="email"  name="email" onfocus="this.value=''"  required/>
                    <label for="">subject</label>
                   <input id="subject"  class="input-field"type="text"  name="subject" onfocus="this.value=''"  required/>
                    <label for="">Message</label>
                    <textarea id="message"  name="message" class="input-field" cols="30" rows="10" onfocus="this.value=''"></textarea>
                    <label for="">Tel:</label>
                    <input id="tel" class="input-field"type="text"  name="phone" onfocus="this.value=''" >
                    <input id="submit-btn" class="buttoninactive" type="submit" value="submit" name="submit">
                    
                </form>

        <style>
          
#submit-btn{
  margin-top: 10px;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
  background-color: red;
}
.contact-form{
  display: block;
  max-width: 600px;
  margin: 0 auto;
  border-radius: 5px;
  padding: 15px;
  background-color:transparent;
}
.input-field{
  width:100%;
  background-color: rgb(231, 231, 231);
  border: 1px solid white;
  border-radius: 5px;
}
.contact-form label{
  line-height: 2.7em;
  color:white;
}
span{
  text-align: end;
}
h1{
  text-align:center;
  color:white;
}

        </style>
        <script type="text/javascript" >

$("form").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "contact_db.php",
      data: dataString,
      success: function (response) {
        alert(response);
      }
    });



 
    e.preventDefault();
});
</script>
</body>
<footer class="footer">
    <p> copyright&copy; ourselves@gmail.com<</p>
</footer>
</html>