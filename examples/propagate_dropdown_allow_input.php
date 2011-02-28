<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

//this example is almost identical to "propagate_dropdown" except a small change in the controler method.


$ajax->Exec("dropdown1",$ajax->call("../ajax.php?controller=dropdown&function=propagate_allow_input&a=|dropdown1|"),"onchange");

?>
<html>
<head>
<?php echo $ajax->init();?>
</head>
<body>
<br />
This example is almost identical to the other example "propagate dropdown", except on this example when you select<br />
"other..", it displays a input box, to type in.
<br /><br />
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
