<?php

class controller_post {
	
	function post_sample()
	{
		$ajax = CJAX::getInstance();
		
		$cjax->update("params","<pre>".print_r($_POST,1)."</pre>");
	}
}