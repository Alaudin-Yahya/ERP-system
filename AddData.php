<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FoodCat-Sales</title>
        
        <link rel="icon" href="tablogo.png">
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/js.js"></script>
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
          padding: 40px;
          text-align: center;
             height:100%;
        }
        /* .container01{
            background-color: rgb(62,55,56);
            opacity: 0.1; */
        /* } */
        table,th{
            background-color: rgb(62,55,56);
            color: white;
        }
        table,td{
            background-color: white;
            color: black;
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
                                    <a href="" style="color:rgb(62,55,56);">
                                        <i class="fa fa-bell">
                                            <span class="badge badge-danger">
                                            <?php
                                                require('object.php');
                                                $sql = "SELECT *FROM orders";
                                                $result = $conn1->query($sql);
                                                $rowcount=mysqli_num_rows($result);
                                                if($rowcount==0){
                                                    echo "0";
                                                }
                                                else{
                                                    echo "1";
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
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-1">
                <div class="container">
                    <a href="SalesOrder.php" class="btn btn-lg" style="background-color: rgb(62,55,56); color: white;">
                        <i class="fa fa-chevron-left"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <br><br>
        <br>
                                <?php
                                    require('object.php');
                                    if($conn1->connect_error){
                                        die("Connection Failed".$conn1->connect_error);
                                    }
                                    else{
                                        // echo "Success<br>";
                                    }
                                    // if($conn2->connect_error){
                                    //     die("Connection Failed".$conn2->connect_error);
                                    // }
                                    // else{
                                    //     echo "Success<br>";
                                    // }
                                    // if($conn3->connect_error){
                                    //     die("Connection Failed".$conn3->connect_error);
                                    // }
                                    // else{
                                    //     echo "Success<br>";
                                    // }
                                    $statement1 = $conn1->prepare("INSERT INTO orders (OrderId, ProductId, ProductName, Weigh, Quantity, DateOfOrder, Branch) VALUES (?,?,?,?,?,?,?)");
                                    $statement1->bind_param("iississ",$OrderId,$ProductId,$ProductName,$Weight,$Quantity,$DateOfOrder,$Branch);
                                    // $statement2 = $conn2->prepare("INSERT INTO orders (OrderId, ProductId, ProductName, Weigh, Quantity, DateOfOrder, Branch) VALUES (?,?,?,?,?,?,?)");
                                    // $statement2->bind_param("iississ",$OrderId,$ProductId,$ProductName,$Weight,$Quantity,$DateOfOrder,$Branch);
                                    // $statement3 = $conn3->prepare("INSERT INTO orders (OrderId, ProductId, ProductName, Weigh, Quantity, DateOfOrder, Branch) VALUES (?,?,?,?,?,?,?)");
                                    // $statement3->bind_param("iississ",$OrderId,$ProductId,$ProductName,$Weight,$Quantity,$DateOfOrder,$Branch);
                                    
                                                    $OrderId=$_POST["Oid"];
                                                    $ProductId=$_POST["Pid"];
                                                    $ProductName=$_POST["Name"];
                                                    $Weight=$_POST["Weight"];
                                                    $Quantity=$_POST["Quantity"];                    
                                                    $DateOfOrder=$_POST["OrderDate"];
                                                    $Branch = "Head Office";
                                                    $statement1->execute();
                                                    $statement1->close();
                                                    // $statement2->execute();
                                                    // $statement2->close();
                                                    // $statement3->execute();
                                                    // $statement3->close();
                                                    $conn1->close();
                                                    // $conn2->close();
                                                    // $conn3->close();
                                ?>
                                <tr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="container">
                                                <h4>Order Inserted</h4>
                                            </div>
                                        </div>
                                    </div>
    
    </body>
    </html>    
?>