<?php
    
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');
        $query = "SELECT * FROM response WHERE `is_read`='0'";
        $result = $conn->query($query);
        if($result){
        while($row=mysqli_fetch_assoc($result)){
          echo $row['response_body'];
        }
    }
?>