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
        $result2 = $db->getAllData('bedrijven');
        include_once 'views/update/index.php';
    }

    public function update(){
        $db = new db();
        $result = $db->updateDataById('contacten',$_POST['contact_id'],$_POST['Achternaam'],$_POST['Voornaam'],$_POST['Telnr'],$_POST['GSM'],$_POST['Email'],$_POST['Bedrijf_id']);
    }
}