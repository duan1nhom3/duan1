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

function loadall_user(){
    $sql = 'select * from user order by id desc';
    $list_user = pdo_query($sql);
    return $list_user;
}
function add_user($fullname,$email,$password,$img,$address,$phone_number){
    $sql = "INSERT INTO `user`( `fullname`, `email`, `password`, `img`, `address`, `phone_number`) VALUES ('$fullname','$email','$password','$img','$address','$phone_number')";
    pdo_execute($sql);
}
function delete_user($id){
    $sql= "delete from user where id=".$id;
    pdo_execute($sql);
}
function loadone_user($id){
    $sql = "select * from user where id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_user($id,$fullname,$password,$img,$email,$address,$phone_number){
    $sql = "UPDATE `user` SET `fullname`='$fullname',`email`='$email',`password`='$password',`img`='$img',`address`='$address',`phone_number`='$phone_number' WHERE id=".$id;
    pdo_execute($sql);
}
?>


//role_id`='[value-8]'

