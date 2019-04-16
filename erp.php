<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCat</title>
    
    <link rel="icon" href="img/tablogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

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
        background-image: url("erpbg.png");
        background-repeat: no-repeat;
        background-size:cover;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
    #d01:hover{
        transform: scale(1.1);
    }
    #pictureText{
        color: black;
        font-weight: bolder;
        font-size: large;

    }
    .overlay {
  position: absolute;
  bottom: 100%;
  left: 0; 
  right: 0;
  overflow: hidden;
  margin-left:13px;
  width: 92%;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  background-color: rgb(1, 107, 143);
  opacity: 0.9;
  height:0;
  transition: .5s ease;
}

.container01:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.badge{
    padding: 3px 5px 2px;
    position: absolute;
    top: 8px;
    right: 9px;
    display: inline-block;
    min-width: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #ffffff;
    line-height: 1;
    vertical-align: baseline;
    white-space: nowrap;
    text-align: center;
    border-radius: 10px;
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
                        <a class="navbar-brand" href="erp.php"><img  src="logo1.png" alt=""></a>
                        <div class="collapse navbar-collapse" id="navbarNavigation"> 
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="active nav-link" href="erp.php" style="background-color:white ;color:rgb(62,55,56);">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="SalesLog.php" style="background-color:white ; color:rgb(62,55,56);">Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="InventoryLogin.html" style="background-color:white ; color:rgb(62,55,56);">Inventory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active nav-link" href="FinanceLogin.html" style="background-color:white ; color:rgb(62,55,56);">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ManufacturingLogin.html" style="color:rgb(62,55,56);">Manufacturing</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>        
                </nav>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-3 push-lg-2">
            <div id="d01" class="container container01">
                <a href="SalesLog.php"><img style="width:100%; border-bottom-right-radius: 0.1in; border-bottom-left-radius: 0.1in;" src="sales1.png" alt=""></a>
                <div class="overlay">
                    <a href="SalesLog.php"><div class="text">Sales  Department</div></a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-3 push-lg-2">
            <div id="d01" class="container container01">
                <a href="FinanceLogin.html"><img alt ="adsdasds" style="width:100%; border-bottom-right-radius: 0.1in; border-bottom-left-radius: 0.1in;" src="Finance1.png" alt=""></a>
                <div class="overlay">
                    <a href="FinanceLogin.html"><div class="text">Finance Department</div></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-3 col-xs-12 push-lg-2">
            <div id="d01" class="container container01">
                <a href="InventoryLogin.html"><img style="width:100%; border-bottom-right-radius: 0.1in; border-bottom-left-radius: 0.1in;" src="inventory2.png" alt=""></a>
                <div class="overlay">
                    <a href="InventoryLogin.html"><div class="text">Inventory Department</div></a>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-xs-12 push-lg-2">
            <div id="d01" class="container container01">
                <a href="ManufacturingLogin.html"><img style="width:100%; border-bottom-right-radius: 0.1in; border-bottom-left-radius: 0.1in;" src="Manufacturing1.png" alt=""></a>
                <div class="overlay">
                    <a href="ManufacturingLogin.html"><div class="text">Manufacturing Department</div></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>