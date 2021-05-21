<?php

spl_autoload_register('user_route');

if(isset($_POST['insertMethod'])==true){
    $table = $_POST['table'];
    UserModel::user_model($table);
}
function user_route(){
   
    include_once "../Http/models/user.php";
    include_once "../provider/interface.php";
    
}



?>