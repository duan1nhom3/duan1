<?php 
function countbill(){
    $sql = "select count(id) as countbill, sum(total) as tong from bill";
    return pdo_query_one($sql);
}
function countbillcht(){
    $sql = "select count(id) as countbill, sum(total) as tong from bill where `status` != 'Hoàn thành' and `status` != 'Đã hủy'";
    return pdo_query_one($sql);
}
function countbillht(){
    $sql = "select count(id) as countbill, sum(total) as tong from bill where `status` = 'Hoàn thành'";
    return pdo_query_one($sql);
}
function countbilldh(){
    $sql = "select count(id) as countbill, sum(total) as tong from bill where `status` = 'Đã hủy'";
    return pdo_query_one($sql);
}
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
function countcomment(){
    $sql = "select count(id) as countcomment from comment";
    return pdo_query_one($sql);
}
function countsp(){
    $sql = "select count(id) as countpd from product";
    return pdo_query_one($sql);
}
function countuser(){
    $sql = "select count(id) as countuser from user";
    return pdo_query_one($sql);
}
function countcate(){
    $sql = "select count(id) as countcate from categories";
    return pdo_query_one($sql);
}
function pdtheocate(){
    $sql = "select categories.id as id_cate, categories.cate_name as cate, count(product.id) as countpd, max(product.price) as maxprice, min(product.price) as minprice, round(avg(product.price),3) as avgprice from product inner join categories on categories.id = product.id_cate group by categories.id  ";
    return pdo_query($sql);
}


?>