<?php

function loadallpd($id_cate,$kw,$page){
    $sql = "select*from product where 1";
    if ($kw != "") {
        $sql.= " and product_name like '%".$kw."%'";
    }
    if ($id_cate > 0) {
        $sql.= " and id_cate = '".$id_cate."'";
    }
    if ($page == '' || $page == 1) {
        $begin = 0;
    }else{
        $begin = ($page*9)-9;
    }
    
    $sql.= " order by id desc limit $begin,9";
    $listpd = pdo_query($sql);
   
    return $listpd;
}
function loadpd(){
    $sql = "select*from product";
    return pdo_query($sql);
}
function loadpdbestsell(){
    $sql = "select*from product order by luotmua desc limit 0,12";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadsixpdbestsell(){
    $sql = "select*from product order by luotmua desc limit 0,6";
    $listpd = pdo_query($sql);
    return $listpd;
}

function loadpdnew(){
    $sql = "select*from product order by id desc limit 0,8";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadthreepdnew(){
    $sql = "select*from product order by id desc limit 0,3";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadpdsale(){
    $sql = "select*from product order by (discount-price) desc limit 0,8";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadthreepd_cate($id_cate){
    $sql = "select*from product where id_cate=$id_cate order by id desc limit 0,5";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadpdfour_cate($id,$id_cate){
    $sql = "select*from product where id!=$id and id_cate=$id_cate order by id desc limit 0,4";
    $listpd = pdo_query($sql);
    return $listpd;
}
function loadonepd($id){
    $sql = "select*from product where id=$id";
    $ctpd = pdo_query_one($sql);
    return $ctpd;
}
function insertpd($pdname,$price,$img,$cate,$discount,$description){
    $sql = "INSERT INTO `product`(`product_name`, `img`, `price`, `discount`, `id_cate`, `description`) VALUES ('$pdname','$img','$price','$discount','$cate','$description')";
    $idpd = pdo_execute_return_lastInsertId($sql);
    return $idpd;
}
function delete_product($id){
    $sql = "DELETE FROM `product` WHERE id=$id";
    pdo_execute($sql);
}

function inserthh($tenhh,$dongia,$hinh,$loai,$dacbiet,$mota){
    $sql = "INSERT INTO `hang_hoa`(`ten_hh`, `don_gia`, `hinh`,`id_loai`, `dac_biet`, `mo_ta`) VALUES ('$tenhh','$dongia','$hinh','$loai','$dacbiet','$mota')";
    pdo_execute($sql);
}
function updatepd($idpd,$pdname,$price,$img,$cate,$discount,$description){
    $sql = "UPDATE `product` SET `product_name`='$pdname',`img`='$img',`price`='$price',`discount`='$discount',`id_cate`='$cate',`description`='$description' WHERE id=$idpd";
    pdo_execute($sql);
}
function luotmua($id,$soluongmua,$luotmua){
    $sql = "UPDATE `product` SET `luotmua` = ($soluongmua+$luotmua) where id=$id";
    pdo_execute($sql);
}
?>
