<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCat</title>
    
   <link rel="icon" href="tablogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>


        /* *** */
        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
        /* *** */

       hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0; 
    }
    body{
        color:rgb(62,55,56);
        /* background-image: url("bg1.png"); */
        background-repeat: no-repeat;
        background-size:cover;


    }
    table,td,th{
        border:1px solid rgb(3,137,97);
        text-align: center;
    }
    .footer{
	  width:100%;
      background: rgb(27,20,31);
	  padding: 20px;
      text-align: center;
   	  height:100%;
    }

    </style>
</head>
<body>
    <header class="header" id="home">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar fixed-top navbar-light navbar-toggleable-md" style="border-bottom:1px solid rgb(255,217,83); background-color:white;">
                    <div class="container" style="background-color:rgb(255, 255, 255); width:100%;">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavigation"><span class="navbar-toggler-icon"></span></button>
                        <a class="navbar-brand" href="check.php"><img  src="logo1.png" alt=""></a>
                        <div class="collapse navbar-collapse" id="navbarNavigation"> 
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="active nav-link" href="check.php" style="background-color:white ;color:rgb(62,55,56);">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="saleslogin.html" style="background-color:white ; color:rgb(62,55,56);">Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="register.html" style="background-color:white ; color:rgb(62,55,56);">Inventory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="register.html" style="background-color:white ; color:rgb(62,55,56);">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about" style="color:rgb(62,55,56);">Manufacturing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about" style="color:rgb(62,55,56);">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact" style="color:rgb(62,55,56);">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>        
                </nav>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br><br>
    <div class="row">
        <div class="container">
            <div class="col-lg-12" id="content">
                <?php    
                require('connect.php');
                $query = "SELECT * from salestemp";
                $result=  mysqli_query($connec,$query);
                $rowcount1 = mysqli_num_rows($result);
                if($rowcount1==0){
                }
                else{
                    echo "<h4>Notification from Islamabad Server</h4>";
                    echo "<a href='AddIsl.php' class='btn btn-primary'>Add</a>";
                    echo "<a href='DiscardIsl.php' class='btn btn-danger'>Discard</a>";
                    
                }
                ?>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="container">
            <div class="col-lg-12" id="content">
                <?php    
                require('connect.php');
                $query = "SELECT * from salestemp";
                $result=  mysqli_query($con,$query);
                $rowcount1 = mysqli_num_rows($result);
                if($rowcount1==0){
                }
                else{
                    echo "<h4>Notification from Karachi Server</h4>";                    
                    echo "<a href='AddKhi.php' class='btn btn-primary'>Add</a>";
                    echo "<a href='DiscardKhi.php' class='btn btn-danger'>Discard</a>";                    
                    
                }
                ?>
            </div>
        </div>
    </div>
    <br><br><br>
        <br><br><br>
        <footer class="footer" id="about" style="border-top:1px solid rgb(62,55,56);">
            <h3>About</h3>
            Distributed Computing Project<br><br>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <div class="container">
                            Food Cat began its journey in 1970 as a food company with a revolutionary product that popularized the concept of having clean & healthy food. It is one the finest food company that is trusted most not in all over the Country but overseas also.
                    </div>
                </div>
                <div class="col-lg-5 push-lg-2 push-sm-1">
                    <div class="container">
                        <img src="FoodCat.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <p style="color:white;">&copy FoodCat ltd, All rights reserved</p>
        </footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEam.comdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script>
      function AddKhiServer(){
        $.post('AddIsl.php');          
      }
      function AddIslServer(){
        $.post('AddKhi.php');
      }
      function DiscardIslServer(){
        $.post('DiscardIsl.php');
      }
      function DiscardKhiServer(){
        $.post("DiscardKhi.php",
        function(data){
            $('Content').html(data);
        }
        );
      }

      function checknotifications(){
        //   alert("hahahhahaha");
      }
    var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
  </script>
</body>
</html>