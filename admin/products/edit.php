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
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="index.php?act=update_product" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="idpd" value="<?= $product['id']?>">
             <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input name="pdname" class="form-control" type="text" value="<?= $product['product_name'] ?>">
                <span style="color:red">
                    <?=isset($error['pdname']) ? $error['pdname'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá sản phẩm</label>
                <input name="price" class="form-control" type="number" value="<?= $product['price'] ?>">
                <span style="color:red">
                    <?=isset($error['price']) ? $error['price'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giảm giá (%)</label>
                <input name="discount" class="form-control" type="number" value="<?= $product['discount'] ?>">
                <span style="color:red">
                    <?=isset($error['discount']) ? $error['discount'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select name="cate" class="form-control" id="exampleSelect1">
                <option value="0" selected>-- Chọn danh mục --</option>
                  <?php foreach($category as $cate):?>
                    <option value="<?=$cate['id']?>" <?= ($product['id_cate'] == $cate['id']) ? 'selected' : '' ?> ><?=$cate['cate_name']?></option>';
                  <?php endforeach?>
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
                    <img src="../layout/img/product/<?=$product['img']?>" alt="" width="100px">
                    <input type="hidden" name="imgold" value="<?=$product['img']?>">
                  <input type="file" name="img" >
                  <span style="color:red">
                    <?=isset($error['img']) ? $error['img'] : '' ?>
                    </span>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh mô tả</label>
                <div id="myfileupload">
                    <?php foreach($img_des as $img):?>
                        <img src="../layout/img/product/<?=$img['img_name']?>" alt="" width="100px">
                        <input type="hidden" name="img_desold[]">
                    <?php endforeach?>
                    
                  <input type="file" multiple="multiple" name="img_des[]">
                  <span style="color:red">
                    <?=isset($error['imgdes']) ? $error['imgdes'] : '' ?>
                    </span>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả </label>
                <textarea class="form-control" name="description" id="mota"><?=$product['description']?></textarea>
                
                <script>CKEDITOR.replace('mota');</script>
              </div>
              

          </div>
          <input type="submit" name="submit" class="btn btn-save" value="Cập nhật">
          <button type="reset" class="btn btn-cancel">Nhập lại</button>
          <a class="btn btn-cancel" href="index.php?act=listbds">Hủy bỏ</a> <br> <br>
              
          
          </form>
        </div>
  </main>


 


  <script src="../view/doc/js/jquery-3.2.1.min.js"></script>
  <script src="../view/doc/js/popper.min.js"></script>
  <script src="../view/doc/js/bootstrap.min.js"></script>
  <script src="../view/doc/js/main.js"></script>
  <script src="../view/doc/js/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });

  </script>
