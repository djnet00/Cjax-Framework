<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();


$ajax->Exec("button1",$ajax->call("../ajax.php?controller=change_value&function=text&a=text1&b=|text1|"));
$ajax->Exec("button2",$ajax->call("../ajax.php?controller=change_value&function=check&a=check1&b=|check1|"));

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
Change any element value or content through Ajax requests, on the server side..
<br />
<br />
<input type='text' id='text1' value=''> 
<br />
<input type='submit' id='button1' value='Change value'>
<br />
<br />
<br />
<input type='checkbox' id='check1' />
<br />
<input type='submit' id='button2' value='Change value'>
</body>
</html>
