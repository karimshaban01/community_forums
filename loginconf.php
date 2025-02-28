<?php
   $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($email == ""){
            echo "access denied";
        }
        elseif($pass==""){
            echo "access denied";
        } 
        elseif($pass == $row['password']){
            
            $status = $row['status'];
            if($status=='representative'){
               session_start();
               $_SESSION['uid']=$row['uid'];
               $_SESSION['email']=$row['email'];
               $_SESSION['region']=$row['region'];
               $_SESSION['district']=$row['district'];
               $_SESSION['constituence']=$row['constituence'];
               $_SESSION['status']=$row['status'];

                //echo "you are loging in as representative";
              header('Location: home.php');
            } else {
               session_start();
               $_SESSION['uid']=$row['uid'];
               $_SESSION['email']=$row['email'];
               $_SESSION['region']=$row['region'];
               $_SESSION['district']=$row['district'];
               $_SESSION['constituence']=$row['constituence'];
               $_SESSION['status']=$row['status'];

                //echo "you are loging in as a resident";
               header('Location: home.php');
            }
        } 
        else {
           header('Location: login.php');
        }
    }
?>