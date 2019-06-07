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
        include_once 'views/update/index.php';
    }
}