<?php
    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

class UserController extends DBIntegrate Implements IUserController{
    public function insert_user($table ,$data ){
        if(DBIntegrate::CHECKSERVER()){
            $stmt = DBIntegrate::ControllerPrepare(insert_query($table))
            $stmt->bindParam(':nme',$data['nme'],PDO::PARAM_STR);
            $stmt->bindParam(':em',$data['em'],PDO::PARAM_STR);
            if(DBIntegrate::ControllerExecutable()){
                echo json_encode(array('statusCode' =>200));
            }
        }


    }
}




?>