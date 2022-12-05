<?php 

function loadallcate(){
    $sql = "select categories.id,categories.cate_name,count(product.id) as countpd from product inner join categories on categories.id = product.id_cate group by categories.id";
    $lishcate = pdo_query($sql);
    return $lishcate;
}

function categories_sellectall(){
    $sql = "select * from categories order by id DESC";
    return pdo_query($sql);
}
    //thêm mới loại
    function categories_insert($ten_loai){
        $sql = "INSERT INTO `categories`(`cate_name`) VALUES ('$ten_loai')";
        pdo_execute($sql);
    }
    function categories_delete(){
        $sql="delete from categories where id=".$_GET['id'];
        pdo_execute($sql);
    }
    function load_one_categories($id){
        $sql="select *from categories where id=".$id;
        return pdo_query_one($sql);
    }
    function categories_update($ten_loai,$id){
        $sql="update categories set cate_name='".$ten_loai."' where id=".$id;
        pdo_execute($sql);
    }

?>