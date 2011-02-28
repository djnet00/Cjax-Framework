<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

//call method ajax_request::on_the_fly()  in controllers/ajax_request.php
$ajax->Exec("button1",$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call&a=HELLO WORLD"));
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
Recursive ajax requests
<br />
<br />
<input type='submit' id='button1' value ='Send Multiple requests'/>
<div id='ajax'></div>
</body>
</html>
