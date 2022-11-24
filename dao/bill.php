<?php
function insertbill($hoten,$diachi,$sdt,$email,$pttt,$total){
    $sql = "INSERT INTO `bill`(`fullname`,`address`, `phone_number`, `email`, `method`, `total`) VALUES ('$hoten','$diachi','$sdt','$email','$pttt','$total')";
    return pdo_execute_return_lastInsertId($sql);
}

function insertbill_details($id_bill,$pdname,$price,$img,$size,$color,$total){
    $sql = "INSERT INTO `bill_details`(`id_bill`, `product_name`, `price`, `img`, `size`, `color`, `total`) VALUES ('$id_bill','$pdname','$price','$img','$size','$color','$total')";
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

?>