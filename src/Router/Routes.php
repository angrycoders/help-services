<?php

namespace AngryCoders\HelpInfo\Router;


 use AngryCoders\HelpInfo\modules\controllers\HomeController;

 use AngryCoders\HelpInfo\modules\controllers\HelpInfoController;



class Routes{
	
//defaults
protected $controller='HomeController';
protected $method='home';
protected $params=[];


public function __construct()
{
	
	$url=$this->parseUrl();
		
	$this->controller=$url[0];
	print $this->controller;
	unset($url[0]);
	$this->method=$url[1];
	print $this->method;
	unset($url[1]);
	print_r($url);
	//->params=$url[2];
	//print $this->params;
	
	

	$this->call($this->controller,$this->method);

}

public  function call($c, $m) {

    switch($c) {
      case 'HomeController':
        $this->controller = new HomeController();
        $this->controller->{ $m }();
      break;
      case 'HelpInfoController':
      	$this->controller= new HelpInfoController();
      break;
    }
    // call the action
   // $this->controller->{ $m }();
    }




public function parseUrl()
{
	if(isset($_GET['url']))
           {
         
	      return $url=explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
	    
    	   }
}



}
?>
