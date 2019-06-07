<?php


function my_autoloader($class_name){
    require_once("controllers/$class_name.php");
}
/*function my_autoloader2($class_name){
    require_once("models/$class_name.php");
}*/

spl_autoload_register('my_autoloader');
/*spl_autoload_register('my_autoloader2');*/


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
            echo serialize($_POST);
            $updateController->index();
            break;
        case "update_done":
            $updateController = new update_Controller();
            $homecontroller = new home_Controller();
            $updateController->update('contacten',$_POST['contact_id'],$_POST['Achternaam'],$_POST['Voornaam'],$_POST['Telnr'],$_POST['GSM'],$_POST['Email'],$_POST['Bedrijf_id']);
            $homecontroller->index();
            break;
        case "delete":
            $deleteController = new delete_Controller();
            $homecontroller = new home_Controller();
            $deleteController->delete();
            $homecontroller->index();
            break;
        default:
            setcookie("authentication",null,-1,"/");
            echo "Something went wrong, please try again";
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



