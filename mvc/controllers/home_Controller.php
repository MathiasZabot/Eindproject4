<?php
class home_Controller {
    public function index(){
        $db = new db();
        $result = $db->getAllData('contacten');
        $numOfRows = $db->getNumOfRows();
        
        include_once 'views/home/index.php';

    }

    public function update(){
        $db = new db();
        $result = $db->updateDataById('contacten',$_POST['contact_id'],$_POST['Achternaam'],$_POST['Voornaam'],$_POST['Telnr'],$_POST['GSM'],$_POST['Email'],$_POST['Bedrijf_id']);
    }
    
}