<?php
class home_Controller {
    public function index(){
        $db = new db();
        $result = $db->getAllData('contacten');
        $numOfRows = $db->getNumOfRows();
        
        include_once 'views/home/index.php';

    }
    
}