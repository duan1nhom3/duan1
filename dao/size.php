<?php
function size(){
    $sql = "select*from size";
    $size = pdo_query($sql);
    return $size;
}
function insert_size($id_size,$idpd){
    $sql= "INSERT INTO `pd_size`(`id_size`, `id_product`) VALUES ('$id_size','$idpd')";
    pdo_execute($sql);
}

function selectsize($id){
    $sql = "select * from size where id=$id";
    $size = pdo_query_one($sql);
    return $size;
}
function selectpd_size($id){
    $sql = "select * from pd_size where id_product=$id";
    $size = pdo_query($sql);
    return $size;
}
function delete_size_product($id){
    $sql = "DELETE FROM pd_size WHERE id_product=$id";
    pdo_execute($sql);
}
?>