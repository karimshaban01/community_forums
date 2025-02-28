<?php
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');
    $query = "SELECT COUNT(*) FROM response WHERE is_read=0";
    
    $stm = $conn->query($query);

    $query2 = "SELECT COUNT(*) FROM response WHERE is_read=0";
    
    $stm2 = $conn->query($query2);

    

    if($stm || $stm2){
        $result = mysqli_fetch_row($stm);
        $result2 = mysqli_fetch_row($stm2);
        echo json_encode($result[0]+$result2[0]);
    }

    ?>
