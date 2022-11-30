<?php
function loadusercomment($id_user){
    $sql = "select*from user where id = $id_user";
    $user = pdo_query_one($sql);
    return $user;
}

function checklogin($email,$pass){
    $sql = "select*from user where email = '$email' and password='$pass'";
    $user = pdo_query_one($sql);
    return $user;
}


?>