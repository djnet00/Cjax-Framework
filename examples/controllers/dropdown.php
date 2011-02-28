<?php

class controller_dropdown {
	
	function propagate($selected)
	{
		$ajax = CJAX::getInstance();
		$data = array();
		
		
		switch($selected) {
			case 'options':
				$data[1] = "Option 1";
				$data[2] = "Option 2";
				$data[3] = "Option 3";
				$data[4] = "Option 4";
				$data[5] = "Option 5";
			break;
			case 'states':
				
				$data[1] = "Texas";
				$data[2] = "Florida";
				$data[3] = "New York";
				$data[4] = "California";
				$data[6] = "New Mexico";
				$data[5] = "Maine";
			break;
		}
		
		//setcookie('data','testesttest',time()+1000*10);
		$ajax->select('dropdown2',$data);
		
	}
	
	/**
	 * this function is almost identical to the function above, except it changes the dropdown into 
	 * a textbox if nothing is selected as a mode of input
	 * 
	 * @param $selected
	 */
	function propagate_allow_input($selected)
	{
		$ajax = CJAX::getInstance();
		$data = array();
		
		
		switch($selected) {
			case 'options':
				$data[1] = "Option 1";
				$data[2] = "Option 2";
				$data[3] = "Option 3";
				$data[4] = "Option 4";
				$data[5] = "Option 5";
			break;
			case 'states':
				
				$data[1] = "Texas";
				$data[2] = "Florida";
				$data[3] = "New York";
				$data[4] = "California";
				$data[6] = "New Mexico";
				$data[5] = "Maine";
			break;
		}
		
		//setcookie('data','testesttest',time()+1000*10);
		$ajax->select('dropdown2',$data,true);
		
	}
}