<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

$ajax->alert("HELLO WORLD");

$ajax->Exec("button1",$ajax->call("../ajax.php?controller=alert&function=fire_alert&a=Hello World!"));

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<input type='submit' id='button1' value='Fire alert, from server..'>
</body>
</html>
