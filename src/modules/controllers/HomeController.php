<?php

namespace AngryCoders\HelpInfo\modules\controllers;

//use  AngryCoders\HelpInfo\modules\views\pages\home;
//use  AngryCoders\HelpInfo\modules\views\pages\error;

  class HomeController {
    public function home() {
    	
    	//	REQUIRE DATABASE HERE AND ASSIGN DATA TO VARIABLES
      $first_name = 'Oginga ';
      $last_name  = 'Steven';
      require_once('src/modules/views/pages/home.php');
    }

    public function error() {
      require_once('src/modules/views/pages/error.php');
    }
  }
?>
