<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

//this is as simple as it gets..


$ajax->Exec("dropdown1",$ajax->call("../ajax.php?controller=dropdown&function=propagate&a=|dropdown1|"),"onchange");

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
<select id='dropdown1'>
<option value="" selected="selected">Other..</option>
<option value="options">Options</option>
<option value="states">Some States</option>
</select>
<br />
<select id='dropdown2'>
<option>Select something above..</option>
</select>
</body>
</html>
