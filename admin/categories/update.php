<?php
    if(is_array($danhmuc)){
        extract($danhmuc);
    }
?>

<!--  -->
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?act=categories">Danh sách danh mục</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Cập nhật danh mục</h3>
                <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                    <?= isset($thongbao) ? $thongbao : '' ?>
                </div>
                <div class="tile-body">
                    <div class="row element-button">
                    </div>
                    <form class="row" action="index.php?act=updatecategories" method="POST">
                        <div class="form-group col-md-3">
                            <label class="control-label">Mã danh mục</label>
                            <input  class="form-control" type="text" disabled value="<?=$id?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Tên danh mục</label>
                            <input name="cate_name" class="form-control" type="text" value="<?= $cate_name ?>">
                            <span style="color:red">
                                <?= isset($error['pdname']) ? $error['pdname'] : '' ?>
                            </span>
                        </div>
                </div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="submit" class="btn btn-save" value="Cập nhật">
                <a class="btn btn-cancel" href="index.php?act=categories">Hủy bỏ</a> <br> <br>

                </form>
            </div>
</main>