<?php
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');
    
 
 
        $query = "UPDATE response SET is_read=1";
        $stm = $conn->query($query);

        if($stm){
            
            $query2 = 'SELECT `response_title` as msg FROM response WHERE is_read=1 ORDER BY response_date DESC';
            $stm2 = $conn->query($query2);

            $query3 = 'SELECT `response_title` as msg FROM concern WHERE is_read=1 ORDER BY concern_date DESC';
            $stm3 = $conn->query($query2);


            if($stm2 || $stm3){
                $row = mysqli_fetch_all($stm2);
                $row3 = mysqli_fetch_all($stm3);
 
                echo json_encode($row+$row3);
            }}
        
    
?>