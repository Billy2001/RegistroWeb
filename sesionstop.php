
<!DOCTYPE html>
<html lang="en">
<head>        
    <title>Sesión finalizada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    button{
        background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            
    }
    td{
        style="text-align:right"
    }
    </style>
</head>
<body>
<?php
session_start();
unset ($_SESSION['usuario']);
session_destroy();
?>

<a href=login.html style="text-align:right" ><button type="button"> Login</button></a>

</body>
</html>