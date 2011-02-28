<?php
//core file, reference..
require_once "../ajax.php";
//initiate CJAX..
$ajax = CJAX::getInstance();

$ajax->set_class("my_div","class1");
$ajax->wait(2);
$ajax->set_class("my_div","class2");
$ajax->wait(2);
$ajax->set_class("my_div");
//$ajax->Exec("button1",$ajax->call("../ajax.php?controller=change_value&function=text&a=text1&b=|text1|"));
//$ajax->Exec("button2",$ajax->call("../ajax.php?controller=change_value&function=check&a=check1&b=|check1|"));

?>
<html>
<head>
<?php echo $ajax->init();?>
<style type="text/css">
.class1 {
	color: red;
}
.class2 {
	color: blue;
}
</style>
</head>
<body>
<br />
<br />
<br />
<div id='my_div' class='class1'>
CJAX has the ability to call magic methods and evaluate them as javascript functions. As a result
giving the ability to call any javascript function in the CJAX_FRAMEWORK class from PHP. This is in 
addition to the the already defined none magic methods that are used in the other examples.
<br />
<br />

<br />
</div>
<br />
<br />
Eg. #1.
<br />
<br />
Javascript methodology allows to pass dots to access certain methods. For example..<br />
<br />
CJAX.set.class(element,_class);
<br />
CJAX.set.center(element);
<br />
CJAX.set.property.focus(element);
<br />
<br />
PHP does not allow the ability to use dots, so if you would like to call a function like that from PHP
you would replace dots "." for undercores "_".
<br />
<br />
$ajax->set_class(element,class);
<br />
$ajax->set_center(element);
<br />
$ajax->set_property_focus(element); 
<br />
<br />
To see a full list of all methods/functions allowed, look into the file cjax/core/js/cjax.js

</body>
</html>
