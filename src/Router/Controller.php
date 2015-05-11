<?php
namespace AngryCoders\HelpInfo\Router; 

use  AngryCoders\HelpInfo\modules\models\ParentModel;

class Controller
{
	/*
	 * Loads the models
	 * */
	
	public function model($model) {
	//	require_once ('../modules/models/'.$model.'.php');
		
		switch($model){
			case 'ParentModel': $model=new ParentModel();
								break;
								
								
			case 'StaffModel':  $model=new StaffModel();
								break;
								
			default :		    $model=new ParentModel();
								break;
			
		}
		return new $model();
	}
	
	/*
	 * Loads the views
	 * */
	public function view($view,$data) {
		;
	}
}
