
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
                        <h4>Tổng đơn hàng</h4>
                        <?php $countbill = countbill();?>
                        <p><b><?=$countbill["countbill"]?> đơn hàng</b></p>
                        <p class="info-tong">Tổng số đơn hàng được quản lý.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Danh sách đơn hàng</h3>
                    <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                      <?= isset($thongbao) ? $thongbao :''?>
                    </div>
                    <div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Mã Đơn hàng</th>
                                <th class="text-center">Người mua</th>
                                <th class="text-center">Phương thức thanh toán</th>
                                <th class="text-center">Tổng giá trị đơn hàng</th>
                                <th class="text-center">Ngày đặt hàng</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $total = 0; ?>
                            <?php foreach ($bill as $bill) : ?>
                                <tr>
                                    
                                    <td class="text-center">DH-<?= $bill['id'] ?></a></td>
                                    <td class="text-center">
                                        <?= $bill['fullname'] ?>
                                    </td>
                                    <td class="text-center"><?= $bill['method'] ?></td>
                                    <td class="text-center">
                                        <?= $bill['total'] ?>.000 VNĐ
                                    </td>
                                    <td class="text-center"><?= $bill['date'] ?></span></td>
                                    <td><?= $bill['status'] ?></td>
                                    <td class="text-center"><a href="index.php?act=edit_bill&id=<?=$bill['id']?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a></td>
                                </tr>
                            
                            <?php endforeach ?>


                        </tbody>
                        </table>
                        
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