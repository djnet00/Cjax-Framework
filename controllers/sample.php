<?php

/**
 * HOW TO USE CJAX CONTROLLERS
 * 
 * This file is intended to be a sample to create your own controllers
 * 
 * there are 4 steps to follow when creating new controllers
 * 1. create a new file inside controllers directory 
 *  name that file controller_cjax.php only  replace the word controller to the name of the actual controller you are creating.
 *  For example if this controller  name is "sample", the file name will be sample_cjax.php
 * 
 * 2. You will need to have a class inside this file and the class should be named handle_controller and replace the
 *  word controller for the actual controller name, in the case will be handle_sample in place of handle_controller
 * 
 * 3.  create a function and name it whatever you like, in this example we will name it show_message
 *  this function is the actual function that is fired when you call this controller
 * 
 * 4. When fireing an ajax event you should call this file by using the following path:
 *  ajax.php?controller=sample&section=show_message
 *  after  the event is fired the event should by default get to this class handle_sample and fire the function show_message
 *  
 *
 */

defined('CJAX_CONTROLLER') or die('Access denied');
class controller_sample {
	
	function show_message()
	{
		$ajax = CJAX::getInstance();
		$ajax->success("Testing controller <b>sample</b>.  Works ok.");
	}
	
}

