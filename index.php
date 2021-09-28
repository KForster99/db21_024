<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}
?>
<html>
<head></head>
    <body>
    <?php echo "controller = ".$controller.", action = ".$action.;?>
    <br>[<a href="">Home </a>] <br>
    <?php require_once("routes.php"); ?>
    
    <form method="POST" action-"index.php">
    <input type="text" name="controller" value= $controller/>
    <input type="text" name="action" value= $action/>
    </form>
   

</body>   
</html>

