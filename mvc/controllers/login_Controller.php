<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 24/05/2019
 * Time: 21:03
 */
class login_Controller {
    public function index(){
        include_once 'views/login/index.php';
    }
    public function authenticate($username,$password){
        $gebruiker = new gebruiker();
        $results = $gebruiker->checklogin();

        if ($username === $results[0]["gebruikersnaam"] && $password === $results[0]["wachtwoord"]){
            setcookie("authentication", 1, time() + (86400), "/");
            header("location: index.php?page=loggedin");
        }else{
            die("something went wrong");
        }
    }
}