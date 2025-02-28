<?php
    session_start();
  
    
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');

    if(isset($_POST['respond'])){
        echo "hello ";
       //$rid = $_POST['response_id'];
       $cid = $_POST['q'];
       // $date = date('m-d-Y');
        $uid = $_SESSION['uid'];
        $rt = $_POST['t'];
        $rb = $_POST['response_body'];
    } else {
        echo "not found";
    }
    //echo $date;
    if($rb == ""){
        header('Location: postresponse.php');
    }
    $sql = "INSERT INTO response(`concern_id`, `uid`, `response_title`, `response_body`) VALUES ('$cid', '$uid', '$rt', '$rb')";
    $result = mysqli_query($conn, $sql);

    if($result){
       header("Location: responseview.php?q=".$cid."&t=".$rt."");
    } else {
        echo "failed to submit a query";
        header('Location: queryview.php');
    }
?>