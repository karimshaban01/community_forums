<?php 
    $cid=$_GET['q'];
    $ct = $_GET['t'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        #rep {
            position:fixed;
            top:85%;
            right: 4%;
            width: 90%;
            }
        #sms {
            width : 60%;
            border-radius: 5px;
            border-color: black;
        }
        button {
            background-color: white;
            border-style: none;
        }
    </style>
</head>
<body>
    <center>
        <!-- <h3><?php echo $ct ?></h3>  -->
    </center>
   
   <div id='rep'>
    <center>
    <form action="respprocess.php" method="POST">
        <input type="text" name="t" style="display : none" id="" value="<?php echo $ct ?>">
        <input type="number" name="q" style="display : none" id="" value="<?php echo $cid ?>">
        <input type="text" name="response_body" id="sms">
        <button name='respond' value='respond'><i class="fas fa-paper-plane fa-2x"></i></button>
    </form>
    <i class="fab fa-whatsapp"></i>
    <i class="fab fa-telegram"></i>
    <i class="fab fa-github"></i>
    <i class="fab fa-linkedin"></i>
    <i class="fab fa-google"></i>
    </center>
   </div>
</body>
</html>