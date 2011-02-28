<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

//This shows how to assign the same ajax call to 2 or more elements

//bind two elements with one command. So when these elements are fired.. the same command is fired..
$ajax->Exec("link1|link2",$ajax->call("../ajax.php?controller=bind&function=bild_elements"));
		
		
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
Basically both elements fire the same command..
<br />
<br />
<a href='#' id='link1'>Click Me (element 1)</a>
<br />
<br />
<a href='#' id='link2'>Click Me (element 2)</a>
</body>
</html>
