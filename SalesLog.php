<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCat-Sales</title>
    
   <link rel="icon" href="img/tablogo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
        color:rgb(62,55,56);
        background-image: url("erpbg.png");        
        background-repeat: no-repeat;
        background-size:cover;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0; 
    }
    .footer{
	  width:100%;
      background: rgssb(27,20,31);
	  padding: 20px;
      text-align: center;
   	  height:100%;
    }
    #input01:focus{
        outline: none !important;
    border-color: rgb(255,217,83);
    box-shadow: 0 0 10px rgb(255,217,83);
    }
    .badge{
    padding: 3px 5px 2px;
    position: absolute;
    top: 8px;
    right: -8px;
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
                                <li style="margin-left:700px; font-size:25px;">
                                    <a href="noti.php" style="color:rgb(62,55,56);">
                                        <i class="fa fa-bell">
                                            <span class="badge badge-danger">
                                                <?php
                                                    require('object.php');
                                                    $sql = "SELECT *FROM orderstemp";
                                                    $result1 = $conn2->query($sql);
                                                    $result2 = $conn3->query($sql);
                                                    $rowcount1=mysqli_num_rows($result1);
                                                    $rowcount2=mysqli_num_rows($result2);
                                                    $rowcount = $rowcount1 + $rowcount2;
                                                    if($rowcount==0){
                                                        echo "0";
                                                    }
                                                    else{
                                                        if($rowcount1==0 || $rowcount2==0){
                                                            echo "1";
                                                        }
                                                        if($rowcount1!=0 && $rowcount2!=0){
                                                            echo "2";
                                                        }
                                                    }
                                                ?>
                                            </span>
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>        
                </nav>
            </div>
        </div>
    </header>
    <br><br><br><br><br>
    <div class="row">
        <div class="col-lg-1">
            <div class="container">
                <a href="erp.php" class="btn btn-lg" style="background-color: rgb(62,55,56); color:white;" >
                    <i class="fa fa-chevron-left" style=""></i>
                    Back
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">

        </div>
        <div class="col-lg-5">
            <div class="container">
                <form action="SalesLogin.php" method="POST" style="color:rgb(27,20,31);">
                    <br>
                    <h2>Login to Sales Department</h2>
                    <hr style="width:95% ; float:center; padding-left:-10px; color:rgb(255,217,83); background-color: rgb(255,217,83); border: none;" >
                    <div class="form-group">
                        <label for="">Department</label><br>
                        <i class="fa fa-building" style="margin-left:6px; font-size:20px;"></i>
                        <input id="input01" style="padding-left:25px; margin-top:-32px;" type="text" class="form-control" name="Department" value="Sales Department" readonly="readonly";>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label><br>
                        <i class="fa fa-user" style="margin-left:6px; font-size:20px;"></i>
                        <input id="input01" style="padding-left:25px; margin-top:-32px;" type="text" class="form-control" name="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Passsword</label><br>
                        <i class="fa fa-lock" style="margin-left:6px; font-size:20px;"></i>
                        <input id="input01" style="padding-left:25px; margin-top:-32px;" type="password" class="form-control" name="Password" required>
                    </div>
                    <button id="input01" class="btn" type="submit" style="color:rgb(27,20,31);">Login</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
        <br><br><br><br><br>
</body>
</html>