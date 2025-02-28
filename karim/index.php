<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width : 50px;
            height: 50px;
        }
        
        #badge {
            width : 20px;
            height : 20px;
            background-color: red;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            position: absolute;
            left: 50.3%;
            color: white;
        }
        #menu {
            width: 40%;
            height: fit-content;
            /* box-shadow: 1px 2px 2px 1px; */
            display: none;
            }
        .list {
            display: flex;
            box-shadow: 0px 1px 1px 0px blue;
            margin-top: 7px;
            padding: 10px;
        }
        .list:hover {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <center>
        <div class="notify_btn" id="notify">
            <div id='badge'>0</div>
            <img src="./notification-bell-svgrepo-com.svg" alt="">
        </div>
        <ul id="menu">
            
        </ul>
    </center>


    <script>
        let xhr = new XMLHttpRequest();
        let menu = document.getElementById('menu');
        let badge = document.getElementById('badge');

        function notify_me(){
            xhr.open('GET', './select.php', true);
            xhr.send();

            xhr.onload = ()=> {
                if(xhr.status == 200){
                    let get_data = JSON.parse(xhr.responseText);
                    console.log(get_data);

                     if(get_data == get_data){
                        badge.innerHTML = get_data;
                    } else {
                        badge.innerHTML +=get_data;
                    } 
                }
            }
        }
        window.onload = ()=>{
            notify_me();

            setInterval(() => {
                notify_me();
            }, 1000);
        }
        document.getElementById('notify').addEventListener('click', function(e){
            //alert('hello');
            e.preventDefault();

            let type = e.type;

            let menu = document.getElementById('menu');
            menu.classList.toggle('show');
            menu.innerHTML = '';


            xhr.onload = function(){
                if(xhr.status==200){
                    let data = JSON.parse(xhr.responseText);
                    //console.log(data);
                    
                    data.forEach(message => {
                    let li = document.createElement('li');
                    li.className = 'list';
                    li.innerHTML += "New update on concern with title: "+message;
                    menu.append(li);
                   }); 
                }
            }
            xhr.open('GET', 'data.php', true);
            xhr.send();           
            menu.style.display='block';
            
        });
    </script>
</body>
</html>