<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 24/05/2019
 * Time: 20:23
 */
class delete_Controller
{
    public function index(){
        $db = new db();
        $db->deleteDataById('contacten',$_GET['id']);

        include_once 'views/home/index.php';
    }

}