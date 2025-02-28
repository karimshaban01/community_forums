<?php
     session_start();
     //echo $_SESSION['email'];
 ?>

<style>
    
</style>
<?php

    $q = $_GET['q'];
    $t = $_GET['t'];
    $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');
    $sql = "SELECT * FROM response where concern_id='$q'";
    $result = mysqli_query($conn, $sql);

    
  
    if($result){
        echo '<center><h3>'.$t.'</h3></center>';
        echo "<fieldset style='height: 75%; overflow:scroll; border-style: none'>";
        while($row = mysqli_fetch_assoc($result)){
            $rid = $row['response_id'];
            $sql1 = "SELECT * FROM user WHERE `uid`=(SELECT `uid` FROM response WHERE response_id='$rid')";
            $result1=$conn->query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            


            echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    
    <style>
    body {
        
            }
    #d1, #d2 {
            height: fit-content;
            border-radius: 8px;
            padding: 8px;
            color: white;
        }
    #d1 {
            position: relative;
            width: 300px;
            background-color: green;
            margin: 10px;
            margin-left: 60%;
            border-top-right-radius: 0px;
            
            }

        #d2 {
            position: relative;
            width: 300px;
            background-color: blue;
            margin: 10px;
            margin-left: 20%;
            border-top-left-radius: 0px;
        }
        
    </style>
</head>
<body>';

    if($_SESSION['uid']==$row['uid']){
    echo "<div id='d1'><b>@".$row1['uname']."</b><b>~".$row1['status']."</b><br>".$row['response_body']."<br><p align='right'>".$row['response_date']."</p></div>";

    } else {
        echo "<div id='d2'><b>@".$row1['uname']."</b><b>~".$row1['status']."</b><br>".$row['response_body']."<br><p align='right'>".$row['response_date']."</p></div>";
        
    }
    
'</body>
</html>';
        }
echo "</fieldset>";
    }
?>

<?php include './postresponse.php'; ?>