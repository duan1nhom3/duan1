<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--Left-->
        <div class="col-md-12 col-lg-6">
            <div class="row">

            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                <div class="info">
                    <h4>Tổng danh mục</h4>
                    <?php $countcate = countcate(); ?>
                    <p><b><?= $countcate["countcate"] ?> danh mục</b></p>
                    <p class="info-tong">Tổng số danh mục được quản lý.</p>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách danh mục</h3>
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100px" class="text-center">ID danh mục</th>
                                <th class="text-center">Tên danh mục</th>
                                
                                <th class="text-center">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listdanhmuc as $danhmuc) : ?>
                                <tr>

                                    <td class="text-center"><?= $danhmuc['id'] ?></td>
                                    <td class="text-center"><?= $danhmuc['cate_name'] ?></td>
                    
                                    <td class="text-center">
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không')" href="index.php?act=deletecategories&id=<?= $danhmuc['id'] ?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>

                                        <a href="index.php?act=editcategories&id=<?= $danhmuc['id'] ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                            <div class="row element-button">
                                <div class="col-sm-2">
                                    <a class="btn btn-add btn-sm" href="index.php?act=addcategories" title="Thêm"><i class="fas fa-plus"></i>
                                        Tạo mới danh mục</a>
                                </div>
                            </div>
                            <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                                <?= isset($thongbao) ? $thongbao : '' ?>
                            </div>
                        </tbody>
                    </table>
                </div>
                <!-- / div trống-->
            </div>
        </div>

    </div>
    </div>

    </div>


    <div class="text-center" style="font-size: 13px">
        <p><b>Copyright
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> ADMIN lý bán hàng | Dev By Group 3
            </b></p>
    </div>
</main>