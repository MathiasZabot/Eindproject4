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
        include_once 'views/create/index.php';
    }
    public function create(){
        new db;
        $db->createData('contacten',$_POST['Achternaam'],$_POST['Voornaam'],$_POST['Telnr'],$_POST['GSM'],$_POST['Email'],$_POST['Bedrijf_id']);

    }
}