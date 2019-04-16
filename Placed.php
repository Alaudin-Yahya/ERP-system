<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCat-OrderPlaced</title>
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
                                    <a href="" style="color:rgb(62,55,56);">
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
    $oid= $_POST["OidtoSale"];
    $i=0;
    $sql = "SELECT *FROM orders";
    $result = $conn1->query($sql);
    while($row = $result->fetch_assoc()) {
        if($row["OrderId"]==$oid){
            $ProductId = $row["ProductId"];
            $Quantity = $row["Quantity"];
        }
    }
    switch($ProductId){
        case 12080:
            $PricePerUnit = 55;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12081:
            $PricePerUnit = 30;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12085:
            $PricePerUnit = 55;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12086:
            $PricePerUnit = 30;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12090:
            $PricePerUnit = 350;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12091:
            $PricePerUnit = 200;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12095:
            $PricePerUnit = 230;
            $Price = $PricePerUnit * $Quantity;
            break;
        case 12096:
            $PricePerUnit = 130;
            $Price = $PricePerUnit * $Quantity;
            break;
        default:
            echo"hahha<br>hahaha<br>";
        
    }
    
    $mydate=getdate(date("U"));
    $DateOfDeliver= "$mydate[mday]-$mydate[mon]-$mydate[year]";

    $statement1 = $conn1->prepare("INSERT INTO sales (OrderId, ProductId, PriceUnit, Quantity, Price, DateOfDelivery) VALUES (?,?,?,?,?,?)");
    $statement1->bind_param("iiiiis",$oid,$ProductId,$PricePerUnit,$Quantity,$Price,$DateOfDeliver);
    $statement1->execute();
    $statement1->close();

    // $statement2 = $conn2->prepare("INSERT INTO sales (OrderId, ProductId, PriceUnit, Quantity, Price, DateOfDelivery) VALUES (?,?,?,?,?,?)");
    // $statement2->bind_param("iiiiis",$oid,$ProductId,$PricePerUnit,$Quantity,$Price,$DateOfDeliver);
    // $statement2->execute();
    // $statement2->close();

    // $statement3 = $conn3->prepare("INSERT INTO sales (OrderId, ProductId, PriceUnit, Quantity, Price, DateOfDelivery) VALUES (?,?,?,?,?,?)");
    // $statement3->bind_param("iiiiis",$oid,$ProductId,$PricePerUnit,$Quantity,$Price,$DateOfDeliver);
    // $statement3->execute();
    // $statement3->close();

    $sql = "DELETE FROM orders WHERE OrderId= '$oid'";
    $conn1->query($sql);
    // $conn2->query($sql);
    // $conn3->query($sql);

    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <h4>Sales List Updated</h4>
            </div>
            </div>
    </div>
</body>
</html>
