<?php
    if(isset(S_GET['controller'])&&isset($_GET['action']))
{
    Scontroller = $_GET['controller'];
    Saction = $_GET['action'];
}else{
    $controller = 'pages';
    $action = 'home';
}?>

<html>   
<head></head>
<body>
    <?php echo "controller = ".$controller.", action = ".$action.;?>
    <br>[<a href="">Home </a>]<br>
    <?php require_once("routes.php"); ?> 
</body>
</html>   