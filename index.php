<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员系统</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

// if(isset($_GET['index']))
// {
//     include $_GET['index'].'.inc.php';
// }else{
//     include 'start.inc.php';

// }

function __autoload($_classname){
    require strtolower($_classname).'.class.php';
}

if(isset($_GET['index'])){
   $_main = new Main($_GET['index']);
}else{
   $_main=new Main();
}
$_main->_run();
?>
</body>
</html>