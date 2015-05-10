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
		
		
		$model=new ParentModel();
		$model->createTable();
		return new $model();
		;
	}
	
	/*
	 * Loads the views
	 * */
	public function view($view,$data) {
		;
	}
}
