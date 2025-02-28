<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
        body {
            display: block;
        }
        #rep {
            position:fixed;
            top: 10%;
            right: 4%;
            width: 90%;
            }
        #sms {
            width : 60%;
            height: 40px;
            border-radius: 5px;
            border-color: black;
            margin-top: 10%;
        }
        button {
            background-color: white;
            border-style: none;
        }
        .fab {
            margin-top: 10%;
        }
        select, #title {
            height: 30px;
        }
    </style>
</head>
<body>
     <div id='rep'>
    <center>
    <form action="querysubmit.php" method="POST">
    
        
        <label for="category">CONCERN CATEGORY</label>
        <select name="cat" id="">
            <option name="" id="">--select category--</option>
            <option value="infrastructure">INFRASTRUCTURE</option>
            <option value="health">HEALTH</option>
            <option value="education">EDUCATION</option>
            <option value="sports">SPORTS</option>
            <option value="finance">FINANCE</option>
            <option value="agriculture">AGRICULTURE</option>
        </select>
        <label for="title">TITLE</label>
        <input id="title"type="text" name="title" id="">
   
        <input type="text" name="desc" id="sms">
        <button name='submit' value="submit"><i class="fas fa-paper-plane fa-2x"></i></button>
    </form>
    <i class="fab fa-whatsapp fa-2x"></i>
    <i class="fab fa-telegram fa-2x"></i>
    <i class="fab fa-github fa-2x"></i>
    <i class="fab fa-linkedin fa-2x"></i>
    <i class="fab fa-google fa-2x"></i>
    </center>
   </div>
</body>
</html>