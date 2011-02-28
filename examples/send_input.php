<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

$ajax->Exec("button1",$ajax->call("../ajax.php?controller=send_input&function=send_text&a=|text1|"));

$ajax->Exec("button2",$ajax->call("../ajax.php?controller=send_input&function=send_checkbox&a=|check1|"));

$ajax->Exec("button3",$ajax->call("../ajax.php?controller=send_input&function=send_text_and_checkbox&a=|text1|&b=|check1|"));
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<input id='text1' type='text' value='Send this text'>
<br />
<input type='submit' id='button1' value='Send text..'>
<br />
<br />
<br />
<input type='checkbox' id='check1' checked='checked'>
<input type='submit' id='button2' value='Send Checkbox value..'>
<br />
<br />
<br />

<input type='submit' id='button3' value='Send both..'>
</body>
</html>
