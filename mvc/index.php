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

$logincontroller = new login_Controller();
$request = isset($_GET["page"]) ? $_GET["page"] : null ;

if($request !== null){

    if($request === "loggedin"){
        $logincontroller->authenticate($_POST["gebruikersnaam"],$_POST["wachtwoord"]);
        $homecontroller = new home_Controller();
        $homecontroller->index();
    }else{
        // TODO: 404 pagina
    }
}else{
    $logincontroller->index();
}

/*$gebruiker = new gebruiker();

if (isset($_COOKIE["authentication"])){
    $homecontroller = new home_Controller();
    $homecontroller->index();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["gebruikersnaam"])&& isset($_POST["wachtwoord"])){
            $logincontroller->authenticate($_POST["gebruikersnaam"],$_POST["wachtwoord"]);
        }
    }elseif(){

    }
}


    die('geen cookie / geen request');
*/



