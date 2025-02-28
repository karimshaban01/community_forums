<?php
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');

    if(isset($_POST['register'])){
        
       //$id = $_POST['uid'];
        $name = $_POST['uname'];
        $region = $_POST['region'];
        $district = $_POST['district'];
        $const = $_POST['const'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $status = $_POST['status'];
        $gender = $_POST['gender'];
        $pass =$_POST['password'];
    }
    $sql = "INSERT INTO user(`uname`, `region`, `district`, `constituence`, `email`, `contact`, `status`, `password`, `gender`) VALUES ('$name', '$region', '$district', '$const', '$email', '$contact', '$status', '$pass', '$gender')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "successful";
        header('Location: login.php');
    } else {
        echo "failed";
    }
?>`