<?php

namespace AngryCoders\HelpInfo\modules\controllers;

use  AngryCoders\HelpInfo\modules\views\Home as Hv;
use  AngryCoders\HelpInfo\Router\Controller;


  class HomeController extends Controller{
  	
  	
  	  	
    public function home() {
    	
    	$mod=$this->model('ParentModel');
    	
    	
    	$tableName='HelpInfo';
    	$field='helpInfoID';
    	$value=1;
    	$fields = array();
    	
    	$result=$mod->viewInfo($tableName, $field, $value, $fields);
    	//test view of results to be passed to the Views
    	
    	//require_once '../views/Home.php';
    	
    	new Hv($result);
    	//echo "<pre>".print_r ($result->fetchAll(),true)."</pre><br />";
    	  
    }

    
    
    public function error() {
     
    }

  
  }
?>
