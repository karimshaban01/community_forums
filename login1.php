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
    <form id='f' action="loginconf.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="eg. jiloleli@gmail.com" required>
         <i id="emailError" style="visibility: hidden;">Enter your email</i>
        <label for="password">Password:</label>
        <input type="password" name="password" size="8" id="password" placeholder="********" required>
         <i id="passError" style="visibility: hidden;">Enter your password</i>
        <input type="submit" value="LOGIN" name="login" id="button">
        <button><a href="signup.php" style="text-decoration:none; color:white">SIGN UP</a></button>
        <i><a href="#" style="text-decoration:none">forgot password?</a></i>
    </form>
    </center>
    <script src="./jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
                $('input').hide().slideToggle(1000).show();
               
                
                var f = document.getElementById('f');
                var btn = $("#button");
                btn.on('click', function(){
                    var email = document.getElementById('email').value;
                    var pass = document.getElementById('password').value;
                    
                    
                      
                   if(email == "") {
                        var e = document.getElementById('emailError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f.action = 'login.php';

                    }
                    else if(pass ==""){
                        var e = document.getElementById('passError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f.action = 'login.php.php';
                        
                    }
                    else {
                    //allowing form action
                    f.action = 'loginconf.php';
                    
                    }
                });
                
            });
    </script>
</body>
</html>