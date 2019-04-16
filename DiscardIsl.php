<?php
    require('object.php');
    $query = "DELETE from orderstemp";
    if ($conn2->query($query) === TRUE) {
        echo "Data Discarded";
    }
    else{
        echo "";
    }
    
?>