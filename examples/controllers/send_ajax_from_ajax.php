<?php

class controller_send_ajax_from_ajax {
	
	function call()
	{
		$ajax = CJAX::getInstance();
		
		//update div
		$ajax->update("ajax","Call 1..");
		
		//fire call
		$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call2&controller_cd=examples");

	}
	
	function call2()
	{
		$ajax = CJAX::getInstance();
		
		//update div
		$ajax->update("ajax","Call 2..");
		
		//fire call
		$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call3&controller_cd=examples");
	}
	
	function call3()
	{
		$ajax = CJAX::getInstance();
		
		//update div
		$ajax->update("ajax","Call 3..");
		
		//fire call
		$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call4&controller_cd=examples");
	}
	
	function call4()
	{
		$ajax = CJAX::getInstance();
		
		//update div
		$ajax->update("ajax","Call 4..");
		
		//fire call
		$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call5&controller_cd=examples");
	}
	
	function call5()
	{
		$ajax = CJAX::getInstance();
		
		//update div
		$ajax->update("ajax","Call 5..");
		
		//fire call
		$ajax->call("../ajax.php?controller=send_ajax_from_ajax&function=call6&controller_cd=examples");
	}
	
	function call6()
	{
		$ajax = CJAX::getInstance();
		
		//fire call
		$ajax->update("ajax","5 recursive AJAX requests were made, next fired by the previous. 4 were fired from the backend controller.");
	}	
	
}