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

define('AJAX_CONTROLLER',1);
require_once (dirname(__file__)).'/cjax/cjax.php';
class ajax  {

	//if you experience a file not found error, enter the path to the base/parent directory where the controllers are.
	CONST CONTROLLERS_BASE = "";
	CONST CONTROLLERS_DIR = "controllers";

    function ajax($controller)
    {
		$ajax = CJAX::getInstance();
		$dir = $ajax->get('cjax_dir');

        $getcwd = getcwd();

        if(!$dir && $ajax->get('load_controller')) {
			$dir = $ajax->get('load_controller');
        }
		if(!$dir && $ajax->get('controller_cd')){
			$dir = $ajax->get('controller_cd');
		}

        $a = ((isset($_REQUEST['a']))? $_REQUEST['a']:null);
        $b = ((isset($_REQUEST['b']))? $_REQUEST['b']:null);
        $c = ((isset($_REQUEST['c']))? $_REQUEST['c']:null);
        $d = ((isset($_REQUEST['d']))? $_REQUEST['d']:null);
        $e = ((isset($_REQUEST['e']))? $_REQUEST['e']:null);

        $controller = $ajax->get('controller');
        if(!$controller) {
        	die("controller no defined.");
        }

        if(self::CONTROLLERS_BASE) {
	        if(!file_exists($file = self::CONTROLLERS_BASE."/".self::CONTROLLERS_DIR."/{$controllers}.php")) {
				die("controller file: $file not found.");
	        }
        } else {
			if($dir && is_file($file = $dir."/".self::CONTROLLERS_DIR."/".$controller.'.php')) {

			} elseif($ajax->controller_dir && file_exists($file = $ajax->controller_dir."/".self::CONTROLLERS_DIR."/".$controller.'.php')) {

	        } else if(file_exists($file = dirname(__file__)."/".self::CONTROLLERS_DIR."/".$controller.'.php')) {

	        } else {
	        	 $file = self::CONTROLLERS_DIR."/".$controller.'.php';
	        }
	        if (!is_file($file)) {
	            die("controller file: $file not found");
	        }
        }
        require_once $file;
        $class = 'controller_'.$controller;
        if(!class_exists($class)) {
            die("controller class not \"{$class}\" found");
        }

		$function = (isset($_REQUEST['function'])? $_REQUEST['function']:$ajax->get('section'));

        $obj = cjax_singleton::getInstance($class);
		if(!method_exists($obj,$function)) {
        	if(!method_exists($obj,'controller')) {
        		$err = "controller method/function \"$class::$function()\" not found";
				$ajax->error($err);
				die($err);
        	}
        }


        unset($_GET['controller']);
        unset($_GET['function']);

		if($e!==null) {
			$response = $obj->{$function}($a,$b,$c,$d,$e);
		} else if($d!==null) {
			$response = $obj->{$function}($a,$b,$c,$d);
		}else if($c!==null) {
			$response = $obj->{$function}($a,$b,$c);
		} else if($b!==null) {
			$response = $obj->{$function}($a,$b);
		} else if($a!==null) {
			$response = $obj->{$function}($a);
		} else {
			$response = $obj->{$function}();
		}
		if(defined('CJAX_RESPONSE')) {
			print $response;
		}
    }

}
$ajax = CJAX::getInstance();
$controller = $ajax->get('controller');
if($controller) {
	new ajax($controller);
}