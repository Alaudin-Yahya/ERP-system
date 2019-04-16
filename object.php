<?php
    $host1 = "localhost";
    $username1 = "root";
    $password1 = "";
    $dbname1 = "erp";
    $conn1 = new mysqli($host1,$username1,$password1,$dbname1); //local
    // $conn2 = new mysqli('192.168.43.13','replica','1234','erp'); //alaudin
    // $conn3 = new mysqli('192.168.43.103','rep2','1234','erp'); //ayma

     if($conn1->connect_error){
         die("Connection Failed".$conn1->connect_error);
     }
     else{
         // echo "Success<br>";
     }
    //  if($conn2->connect_error){
    //     die("Connection Failed".$conn2->connect_error);
    // }
    // else{
    //     // echo "Success<br>";
    // }
    // if($conn3->connect_error){
    //     die("Connection Failed".$conn3->connect_error);
    // }
    // else{
    //     // echo "Success<br>";
    // }

?>