<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCat-Orders</title>
    
   <link rel="icon" href="img/tablogo.png">

    
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
    <div>
        asdasdasdasdasdasdasdasdasdasdasdasdasdasdas
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="col-lg-1">
            <div class="container">
                <a href="SalesLogin1.php" class="btn btn-lg" style="background-color: rgb(62,55,56); color: white;">
                    <i class="fa fa-chevron-left"></i>Back
                </a>
            </div>
        </div>
        <div class="col-lg-1 push-lg-9">
            <div class="container">
                <a href="SalesSales.php" class="btn btn-lg" style="background-color: rgb(62,55,56); color: white;">Sales
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <h3>Orders List</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="table-responsive" id="Content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Order ID</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Weight</th>
                                <th>Quantity</th>
                                <th>Date of Order</th>
                                <th>Branch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require("object.php");
                                $i=0; // to check if its any of the server is not responding
                                if ($conn1->connect_error) {
                                    echo "Couldnt establish Connection with main DB";
                                    $i=1;
                                }
                                else{
                                    $final = $conn1;
                                } 

                                // if($i==1){
                                //     if($conn2->connect_error){
                                //         echo "Couldnt establish Connection with main DB".$conn1->connect_error;
                                //         $i=2;
                                //     }
                                //     else{
                                //         $final = $conn2;
                                //         echo "Alaudin";
                                //     }
                                // }

                                if($i==2){
                                    if($conn3->connect_error){
                                        echo "Couldnt establish Connection with main DB".$conn1->connect_error;
                                    }
                                    else{
                                        $final = $conn3;
                                    }
                                }
                                $j=1;
                                $sql = "SELECT *FROM orders";
                                $result = $final->query($sql);
                                $rowcount=mysqli_num_rows($result);
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>".$j++."</td><td>".$row["OrderId"]."</td><td>".$row["ProductId"]."</td><td>".$row["ProductName"]."</td><td>".$row["Weigh"]."</td><td>".$row["Quantity"]."</td><td>".$row["DateOfOrder"]."</td><td>".$row["Branch"]."</td></tr>";
                                }
                            ?>
                            <tr>
                                <th colspan=8; style="text-align:center;">
                                New Order
                                </th>
                            </tr>
                            <tr>
                                <td></td>
                                <form id="myForm" action="Add.php" method="POST">
                                <td>
                                    <input name="Oid" type="number" id="oid" style='width:80px;' required>
                                </td>
                                <td>
                                <select name="Pid" id="pid" onchange="myFunction()" placeholder="Select">
                                    <option value="">select</option>
                                    <option value="12080">12080
                                    <option value="12081">12081
                                    <option value="12085">12085
                                    <option value="12086">12086
                                    <option value="12090">12090
                                    <option value="12091">12091
                                    <option value="12095">12095
                                    <option value="12096">12096
                                </select>
                                </td>
                                <td>
                                    <input name="Name" type="text" id="pname" size="15" required>
                                </td>
                                <td>
                                    <input name="Weight" type="text" id="pweight" style="width:90px;" required>
                                </td>
                                <td>
                                    <input name="Quantity" type="number" id="pQuantity" required>
                                </td>
                                <td>
                                    <input name="OrderDate" type="text" id="pOrderDate" style='width:120px' required>
                                </td>
                                <td>
                                    <input name="pBranch" type="text" name="" id="pBranch" value="Head Office" size="15">
                                </td>
                            </tr>
                            <tr>
                                <td colspan=8 style="text-align:right;">
                                    <input type="submit" value="Add" class="btn btn-primary">
                                </td>
                                </form>
                            </tr>
                            <tr>
                                <th colspan=8; style="text-align:center;">
                                Cancel Order
                                </th>
                            </tr>
                            <tr>
                                <form action="DelData.php" method="POST">
                                    <td colspan = 8>
                                        Enter Order ID <input name="Oidtodel" type="number" id="oid" required>
                                    </td>
                            </tr>
                            <tr>
                                <td colspan=8 style="text-align:right;">
                                    <input type="submit" value="Delete" class="btn btn-primary">
                                </td>
                                </form>
                            </tr>
                            <tr>
                                <th colspan=8; style="text-align:center;">
                                Order Placed
                                </th>
                            </tr>
                            <tr>
                                <form action="Placed.php" method="POST">
                                    <td colspan = 8>
                                        Enter Order ID <input name="OidtoSale" type="number" id="oid" required>
                                    </td>
                            </tr>
                            <tr>
                                <td colspan=8 style="text-align:right;">
                                    <input type="submit" value="Placed" class="btn btn-primary">
                                </td>
                                </form>
                            </tr>
                            <tr>
                                <th colspan=8; style="text-align:center;">
                                    Update Order
                                </th>
                            </tr>
                            <tr>
                                <form action="Update.php" method="POST">
                                    <td colspan = 8>
                                        Enter Order ID <input name="OidtoUpdate" type="number" id="oid" required>
                                    </td>
                            </tr>
                            <tr>
                                <td colspan=8 style="text-align:right;">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">
            <div class="container">
                <a href="SalesLogin1.php" class="btn btn-lg" style="background-color: rgb(62,55,56); color: white;">
                    <i class="fa fa-chevron-left"></i>Back
                </a>
            </div>
        </div>
    </div>
        <br><br><br>
        <div id="results"></div>
</body>
</html>
