<?php 
require_once  '../vendor/autoload.php';
		
use AngryCoders\Db\Db;

use AngryCoders\Db\DbException;

$db=new Db();	




try {

	$db->createTable("student", array(
			"studentID" => array(Db::INTEGER, 11, Db::PRIMARY_KEY, Db::AUTO_INCREMENT),
			"regNo" => array(Db::VARCHAR, 20),
			"accountID" => array(Db::INTEGER, 11),
			"name" => array(Db::VARCHAR, 50)));

} catch (DbException $e) {
	echo $e;
}	


?>