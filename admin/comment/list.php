

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
                <h4>Tổng bình luận</h4>
                <?php $countcomment = countcomment();?>
                <p><b><?=$countcomment["countcomment"]?> bình luận</b></p>
                <p class="info-tong">Tổng số bình luận được quản lý.</p>
              </div>
            </div>
          </div>
           
           <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách bình luận</h3>
              <div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width:100px" class="text-center">ID bình luận</th>
                      <th class="text-center">Người bình luận</th>
                      <th class="text-center">Sản phẩm</th>
                      <th class="text-center">Nội dung bình luận</th>
                      <th class="text-center">Ngày bình luận</th>
                      <th class="text-center">Thao tác</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($show_comment as $sc): ?>
                        <tr>
                            <td class="text-center"><?=$sc['id']?></td>
                            <td class="text-center">
                                    <?php foreach ($user as $us) : ?>
                                        <?php if ($sc['id_user'] === $us['id']) : ?>
                                            <?= $us['fullname']  ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                            </td>
                            <td class="text-center">
                                    <?php foreach ($pd as $pr) : ?>
                                        <?php if ($sc['id_product'] === $pr['id']) : ?>
                                            <?= $pr['product_name']  ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                            </td>
                            <td class="text-center"><?=$sc['content']?></td>
                            <td class="text-center"><?=$sc['date']?></td>
                            <td class="text-center">
                              
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không')" href="index.php?act=delcomment&id=<?=$sc['id']?>"><button  class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                        
                                
                                                        
                            </td>
                        </tr>
                        
                    <?php endforeach ?>
                    
                    <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                      <?= isset($thongbao) ? $thongbao :''?>
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
  


