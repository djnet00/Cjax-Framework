<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

$ajax->Exec("button1",$ajax->call("../ajax.php?controller=click_ajax_request&function=click_button&a=HELLO WORLD!"));
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<input type='submit' id='button1' value='Click this button to make an ajax request'>
</body>
</html>
