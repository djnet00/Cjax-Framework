<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();


//look inside controller/post.php for code that handles this request.

$params = array('hello'=>'world');

$ajax->post = $params;
$ajax->call("../ajax.php?controller=post&function=post_sample");
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<div id='response'></div>
</body>
</html>
