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
            <!-- col-6 -->
            <div class="col-md-6">
                <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                    <div class="info">
                        <h4>Tổng khách hàng</h4>
                        <?php $countuser = countuser();?>
                        <p><b><?=$countuser["countuser"]?> khách hàng</b></p>
                        <p class="info-tong">Tổng số khách hàng được quản lý.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Danh sách khách hàng</h3>
                    <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                      <?= isset($thongbao) ? $thongbao :''?>
                    </div>
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">ID</td>
                                    <td class="text-center">Họ tên</td>
                                    <td class="text-center">Email</td>
                                    <td class="text-center">Ảnh</td>
                                    <td class="text-center">Mật khẩu</td>
                                    <td class="text-center">Địa chỉ</td>
                                    <td class="text-center">Số điện thoại</td>
                                    <td class="text-center">Vai trò</td>
                                    <td class="text-center">Thao tác</td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_user as $tk) : ?>
                                    <?php extract($tk);
                                    $suatk = "index.php?act=sua_user&id=" . $id;
                                    $xoatk = "index.php?act=xoa_user&id=" . $id;
                                    ?>


                                    <tr>
                                        <td class="text-center">KH-<?= $id ?></td>
                                        <td class="text-center"><?= $fullname ?></td>
                                        <td class="text-center"><?= $email ?></td>
                                        <td class="text-center"><img src="../layout/img/product/<?= $img ?>" width="100px"></td>
                                        <td class="text-center"><?= $password ?></td>
                                        <td class="text-center"><?= $address ?></td>
                                        <td class="text-center"><?= $phone_number ?></td>
                                        <td class="text-center">
                                            <?php foreach ($role as $rol) : ?>
                                                <?php if ($tk['role_id'] === $rol['id']) : ?>
                                                    <?= $rol['role']  ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td class="text-center">
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa người này không')" href="index.php?act=delete_user&id=<?= $id ?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>

                                            <a href="index.php?act=edit_user&id=<?= $id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="index.php?act=add_user" title="Thêm"><i class="fas fa-plus"></i>
                                    Thêm người dùng mới</a>
                            </div>
                                
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- / div trống-->
            </div>
        </div>

        


        <div class="text-center" style="font-size: 13px">
            <p><b>Copyright
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script> Phần mềm quản lý bán hàng | Dev By Group 3
                </b></p>
        </div>
    </main>