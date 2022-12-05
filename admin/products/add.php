<!--  -->
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=products">Danh sách sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm sản phẩm mới</h3>
                    <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
                      <?= isset($thongbao) ? $thongbao :''?>
                    </div>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="index.php?act=addproduct" method="POST" enctype="multipart/form-data">
              
             <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input name="pdname" class="form-control" type="text" value="<?= isset($pdname) ? $pdname : '' ?>">
                <span style="color:red">
                    <?=isset($error['pdname']) ? $error['pdname'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá sản phẩm</label>
                <input name="price" class="form-control" type="number" value="<?= isset($price) ? $price : '' ?>">
                <span style="color:red">
                    <?=isset($error['price']) ? $error['price'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giảm giá (%)</label>
                <input name="discount" class="form-control" type="number" value="<?= isset($discount) ? $discount : '' ?>">
                <span style="color:red">
                    <?=isset($error['discount']) ? $error['discount'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select name="cate" class="form-control" id="exampleSelect1">
                <option value="0" selected>-- Chọn danh mục --</option>
                  <?php
                    foreach($category as $cate)
                    {
                      extract($cate);
                      echo '<option value="'.$id.'">'.$cate_name.'</option>';
                    }
                  ?>
                </select>
                <span style="color:red">
                    <?=isset($error['cate']) ? $error['cate'] : '' ?>
                </span>
               
              </div>

              <div class="form-group col-md-3" >
                <label class="control-label">Kích cỡ</label> <br>
                <?php foreach($size as $size):?>
                    <input style="margin: 0 2px 0 7px" name="size[]" type="checkbox" value="<?=$size['id']?>"> <b style="font-size: 20px;"><?=$size['size']?></b>
                <?php endforeach?>
                
              </div>

              <div class="form-group ms-3" >
                <label class="control-label">Màu sắc</label> <br>
                <?php foreach($color as $color):?>
                    <input style="margin: 0 2px 0 7px" name="color[]" type="checkbox" value="<?=$color['id']?>"> <b style="font-size: 20px;"><?=$color['color_name']?></b>
                <?php endforeach?>
                
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" name="img" >
                  <span style="color:red">
                    <?=isset($error['img']) ? $error['img'] : '' ?>
                    </span>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh mô tả</label>
                <div id="myfileupload">
                  <input type="file" multiple="multiple" name="img_des[]">
                  <span style="color:red">
                    <?=isset($error['imgdes']) ? $error['imgdes'] : '' ?>
                    </span>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả </label>
                <textarea class="form-control" name="description" id="mota"></textarea>
                
                <script>CKEDITOR.replace('mota');</script>
              </div>
              

          </div>
          <input type="submit" name="submit" class="btn btn-save" value="Thêm mới">
          <button type="reset" class="btn btn-cancel">Nhập lại</button>
          <a class="btn btn-cancel" href="index.php?act=listbds">Hủy bỏ</a> <br> <br>
                    
          </form>
        </div>
  </main>

