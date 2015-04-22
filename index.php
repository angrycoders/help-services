<?php
namespace AngryCoders\HelpInfo;

require_once  'vendor/autoload.php';
  //require_once('connection.php');
  
 use  AngryCoders\HelpInfo\modules\init;
 use  AngryCoders\HelpInfo\Router\Routes;

  /*if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  } */
  
  
  
 // require_once 'src/modules/init.php';
  $router =new Routes;
  
  // means that every link would have to point to /?x=y or /index.php?x=y.
?>