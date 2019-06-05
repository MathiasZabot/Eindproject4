<?php


function my_autoloader($class_name){
    require_once("controllers/$class_name.php");
}
function my_autoloader2($class_name){
    require_once("models/$class_name.php");
}

spl_autoload_register('my_autoloader');
spl_autoload_register('my_autoloader2');


require_once ("models/db.php");
require_once ("models/gebruiker.php");

//setcookie("authentication",null,-1,"/");
$logincontroller = new login_Controller();
$request = isset($_GET["page"]) ? $_GET["page"] : null ;

if ($request === "loginattempt" && !isset($_COOKIE["authentication"])){
    $logincontroller->authenticate($_POST["gebruikersnaam"],$_POST["wachtwoord"]);
}else if($request !== null && isset($_COOKIE["authentication"])){
    switch ($request){
        case "loggedin":
            $homecontroller = new home_Controller();
            $homecontroller->index();
            break;
        case "create":
            $createController = new create_Controller();
            $createController->index();
            break;
        case "update":
            $updateController = new update_Controller();
            $updateController->index();
            break;
        case "delete":
            $deleteController = new create_Controller();
            break;
        default:
            setcookie("authentication",null,-1,"/");
            $logincontroller->index();
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



