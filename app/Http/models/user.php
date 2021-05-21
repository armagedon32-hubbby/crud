<?php

include_once "../Http/controller/UserController.php";


class UserModel extends UserController implements IUsermodel {

    public function user_model($table){
        $data = [
'nme' => $_POST['nme'],
'em'  => $_POST['em'],
        ];
        UserController::insert_user($table,$data);
    }
}

?>