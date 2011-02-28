<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();


//see controllers/messages.php  to view the code that handles this request.

//call method controller_messages::messages()  in controllers/messages.php
$ajax->call("../ajax.php?controller=messages&function=show_messages&a=HELLO WORLD");
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<div id='msgs'></div>
</body>
</html>
