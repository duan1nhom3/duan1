<?php

function loadallpd(){
    $sql = "select*from product";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadonepd($id){
    $sql = "select*from product where id=$id";
    $ctpd = pdo_query_one($sql);
    return $ctpd;
}

?>
