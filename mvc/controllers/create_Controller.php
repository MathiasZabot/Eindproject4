<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 24/05/2019
 * Time: 20:23
 */
class create_Controller
{
    public function index(){
        $db = new db();
        $result2 = $db->getAllData('bedrijven');
        include_once 'views/create/index.php';
    }
  
    public function indexbedrijf(){
        $db = new db();
        $result = $db->getAllData('bedrijven');
        include_once 'views/createBedrijf/index.php';
    }

    public function createContact($achternaam,$voornaam,$telnr,$gsm,$email,$bedrijf_id){
        $db = new db();
        $db->createContactData($achternaam,$voornaam,$telnr,$gsm,$email,$bedrijf_id);
    }

    public function createBedrijf($naam){
        $db = new db();
        $db->createBedrijfData($naam);
    }
}