<?php
    require("object.php");
    $stmt= $conn1->prepare("INSERT INTO orders (OrderId, ProductId, ProductName, Weigh, Quantity, DateOfOrder, Branch) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("iississ",$OrderId,$ProductId,$ProductName,$Weight,$Quantity,$DateOfOrder,$Branch);

    $query = "SELECT * FROM orderstemp"; //You don't need a ; like you do in SQL
                    $result = mysqli_query($conn2,$query);
                    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                        $OrderId = $row["OrderId"];
                        $ProductId = $row["ProductId"];
                        $ProductName = $row["ProductName"];
                        $Weight = $row["Weigh"];
                        $DateOfOrder = $row["DateOfOrder"];
                        $Quantity = $row["Quantity"];
                        $Branch = $row["Branch"];
                        $stmt->execute();
                    }
                    $query = "DELETE from orderstemp";
                    if ($conn2->query($query) === TRUE) {
                        echo "data inserted in main database";        
                    }
                    else{
                        echo "";
                    }
    ?>
