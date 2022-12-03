<?php
function loadblpd($idpd){
    $sql = "select * from comment where id_product=$idpd order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

function insertcomment($content,$id_user,$id_pd){
    $sql = "INSERT INTO `comment`(`content`, `id_user`, `id_product`) VALUES ('$content','$id_user','$id_pd')";
    pdo_execute($sql);

}
function comment(){
    $sql="select * from comment";
    $comment= pdo_query($sql);
    return $comment;
}

function deletecomment($id){
    $sql="delete from comment where id=$id";
    pdo_execute($sql);
}
?>