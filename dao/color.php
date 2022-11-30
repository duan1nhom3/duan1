<?php
function color(){
    $sql = "select*from color";
    $color = pdo_query($sql);
    return $color;
}
function insert_color($id_color,$idpd){
    $sql= "INSERT INTO `pd_color`(`id_color`, `id_product`) VALUES ('$id_color','$idpd')";
    pdo_execute($sql);
}
function selectcolor($id){
    $sql = "select * from color where id=$id";
    $color = pdo_query_one($sql);
    return $color;
}
function selectpd_color($id){
    $sql = "select*from pd_color where id_product = $id";
    $color = pdo_query($sql);
    return $color;
}
function delete_color_product($id){
    $sql = "DELETE FROM pd_color WHERE id_product=$id";
    pdo_execute($sql);
}
?>