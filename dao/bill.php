<?php
function insertbill($id,$hoten,$diachi,$sdt,$email,$pttt,$total,$status,$time){
    $sql = "INSERT INTO `bill`(`id_user`,`fullname`,`address`, `phone_number`, `email`, `method`, `total`,`status`,`date`) VALUES ('$id','$hoten','$diachi','$sdt','$email','$pttt','$total','$status','$time')";
    return pdo_execute_return_lastInsertId($sql);
}

function insertbill_details($id_bill,$pdname,$price,$img,$size,$color,$amount,$total){
    $sql = "INSERT INTO `bill_details`(`id_bill`, `product_name`, `price`, `img`, `size`, `color`,`amount`, `total`) VALUES ('$id_bill','$pdname','$price','$img','$size','$color','$amount','$total')";
    return pdo_execute($sql);
}
function loadonebill($idbill){
    $sql = "select*from bill where id=$idbill";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadonecart($idbill){
    $sql = "select*from bill_details where id_bill=$idbill";
    $bill = pdo_query($sql);
    return $bill;
}
function cart(){
    $sql="select * from bill inner join bill_details on bill.id = bill_details.id_bill";
    $bill = pdo_query($sql);
    return $bill;
}
function loadallbill($id){
    $sql ="select*from bill where id_user = $id order by id desc";
    return pdo_query($sql);
}
function loadlistbill($status){
    $sql = "select*from bill where 1";
    if ($status != '') {
        $sql.= " and status = '".$status."'";
    }
    $sql.= " order by id desc";

    return pdo_query($sql);
}
// function loadlistbill(){
//     $sql ="select*from bill order by id desc";
//     return pdo_query($sql);
// }
function loadtenlistbill(){
    $sql ="select*from bill order by total desc limit 0,5";
    return pdo_query($sql);
}
function updatebill($id,$ttdh){
    $sql = "UPDATE `bill` SET `status`='$ttdh' WHERE id=$id";
    pdo_execute($sql);
}
?>