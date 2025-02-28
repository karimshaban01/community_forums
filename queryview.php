<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFWA</title>
    <link rel="icon" href="image/Nembo ya taifa.png" type="image/gif" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <script src="js/script.js"></script>
</head>
<body>
<!--     <div class="banner1">
      <div class="container">
        
      </div>
    </div> -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="chartroom.php">change category</a></li>
          </ul>
    </nav>

        
<?php

session_start();
               /* echo $_SESSION['email'];
               echo $_SESSION['uid'];
                              
               echo $_SESSION['uid'];
               echo $_SESSION['email'];*/
               $region = $_SESSION['region'];
               $district = $_SESSION['district'];
               $location = $_SESSION['constituence'];
               $cat = $_GET['cat'];
               
               $status = $_SESSION['status'];


               $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');

if($status == 'representative' || $status == 'resident'){
   
    $sql = "SELECT * FROM concern WHERE concern_cat='$cat' AND concern_location='$location' ORDER BY concern_id DESC";
    $result = mysqli_query($conn, $sql);

    if($result){
    
        while($row = mysqli_fetch_assoc($result)){
            $uid = $row['uid'];
            $sql1 = "SELECT * FROM user WHERE `uid`='$uid'";
            $result1=$conn->query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        #container{
            width: 70%;
            height: 450px;
            box-shadow: 1px 1px 1px 1px;
            margin-top: 10px;
            margin-left: 10%;
            border-radius: 5px;
            padding: 5px;
            padding-left: 10px;
            
        }
        img {
            width: 100px;
            height: 100px;
            border-radius: 60%;
        }
        #info, img {
            float: left;
        }
        #btm {
            margin-left: 30%;
        }
        #desc {
            margin-top: 120px;
            height: 260px;
            padding: 8px;
        }
        .fa-circle-plus {
            position: fixed;
            bottom: 20px;
            right: 80px;
        }
        .fa-bell{
            position: fixed;
            top: 50px;
            right: 80px;
            }
        .fa-bell, #btm, .fa-bell{
            color:black;
        }
        
    </style>
</head>
<body>
    <div id="container">
        <img src="./imag.jpg" alt="">
        <div id="info">
            <p style="margin-left: 10px; margin-top: 20px;">username: '.$row1['uname'].'</p>
            <p style="margin-left: 10px; margin-top: 20px;">location:'.$row['concern_location'].'</p>
        </div>
        <a href="./karim/index.php"><i class="fa fa-bell fa-2x">notifications</i></a>
        <div id="desc">
            <h4>Title: '.$row['concern_title'].'</h4>
            <i>'.$row['concern_desc'].'</i>
        </div>
        <a href="./responseview.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class=""></i></a>
        <a href="./postresponse.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class="fas fa-reply fa-2x"></i></a>
    </div>
        
</body>
</html>';
    }
    echo '<a href="./postquery.php"><i class="fas fa-circle-plus fa-2x"></i></a>';
    }
}


if($status == 'dc'){
    
    $sql = "SELECT * FROM concern WHERE concern_cat='$cat' AND concern_district='$district' ORDER BY concern_id DESC";
    $result = mysqli_query($conn, $sql);

    if($result){
    
        while($row = mysqli_fetch_assoc($result)){
            $uid = $row['uid'];
            $sql1 = "SELECT * FROM user WHERE `uid`='$uid'";
            $result1=$conn->query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        #container{
            width: 70%;
            height: 450px;
            box-shadow: 1px 1px 1px 1px;
            margin-top: 10px;
            margin-left: 10%;
            border-radius: 5px;
            padding: 5px;
            padding-left: 10px;
        }
        img {
            width: 100px;
            height: 100px;
            border-radius: 60%;
        }
        #info, img {
            float: left;
        }
        #btm {
            margin-left: 30%;
        }
        #desc {
            margin-top: 120px;
            height: 260px;
            padding: 8px;
        }
        .fa-circle-plus {
            position: fixed;
            bottom: 20px;
            right: 80px;
        }
        .fa-bell{
            position: fixed;
            top: 50px;
            right: 80px;;
        }
        .fa-bell, #btm, .fa-bell{
            color:black;
        }
    </style>
    
</head>
<body>
    <div id="container">
        <img src="./imag.jpg" alt="">
        <div id="info">
            <p style="margin-left: 10px; margin-top: 20px;">username: '.$row1['uname'].'</p>
            <p style="margin-left: 10px; margin-top: 20px;">location:'.$row['concern_location'].'</p>
        </div>
        <a href="./karim/index.php"><i class="fa fa-bell fa-2x"></i></a>
        <div id="desc">
            <h4>Title: '.$row['concern_title'].'</h4>
            <i>'.$row['concern_desc'].'</i>
        </div>
        <a href="./responseview.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class="fa fa-comments fa-2x"></i></a>
        <a href="./postresponse.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class="fas fa-reply fa-2x"></i></a>
    </div>
</body>
</html>';
    }
    echo '<a href="./postquery.php"><i class="fas fa-circle-plus fa-2x"></i></a>';
    }
}

if($status == 'rc'){
    
    $sql = "SELECT * FROM concern WHERE concern_cat='$cat' AND concern_region='$region' ORDER BY concern_id DESC";
    $result = mysqli_query($conn, $sql);

    if($result){
    
        while($row = mysqli_fetch_assoc($result)){
            $uid = $row['uid'];
            $sql1 = "SELECT * FROM user WHERE `uid`='$uid'";
            $result1=$conn->query($sql1);
            $row1 = mysqli_fetch_assoc($result1);
            echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        #container{
            width: 70%;
            height: 450px;
            box-shadow: 1px 1px 1px 1px;
            margin-top: 10px;
            margin-left: 10%;
            border-radius: 5px;
            padding: 5px;
            padding-left: 10px;
        }
        img {
            width: 100px;
            height: 100px;
            border-radius: 60%;
        }
        #info, img {
            float: left;
        }
        #btm {
            margin-left: 30%;
        }
        #desc {
            margin-top: 120px;
            height: 260px;
            padding: 8px;
        }
        .fa-circle-plus {
            position: fixed;
            bottom: 20px;
            right: 80px;
        }
        .fa-bell{
            position: fixed;
            top: 50px;
            right: 80px;;
        }
        .fa-bell, .fa-circle-plus, #btm{
            color:black;
        }
        
    </style>
</head>
<body>
    <div id="container">
        <img src="./imag.jpg" alt="">
        <div id="info">
            <p style="margin-left: 10px; margin-top: 20px;"">username: '.$row1['uname'].'</p>
            <p style="margin-left: 10px; margin-top: 20px;"">location:'.$row['concern_location'].'</p>
        </div>
        <a href="./karim/index.php"><i class="fa fa-bell fa-2x"></i></a>
        <div id="desc">
            <h4>Title: '.$row['concern_title'].'</h4>
            <i>'.$row['concern_desc'].'</i>
        </div>
        <a href="./responseview.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class="fas fa-message fa-2x"></i></a>
        <a href="./postresponse.php?q='.$row["concern_id"].'&t='.$row['concern_title'].'"><i id="btm" class="fas fa-reply fa-2x"></i></a>
    </div>
        
</body>
</html>';
    }
    echo '<a href="./postquery.php"><i class="fas fa-circle-plus fa-2x"></i></a>';
    }
}
?>

</div>
</body>

</html>