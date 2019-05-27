<?php


function my_autoloader($class_name){
    require_once("controllers/$class_name.php");
}

spl_autoload_register('my_autoloader');

require_once ("models/db.php");
require_once ("models/gebruiker.php");


/**
 * require_once 'controllers/home_Controller.php';
*require_once 'controllers/errorController.php';
*require_once 'controllers/contact_Controller.php';
*/

/**
 * dispatching the world
 */
$gebruiker = new gebruiker();

if (!isset($_COOKIE["authentication"])){
        $logincontroller = new login_Controller();
        $logincontroller->index();
        if (isset($_POST["gebruikersnaam"])&& isset($_POST["wachtwoord"])){
            $logincontroller->authenticate($_POST["gebruikersnaam"],$_POST["wachtwoord"]);
        }
    }else{
        $homecontroller = new home_Controller();
        $homecontroller->index();
       
    };



