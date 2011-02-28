<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

//this is as simple as it gets..

//Exect, executes the commands on the second parameter, in this case "call".
//the first argument is the element id that being used to fire the commands that the second parameter contains.
//Defualt reaction is click, but that can be changed with $ajax->event.

$ajax->Exec("my_link",$ajax->call("../ajax.php?controller=YOUR_CONTROLLER&function=METHOD&a=Parameter1&b=parameter2"));
//to add more parameters add &c= , &d= , &e= ..  following the same pattern as the url above, and so on..
//each letter will translate in alphabetical order into parameters for your controller.
?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
<span style='font-weight: bold'>Controller file:</span> controllers/YOUR_CONTROLLER.php
<br />
<br />
<a href='#' id='my_link'>Send Request</a>
</body>
</html>
