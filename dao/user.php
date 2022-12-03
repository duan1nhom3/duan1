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
function register($hoten,$email,$pass){
    $sql = "INSERT INTO `user`(`fullname`, `email`, `password`,`role_id`) VALUES ('$hoten','$email','$pass','1')";
    pdo_execute($sql);
}
function loadall_user(){
    $sql = 'select * from user order by id desc';
    $list_user = pdo_query($sql);
    return $list_user;
}
function add_user($fullname,$email,$password,$img,$address,$phone_number,$role){
    $sql = "INSERT INTO `user`( `fullname`, `email`, `password`, `img`, `address`, `phone_number`, `role_id`) VALUES ('$fullname','$email','$password','$img','$address','$phone_number','$role')";
    pdo_execute($sql);
}
function signup($fullname,$email,$password,$img,$role){
    $sql = "INSERT INTO `user`( `fullname`, `email`, `password`, `img`, `role_id`) VALUES ('$fullname','$email','$password','$img','$role')";
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
function update_user($id,$fullname,$email,$password,$hinh,$address,$phone_number,$role){
    $sql = "UPDATE `user` SET `fullname`='$fullname',`email`='$email',`password`='$password',`img`='$hinh',`address`='$address',`phone_number`='$phone_number',`role_id`=$role WHERE id=".$id;
    pdo_execute($sql);
}
function update_info($id,$fullname,$email,$hinh,$address,$phone_number){
    $sql = "UPDATE `user` SET `fullname`='$fullname',`email`='$email',`img`='$hinh',`address`='$address',`phone_number`='$phone_number' WHERE id=".$id;
    pdo_execute($sql);
}
function doipass($id,$password){
    $sql = "UPDATE `user` SET `password`='$password' WHERE id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql = "select*from user where email = '$email'";
    $email = pdo_query_one($sql);
    return $email;
}
function forgotpass($email,$fullname){
    $sql = "select*from user where email = '$email' && fullname = '$fullname'";
    $email = pdo_query_one($sql);
    return $email;
}



function loadrole(){
    $sql = "select*from role";
    $role = pdo_query($sql);
    return $role;
}
?>




