<?php 
namespace AngryCoders\HelpInfo\modules\models;
use AngryCoders\Db\Db;
use AngryCoders\Db\DbException;

class ParentModel{
	
	
	
	/*
	 * Create database helpInfo table
	 * */
	public function createTable(){
		$db=new Db();
		
	
		try {
		
			$db->createTable("HelpInfo", array(
					"helpInfoID" => array(Db::INTEGER, 11, Db::PRIMARY_KEY, Db::AUTO_INCREMENT),
					"title" => array(Db::VARCHAR, 50),
					"description" => array(Db::TEXT,200)
			)
			);
		
		} catch (DbException $e) {
			echo $e;
		}
	}
	
	public function viewInfo($tableName, $field, $value, $fields = array()){
		$db=new Db();
		
		return  $db->getRecord($tableName, $field, $value, $fields = array());
		
		
	}
	
	
	
}

?>