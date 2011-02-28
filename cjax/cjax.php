<?php
/** ################################################################################################**   
* Copyright (c)  2008  CJ.   
* Permission is granted to copy, distribute and/or modify this document   
* under the terms of the GNU Free Documentation License, Version 1.2   
* or any later version published by the Free Software Foundation;   
* Provided 'as is' with no warranties, nor shall the autor be responsible for any mis-use of the same.     
* A copy of the license is included in the section entitled 'GNU Free Documentation License'.   
*   
*   CJAX  3.1 RC3                $     
*   ajax made easy with cjax                    
*   -- DO NOT REMOVE THIS --                    
*   -- AUTHOR COPYRIGHT MUST REMAIN INTACT -   
*   Written by: CJ Galindo                  
*   Website: https://github.com/cjax/Cjax-Framework                     $      
*   Email: cjxxi@msn.com    
*   Date: 2/12/2007                           $     
*   File Last Changed:  02/26/2011            $     
**####################################################################################################    */   


include 'core/cjax_config.php';
$ajax = CJAX::getInstance();

$headers = apache_request_headers();
if(!isset($headers['X-Requested-With']) || $headers['X-Requested-With']!="CJAX FRAMEW0RK 3.1 RC3") {
	if(count(array_keys(debug_backtrace())) == 1) {
		exit("Security Error. You can not access this file directly.");
	}
} else  if($ajax->loading()) {

	if(isset($_SERVER['QUERY_STRING']) && $query = $_SERVER['QUERY_STRING']) {
		$packet = explode("/",$query);
		if($packet && count(array_keys($packet) >= 2) && $packet[0] && $packet[1]) {
			$ajax->loading(false);
			$_REQUEST['controller'] = $packet[0];
			$_REQUEST['function'] = $packet[1];
			$_REQUEST['cjax'] = time();
			unset($packet[0]);
			unset($packet[1]);
			if($packet){
				$params = array('a','b','c','d','e','f');
				do {
					$_REQUEST[current($params)] = current($packet);
				} while(next($packet) && next($params));
			}
			define('CJAX_RESPONSE', 1);
		}
	}
}