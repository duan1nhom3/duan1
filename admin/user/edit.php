<?php
if (is_array($tk)) {
    extract($tk);
}
?>


<!--  -->
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=ds_user">Danh sách người dùng</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Cập nhật người dùng</h3>
        <div class="text-center text-success bg-success" style="font-size: 40px;padding:20px;">
          <?= isset($thongbao) ? $thongbao : '' ?>
        </div>
        <div class="tile-body">
          <div class="row element-button">
          </div>
          <form class="row" action="index.php?act=update_user" method="POST" enctype="multipart/form-data">

            <div class="form-group col-md-3">
              <label class="control-label">Họ tên</label>
              <input name="fullname" class="form-control" type="text" value="<?= $fullname ?>">
              <span style="color:red">
                <?= isset($error['fullname']) ? $error['fullname'] : '' ?>
              </span>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input name="email" class="form-control" type="email" value="<?= $email ?>">
              <span style="color:red">
                <?= isset($error['email']) ? $error['email'] : '' ?>
              </span>
            </div>

            <div class="form-group col-md-3">
              <label class="control-label">Mật khẩu</label>
              <input name="password" class="form-control" type="text" value="<?= $password ?>">
              <span style="color:red">
                <?= isset($error['pass']) ? $error['pass'] : '' ?>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Ảnh đại diện</label>
              <div id="myfileupload">
                  <img src="../layout/img/product/<?=$img?>" alt="" width="100px">
                  <input type="hidden" name="hinh" value="<?=$img?>">
                <input type="file" name="img">
                <span style="color:red">
                  <?= isset($error['img']) ? $error['img'] : '' ?>
                </span>
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Địa chỉ</label>
              <input name="address" class="form-control" type="text" value="<?= $address ?>">
              <span style="color:red">
                <?= isset($error['address']) ? $error['address'] : '' ?>
              </span>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số điện thoại</label>
              <input name="phone_number" class="form-control" type="text" value="<?= $phone_number ?>">
              <span style="color:red">
                <?= isset($error['phone']) ? $error['phone'] : '' ?>
              </span>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Vai trò</label>
              <select name="role" class="form-control" id="exampleSelect1">
                <option value="0">-- Vai trò --</option>

                <?php foreach ($role as $role):?>
                 
                  <option value="<?=$role['id']?>" <?= ($role_id == $role['id']) ? 'selected' : '' ?>> <?=$role['role']?> </option>';
                <?php endforeach ?>
              </select>
              <span style="color:red">
                <?= isset($error['role']) ? $error['role'] : '' ?>
              </span>
            </div>

        </div>
        <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" name="submit" class="btn btn-save" value="Cập nhật">
          <button type="reset" class="btn btn-cancel">Nhập lại</button>
          <a class="btn btn-cancel" href="index.php?act=list">Hủy bỏ</a> <br> <br>

          </form>
      </div>
</main>