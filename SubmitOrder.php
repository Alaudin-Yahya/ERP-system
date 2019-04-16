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
    
                    $OrderId=$_POST["oid"];
                    $ProductId=$_POST["pid"];
                    $ProductName=$_POST["pname"];
                    $Weight=$_POST["weight"];
                    $Quantity=$_POST["quantity"];                    
                    $DateOfOrder=$_POST["date"];
                    $Branch = "Head Office";
                    $statement1->execute();
                    $statement1->close();
                    $conn1->close();
    // echo $_POST['oid'] ."<br />";
    // echo $_POST['pid'] ."<br />";
    // echo $_POST['branch'] ."<br />";
    // echo $_POST['date'] ."<br />";
    // echo "==============================<br />";
    echo "All Data Submitted Successfully!";
?>