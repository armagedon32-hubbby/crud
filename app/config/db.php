<?php
class DBIntegrate{
private $host = "localhost";
private $dbname = "dbcrud";
private $username = "root";
private $password = "";
private $outbound;
private $stmt;
}

class DBIntegrate{


public function connect(){
    try{
$dsn = "mysql:host=".config::$host.";dbname=".config::$dbname;
config::$outbound = new PDO($dsn,config::$username,config::$password);
config::$outbound->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXEPTION);
return config::$outbound;

    }catch(PDOExeption $e){
            die("could not connect" . $e->getMessage());
    }
}

//$query = "insert into tbuser(default, :firstname,:lastname)";
//$stmt = pdo->prepare(query);

public function CHECKSERVER(){
    return $_SERVER['REQUEST_METHOD']== 'POST';
}
//$stmt->bindParam(':lastname', $data['lastname'], PDO:PARAM_STR);
public function bind($param,$value,$type = null){
    if(is_null($type)){
        switch(true){
            case $type ==1:
                $type = PDO::PARAM_INT;
                break;
                default:
                $type = PDO::PARAM_STR;
        }
    }
    return config::$stmt->bindParam($param,$value,$type);
}
//$stmt->execute();
public function ControllerPrepare($sql){
    $pdo = DBIntegrate::connect();
    return config::$stmt = $pdo->prepare($sql);
}
// if($_SERVER["REQUEST_METHOD] =='POST'){}
public function ControlExecutable(){
    return config::$stmt->execute();
}



?>