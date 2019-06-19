<?php

class db
{
    private $host, $username, $password, $dbname;

    protected $conn;
    public $numOfRows;

    public function __construct($host = 'localhost', $username ='root', $password ='', $dbname ='klanten')
    {
        $this->host =$host;
        $this->username =$username;
        $this->password =$password;
        $this->dbname = $dbname;


        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    public function getAllData($table){
        if ($table==="contacten"){
            $stmt = $this->conn->prepare("SELECT * FROM ".$table." INNER JOIN bedrijven ON contacten.bedrijf_id = bedrijven.bedrijf_id");
        }else{
            $stmt = $this->conn->prepare("SELECT * FROM ".$table);
        }
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;
    }

    public function getDataByID($table,$contact_id){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE contact_id = '".$contact_id."'");

        //die("SELECT * FROM ".$table." WHERE contact_id = '".$contact_id."'");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;
    }

    
    public function getCombinedData($contact_id){
        $stmt = $this->conn->prepare("SELECT * FROM contacten INNER JOIN bedrijven ON contacten.bedrijf_id = bedrijven.bedrijf_id
        WHERE contact_id = '".$contact_id."'");

        //die("SELECT * FROM ".$table." WHERE contact_id = '".$contact_id."'");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;
    }
    
    public function createContactData($achternaam, $voornaam, $telnr, $gsmnr, $email, $bedrijf_id){

        $sql = "INSERT INTO contacten (achternaam,voornaam,telnr,gsmnr,email,bedrijf_id) VALUES ('".$achternaam."', '".$voornaam."', '".$telnr."', 
        '".$gsmnr."', '".$email."','".$bedrijf_id."')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function createBedrijfData($naam){

        $sql = "INSERT INTO bedrijven VALUES ('".$naam."')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    
    public function updateContactDataById($id, $achternaam, $voornaam, $telnr, $gsmnr, $email, $bedrijf_id){
        $sql = "UPDATE contacten SET achternaam = '".$achternaam."', voornaam = '".$voornaam."', telnr = '".$telnr."',
        gsmnr = '".$gsmnr."', email = '".$email."', bedrijf_id = '".$bedrijf_id."' WHERE contact_id = '".$id."'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function updateBedrijfDataById($id, $naam){
        $sql = "UPDATE bedrijven SET naam = '".$naam."' WHERE bedrijf_id = '".$id."'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function deleteDataById($table=null, $id=null){
        if ($table === 'contacten'){
            $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE contact_id=".$id);
        }elseif ($table === 'bedrijven'){
            $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE bedrijf_id=".$id);
        }
        $stmt->execute();
    }


    public function checkLogin($table="gebruikers",$gebruiker_id=1){
        $sql = "SELECT loginstatus FROM ".$table." WHERE gebruiker_id =".$gebruiker_id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        var_dump($result);
    }

    public function getNumOfRows()
    {
        return $this->numOfRows;
    }
}
