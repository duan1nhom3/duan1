<?php
    if(is_array($danhmuc)){
        extract($danhmuc);
    }
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedanhmuc" method="post">
        <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="ten_loai" value="<?php if(isset($cate_name)&&($cate_name!="")) echo $cate_name;?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=categories"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
            ?>
        </form>
    </div>
</div>