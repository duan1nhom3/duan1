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


function size(){
    $sql = "select*from size";
    $size = pdo_query($sql);
    return $size;
}
function color(){
    $sql = "select*from color";
    $color = pdo_query($sql);
    return $color;
}
function selectsize($id){
    $sql = "select * from size where id=$id";
    $size = pdo_query_one($sql);
    return $size;
}

function selectcolor($id){
    $sql = "select * from color where id=$id";
    $color = pdo_query_one($sql);
    return $color;
}
?>
