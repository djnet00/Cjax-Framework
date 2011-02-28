<?php

class controller_real_time {
	
	function update($text)
	{
		$ajax = CJAX::getInstance();
		$new_time =   (microtime(true) - $ajax->get('cjax'));
		
		$secs  = $new_time /1000;
		$ajax->update('div_response',"
		Response time: $new_time seconds/milliseconds
		<br />
		<br />
		$text");
	}
}