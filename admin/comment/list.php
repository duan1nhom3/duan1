

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
                <h4>Tổng sản phẩm</h4>
                <p><b>1850 sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
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
                                    <?php foreach ($category as $cate) : ?>
                                        <?php if ($pd['id_cate'] === $cate['id']) : ?>
                                            <?= $cate['cate_name']  ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                            </td>
                            <td class="text-center"><?=$pd['description']?></td>
                            <td class="text-center">
                              
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không')" href="index.php?act=delete_product&id=<?=$pd['id']?>"><button  class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                        
                                <a href="index.php?act=edit_product&id=<?=$pd['id']?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                                        
                            </td>
                        </tr>
                        
                    <?php endforeach ?>
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?act=addproduct" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>
                            
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
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
  



    <div>
        <table border="1">
            <thead>
            <tr>
                <th>id</th>
                <th>content</th>
                <th>id_user</th>
                <th>id_product</th>
                <th>date</th>
                <th>action</th>
            </tr>

            </thead>
        <tbody>
            <?php foreach($show_comment as $sc):?>
                <tr>
                    <td><?php echo $sc['id'] ?></td>
                    <td><?php echo $sc['content'] ?></td>
                    <td><?php echo $sc['id_user'] ?></td>
                    <td><?php echo $sc['id_product'] ?></td>
                    <td><?php echo $sc['date'] ?></td>
                    <td><a href="index.php?act=delcomment&id=<?=$sc['id']?>"><button>Delete</button></a> </td>
                </tr>
                <?php endforeach?>
        </tbody>
    </table>
    </div>


