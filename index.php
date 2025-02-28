<?php
session_start();
if($_SESSION['email']==""){
    header('Location: login.php');
   
}
              
              /* echo $_SESSION['email'];
               echo $_SESSION['uid'];
                              
               echo $_SESSION['uid'];
               echo $_SESSION['email'];
               echo $_SESSION['region'];
               echo $_SESSION['district'];
               echo $_SESSION['constituence'];
               echo $_SESSION['status']; */
        if($_SESSION['email']==""){
            header('Location: login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        label, input, i, select, button{
            display : block;
            width: 30%;
            margin: 2px;

        }
        center {
            width: 50%;
            background-color: whitesmoke;
            margin-left: 23%;
            margin-top: 13%;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 1px 1px 1px 1px;
        }
    
    </style>
</head>
<body>
    <center>
    <form action="./queryview.php" method="get">
        
        <select name="cat" id="">
            <option value="">--SELECT CATEGORY--</option>
            <option value="infrastructure">INFRASTRUCTURE</option>
            <option value="health">HEALTH</option>
            <option value="education">EDUCATION</option>
            <option value="sports">SPORTS</option>
            <option value="finance">FINANCE</option>
            <option value="agriculture">AGRICULTURE</option>
        </select>
        <input type="submit" value="GET CONCERNS" name="submit">
    </form>
    </center>
</body>
</html>