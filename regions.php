<?php
    if($conn = new mysqli("localhost", "karim", "Karim@01", "tanzania_regions")){
        $sql = "SELECT * FROM regions";

        if($result = $conn->query($sql)){
           // echo "<select name ='region'>";
            while($row = mysqli_fetch_assoc($result)){
                
                echo "<option value=".$row['region_name']." name=".$row['region_name'].">".$row['region_name']."</option>";
           }
          //  echo "</select>";
        }
    }
?>