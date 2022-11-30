<?php
function insert_imgdes($img,$idpd){
    $sql = "INSERT INTO `img`(`img_name`, `id_product`) VALUES ('$img','$idpd')";
    pdo_execute($sql);
}
function load_imgdes($id){
    $sql = "select * from img where id_product=$id";
    $img = pdo_query($sql);
    return $img;
}
function delete_img_product($id){
    $sql = "DELETE FROM img WHERE id_product=$id";
    pdo_execute($sql);
}
?>