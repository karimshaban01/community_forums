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
            margin-top: 1%;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 1px 1px 1px 1px;
        }
    </style>
    
</head>
<body>
    <center>
    <form action="process.php" method="post">
        
      <!--  <label for="uid">User ID</label>
       <input type="number" name="uid" id="uid"> -->

        <label for="name">USER NAME</label>
        <input type="text" name="uname" id="uname" required><i id="nameError" style="visibility: hidden;">Enter your name</i>

        <label for="region">REGION OF RESIDENCE</label>
        <select name="region" id="region" required onchange="loadDistrict()">
                <option value="">---select region---</option>
                <?php include './regions.php' ?>
        </select>
        <i id="regError" style="visibility: hidden;">Select your region</i>

        <label for="district">DISTRICT OF RESIDENCE</label>
        <select name="district" id="dropdown" required>
            <option value="">--select district--</option>
        </select>
        <i id="distError" style="visibility: hidden;">Select your district</i>

        <label for="costituence">CONSTITUENCE OF RESIDENCE</label>
        <input type="text" name="const" id="const" required>
        <i id="constError" style="visibility: hidden;">Enter your constituence</i>

        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" required>
        <i id="emailError" style="visibility: hidden;">Enter your email</i>

        <label for="contact">CONTACT</label>
        <input type="tel" name="contact" id="contact" required>
        <i id="contError" style="visibility: hidden;">This field is required</i>

        <label for="status">STATUS</label>
        <select name="status" id="">
        <option value="rc">REGIONAL COMMISSIONER</option>
        <option value="dc">DISTRICT COMMISSIONER</option>
        <option value="representative">MEMBER OF PARLIAMENT</option>
        <option value="resident">RESIDENT</option>
        
        </select>

        <label for="gender">GENDER</label>
        <select name="gender">
        <option value="">-- select gender --</option>
        <option value="female">FEMALE</option>
        <option value="male">MALE</option>
        <option value="other">OTHER</option>
        </select>

        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password" required>
        <i id="passError" style="visibility: hidden;">please enter a valid password</i>
        
        
        <input type="submit" value="REGISTER" name="register" id="button">
        <a href="login.php" style="text-decoration:none"><input type="button" value="BACK TO LOGIN"></a>
    </form>
    </center>

    <script src="./jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>

    <script>        
            $(document).ready(function(){
                $('input').hide().slideToggle(1000).show();
                $('select').hide().slideToggle(1000).show();
                
                var f = document.getElementById('f');
                var btn = $("#button");
                btn.on('click', function(){
                    var pass = document.getElementById('password').value;
                    var name = document.getElementById('uname').value;
                    var reg = document.getElementById('region').value;
                    var email = document.getElementById('email').value;
                    
                      
                     if(name == "") {
                        var e = document.getElementById('nameError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                    
                        f.action = 'register.php';
                    }
                    else if(reg == "") {
                        var e = document.getElementById('regError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f = 'register.php';

                    }
                    
                    else if(email == "") {
                        var e = document.getElementById('emailError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f.action = 'register.php';

                    }  

                    else if(document.getElementById('region').value==''){
                        var e = document.getElementById('regionError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f.action = 'register.php';
                    } else if (password.length < 8) {
                document.getElementById("passError").textContent = "Password must be at least 8 characters";
                return false;
            }

                    else if(pass ==""){
                        var e = document.getElementById('passError');
                        e.style.visibility = 'visible';
                        e.style.color = 'red';

                        //restrict redirection                        
                        f.action = 'register.php';
                        
                    }
                    else {
                    //allowing form action
                    f.action = 'process.php';
                    
                    }
                    function validateName(name){
                        var emailRegex = /^[A-Za-z]+$/;
                        return emailRegex.test(name);
                    }

                    if(!validateEmail(name)){
                        var e = document.getElementById('nameError');
                        e.style.visibility = 'visible';
                        e.innerHTML = 'invalid name';
                        e.style.color = 'red';
        

                        //restrict redirection                        
                        f.action = 'register.php';
                    }

                    function validateEmail(email){
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        return emailRegex.test(email);
                    }

                    if(!validateEmail(email)){
                        var e = document.getElementById('emailError');
                        e.style.visibility = 'visible';
                        e.innerHTML = 'invalid email';
                        e.style.color = 'red';
        

                        //restrict redirection                        
                        f.action = 'register.php';
                    }

                    
                });
                
            });
        </script>
</body>
</html>