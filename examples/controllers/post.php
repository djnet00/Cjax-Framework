<?php

class controller_post {
	
	function post_sample()
	{
		$ajax = CJAX::getInstance();
		
		$ajax->update("response","<pre>".print_r($_POST,1)."</pre>");
	}
}