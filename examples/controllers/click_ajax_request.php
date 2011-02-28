<?php

class controller_click_ajax_request {
	
	function click_button($message)
	{
		$ajax = NEW CJAX;
		
		$ajax->success("You clicked the button..");
		
		$ajax->alert($message);
	}
}