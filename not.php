<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    //checking notification
        
            $.ajax({
                url: 'notification.php',
                method: 'GET',
                success: function(response){
                    alert(response);
                }
            });
        
        
    </script>
</body>
</html>