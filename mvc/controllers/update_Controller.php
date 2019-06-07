<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 24/05/2019
 * Time: 21:03
 */
class update_Controller {
    public function index(){
        $db = new db();
        $result = $db->getCombinedData($_GET['id']);
        //die(var_dump($_GET['id']));
        $result2 = $db->getAllData('bedrijven');
        include_once 'views/update/index.php';
    }

    public function update($table,$contact_id,$achternaam,$voornaam,$telnr,$gsm,$email,$bedrijf_id){
        $db = new db();
        $db->updateDataById($table,$contact_id,$achternaam,$voornaam,$telnr,$gsm,$email,$bedrijf_id);

    }
}