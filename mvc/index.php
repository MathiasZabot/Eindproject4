<?php


function my_autoloader($class_name){
    require_once("controllers/$class_name.php");
}

spl_autoload_register('my_autoloader');

require_once ("models/db.php");

/**
 * require_once 'controllers/home_Controller.php';
*require_once 'controllers/errorController.php';
*require_once 'controllers/contact_Controller.php';
*/

/**
 * dispatching the world
 */
$db = new db();
$db->checkLogin();

/*if (){
    if ($_GET['login']==='login'){
        $logincontroller = new login_Controller();
        $logincontroller->index();
    }else{
        $errorcontroller = new errorController();
        $errorcontroller->index();
    }
}else{
    $homecontroller = new home_Controller();
    $homecontroller->index();
}*/

