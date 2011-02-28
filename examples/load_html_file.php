<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

//The simplest way to execute  a call

//load file "resources/html/test.html" into div
$ajax->call("resources/html/test.html","container1");
?>
<html>
<head>
<title>Load html file</title>
<?php echo $ajax->init();?>
</head>
<body>
<br />
<div id='container1'></div>
</body>
</html>
