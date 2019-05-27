<?php

class gebruiker extends db{

    public function checkLogin($table="gebruikers",$gebruiker_id=1){
        $sql = "SELECT gebruikersnaam, wachtwoord FROM ".$table." WHERE gebruiker_id =".$gebruiker_id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        var_dump($result);
        return($result);
    }

    public function updateLogin($table="gebruikers", $gebruiker_id=1){
        $sql = "UPDATE ".$table." SET loginstatus = 1 WHERE gebruiker_id = ".$gebruiker_id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

}