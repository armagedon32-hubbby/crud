<?php

function insert_query($table){
    $sql = "
        insert into ".$table." values(default,:nme,:em)
    ";
    return $sql;
}


?>