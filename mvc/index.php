<?php


function my_autoloader($class_name){
    require_once("controllers/$class_name.php");
}

spl_autoload_register('my_autoloader');

/**
 * require_once 'controllers/homeController.php';
*require_once 'controllers/errorController.php';
*require_once 'controllers/contactController.php';
*/

/**
 * dispatching the world
 */

if (isset($_GET['page'])&& $_GET !== ""){
    if ($_GET['page']==='contact'){
        $contactcontroller = new contactController();
        $contactcontroller->index();
    }else{
        $errorcontroller = new errorController();
        $errorcontroller->index();
    }
}else{
    $homecontroller = new homeController();
    $homecontroller->index();
}

