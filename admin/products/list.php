
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
                <?php $countpd = countsp();?>
                <p><b><?=$countpd["countpd"]?> sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
           
           <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách sản phẩm</h3>
                    
              <div>
                
                
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width:100px" class="text-center">ID sản phẩm</th>
                      <th class="text-center">Tên sản phẩm</th>
                      <th class="text-center">Gía tiền</th>
                      <th class="text-center">Ảnh</th>
                      <th class="text-center">Loại sản phẩm</th>
                      <th style="width: 300px;" class="text-center">Mô tả</th>
                      <th class="text-center">Thao tác</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($products_cate as $pd): ?>
                        <tr>
                            <td class="text-center"><?=$pd['id']?></td>
                            <td class="text-center"><?=$pd['product_name']?></td>
                            <td class="text-center"><?=currency_format($pd['price'])?></td>
                            <td class="text-center"><img src="../layout/img/product/<?=$pd['img']?>" alt="" width="70px"></td>
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
                            
                      
                    </div>
                    <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                      <?= isset($thongbao) ? $thongbao :''?>
                    </div>
                    <div style="margin: 20px 0;display:flex;width: 500px;justify-content: space-between;">
                        <form  action="index.php?act=products" method="post">
                          <div>
                            <select style="padding: 10px 10px" name="id_cate">
                                <option value="0" selected>Tất cả</option>
                                <?php foreach ($category as $cate) : ?>
                                    <option value="<?= $cate['id'] ?>" > <?= $cate['cate_name'] ?> </option>
                                <?php endforeach ?>
                            </select>
                            
                          </div>
                            <div>
                              <input class="form-control" type="text" name="keyword" placeholder="Tìm kiếm sản phẩm...">
                            </div> 
                          <div>
                            <button style="padding: 10px 10px" class="btn btn-search" type="submit" name="search">Tìm kiếm</i></button>
                          </div>
                        </form>
                    </div>
                  </tbody>
                </table>
              </div>
                  <div style="padding: 50px 20px 20px 20px;">
                      <p>Trang:</p>
                      <ul class="ptrang">
                        <?php for ($i=1; $i <= $pagenumber; $i++) { ?>
                          <li <?php if ($i == $page) {echo 'style="background-color:red"';}?> >
                            <a href="index.php?act=products&page=<?=$i?>"> <?=$i?> </a>
                          </li>
                        <?php }?>
                      </ul>  
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
  