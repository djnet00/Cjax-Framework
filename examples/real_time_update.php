<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

// 1. test field
// 2. URL to be requested.
// 3. Event. onKeyUp event is used.
$ajax->Exec("text1", $ajax->call("../ajax.php?controller=real_time&function=update&a=|text1|") ,"onkeyup");

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
Basically send an ajax request to the server every time you type something..
<br />
<br />
Type Something... <input type='text' id='text1'>
<br />
<div id='div_response'></div>
</body>
</html>
