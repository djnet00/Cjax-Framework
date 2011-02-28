<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

//call method ajax_request::on_the_fly()  in controllers/ajax_request.php
$ajax->call("../ajax.php?controller=ajax_request&function=on_the_fly&a=HELLO WORLD");
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<div id='container'></div>
<br />
<br />
<div id='container2'></div>
</body>
</html>
