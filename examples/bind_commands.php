<?php
//core file, reference..
require_once "../ajax.php";
//initiate Orchestra..
$ajax = CJAX::getInstance();


//This example shows how to send more than 1 ajax call, 
//( or any other command for tha matter) within 1 single command as nested.



//multiple commands can be binded..
//defeault event is "click"
$ajax->Exec("link1", 
		array(
			$ajax->call("../ajax.php?controller=bind&function=link2"),
			$ajax->alert("Hello World 1"),
			$ajax->alert("Hello World 2"),
		));//default event is "click"
		

//different event.. "blur"
$ajax->Exec("link2", 
		array(
			$ajax->call("../ajax.php?controller=bind&function=link2"),
			$ajax->alert("Hello World 1"),
			$ajax->alert("Hello World 2"),
		),'blur');
		
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />

<br />
<a href='#' id='link1'>Click Me</a>
<br />
<br />
the following is on "blur" event..
<br />
<a href='#' id='link2'>Click Me</a>
</body>
</html>
