<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 24/05/2019
 * Time: 20:23
 */
class delete_Controller
{
    public function delete($table){
        $db = new db();
        $db->deleteDataById($table,$_GET['id']);
    }

}