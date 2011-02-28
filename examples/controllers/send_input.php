<?php

class controller_send_input {
	
	function send_text( $text )
	{
		
		$ajax = CJAX::getInstance();
		
		$ajax->success("This message was sent: $text",30);
	}
	
	function send_checkbox( $check )
	{
		$ajax = CJAX::getInstance();
		
		if($check) {
			$ajax->success("Is checked..");
		} else {
			$ajax->warning("Is not checked..");
		}
	}
	
	
	function send_text_and_checkbox( $text , $check )
	{
		$ajax = CJAX::getInstance();
		
		if($check) {
			$ajax->info("text is: \"$text\" and it is checked....");
		} else {
			$ajax->warning("text is: \"$text\" and it is not checked....");
		}
	}
}