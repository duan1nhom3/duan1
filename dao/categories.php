<?php 
function loadallcate(){
    $sql = "select categories.id,categories.cate_name,count(product.id) as countpd from product inner join categories on categories.id = product.id_cate group by categories.id";
    $lishcate = pdo_query($sql);
    return $lishcate;
}

?>