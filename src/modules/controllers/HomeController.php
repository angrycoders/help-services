<?php

namespace AngryCoders\HelpInfo\modules\controllers;

use  AngryCoders\HelpInfo\modules\views\Home\Homeview as Hv;
use  AngryCoders\HelpInfo\Router\Controller;
//use  AngryCoders\HelpInfo\modules\views\pages\error;

  class HomeController extends Controller{
  	
  	
  	  	
    public function home() {
    	
    	$this->model('ParentModel');
    	  
    }

    
    
    public function error() {
     // require_once ('../views/Home/error.php');
    }

  
  }
?>
