<?php
    if($conn = new mysqli("localhost", "karim", "Karim@01", "tanzania_regions")){

        $region = $_GET['region'];
        $sql = "SELECT * FROM districts WHERE region_id = (SELECT region_id FROM regions WHERE region_name='$region')";

        if($result = $conn->query($sql)){
           
            while($row = mysqli_fetch_assoc($result)){
                echo $row['district_name']." ";
            }
          
        }
    }
?>