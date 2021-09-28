<html>
<head></head>
    <body>

<?php
$controllers = array('pages'=>['home','error']);
$controller = $_POST["controller"];
$action = $_POST["action"];
echo "routes to ".$controller."-".$action."<br>";
function call($controller,$action){
    echo "routes to ".$controller."-".$action."<br>";
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else
    {
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>

</body>   
</html>