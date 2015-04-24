<?php

namespace AngryCoders\HelpInfo\Router;


 use AngryCoders\HelpInfo\modules\controllers\HomeController;

 use AngryCoders\HelpInfo\modules\controllers\HelpInfoController;



class Routes{
	

protected $controller='HomeController';
protected $method='home';
protected $params=[];


public function __construct()
{
	$url=$this->parseUrl();
	
	print_r($url);
	
	
	
	if(file_exists('../modules/controllers/' .$url[0].'.php'))
	{
		$this->controller=$url[0];
		unset($url[0]);
	}
	
	//require_once '../modules/controllers/' .$this->controller.'.php';
	
	$this->controller =new $this->controller;
	
	if (isset($url[1]))
	{
		if(method_exists($this->controller,$url[1]))
		{
			$this->method=$url[1];
			unset($url[1]);
		}
	
	}
	
	$this->params=$url ? array_values($url):[];
	call_user_func_array([$this->controller,$this->method],$this->params);
	
	/*
	 	
	print_r($url);
	
	
	$this->controller=$url[0];
	unset($url[0]);
	$this->controller =new $this->controller;
	$this->method=$url[1];
	unset($url[1]);
	$this->params=$url ? array_values($url):[];
	call_user_func_array([$this->controller,$this->method],$this->params);
	
	//DIsplays the name of the controller and its methods
	echo 'This is the controller::'.$this->controller.' and its method::'.$this->method .' and its parammeters::'.$this->params;
	
    
	//require_once('modules/controllers/' . $this->controller .'.php');
	
	// create a new instance of the needed controller
	switch($this->controller) {
		case 'pages':
			$this->controller = new HomeController();
			$controller->{ $this->method }();
			break;
		case 'help':
			$this->controller= new HelpInfoController($this->method);
			break;
	}*/
	
}
	



public function parseUrl()
{
	if(isset($_GET['url']))
           {
          // echo $_GET['url'];
	      return $url=explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
	      
    	   }
}



}
?>
