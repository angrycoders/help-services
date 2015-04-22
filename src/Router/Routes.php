<?php
namespace AngryCoders\HelpInfo\Router;


 use AngryCoders\HelpInfo\modules\controllers\HomeController;

 use AngryCoders\HelpInfo\modules\controllers\HelpInfoController;



class Routes{
	

protected $controller='home';
protected $method='home';
protected $params=[];
// just a list of the controllers we have and their actions
// we consider those "allowed" values
protected $controllers = array('pages' => ['home', 'error'],'HelpInfo'=>['inf','error']);


public function __construct()
{
	$url=$this->parseUrl();
	
	print_r($url);
	
	
	$this->controller=$url[0];
	$this->method=$url[1];
	unset($url[1]);
	
	
	//DIsplays the name of the controller and its methods
	echo 'This is the controller::'.$this->controller.' and its method::'.$this->method;
	
    
	//require_once('modules/controllers/' . $this->controller .'.php');
	
	// create a new instance of the needed controller
	switch($this->controller) {
		case 'pages':
			$this->controller = new HomeController($this->method);
			break;
		case 'help':
			$this->controller= new HelpInfoController($this->method);
			break;
	}
	$this->controller->{ $this->method }(); 
}
	



public function parseUrl()
{
	if(isset($_GET['url']))
           {
           echo $_GET['url'];
	      return $url=explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
	      
    	   }
}



}
?>
