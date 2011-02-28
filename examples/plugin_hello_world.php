<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();



$ajax->hello_world('Hello World!  ',"  - "," this file is cjax/plugins/hello_world.js");

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
Loads hello_world.js (cjax/plugins/hello_world.js)
<br/>
</body>
</html>
