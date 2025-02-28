<?php 
    session_start();
        $uid = $_SESSION['uid'];
        //echo $_SESSION['uid'];
       
        
        $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');

    if(isset($_POST['submit'])){
        echo "btn clicked";
        //$id = $_POST['id'];
        $cat = $_POST['cat'];
        //$date = $_POST['date'];
        $region = $_SESSION['region'];
        $district = $_SESSION['district'];
        $const = $_SESSION['constituence'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        }

        if($title=="" || $desc == ""){
            header('Location: postquery.php');
        }
        $sql = "INSERT INTO concern(`concern_cat`, `concern_region`, `concern_district`, `concern_location`, `concern_title`, `concern_desc`, `uid`) VALUES('$cat', '$region', '$district', '$const', '$title', '$desc', '$uid')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "inserted";
            header('Location: queryview.php?cat='.$cat.'');
        } else {
            echo "failed";
            header('Location: postquery.php');
        }
?>