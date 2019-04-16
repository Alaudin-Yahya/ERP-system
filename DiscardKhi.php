<?php
    require('object.php');
    $query = "DELETE from salestemp";
    if ($conn3->query($query) === TRUE) {
        echo "Data Discarded";        
    }
    else{
        echo "";
    }
?>