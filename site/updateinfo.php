<main>
    <?php if (isset($_SESSION['user'])) {
       $user =  $_SESSION['user'];
    }?>
    <div class="infouser">
        <div class="td text-center p-5">
            <h2>Cập nhật thông tin</h2>
        </div>
        <form action="index.php?act=updateinfo" method="post" enctype="multipart/form-data">


        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
        <?php 
            if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
        ?>


        <div class="form-floating">

        <input type="hidden" name="id" value="<?= $id?>">

        <label for="floatingInput">Họ tên</label>
        <input type="text" class="form-control" id="floatingInput" name="fullname" placeholder="Họ tên" value="<?= $fullname ?>">
        
        </div>

        <div class="mb-3">
        <label class="anhdaidiendk">Ảnh đại diện</label>
        <input type="hidden" name="hinh" value="<?=$img?>">
        <img class="m-5" src="layout/img/product/<?=$img?>" alt="" width="100px">
        <input class="form-control" type="file" name="img" id="formFileDisabled">
        </div>

        <div class="form-floating">
        <label for="floatingInput">Email address</label>
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?= $email ?>">
        
        </div>

        <div class="form-floating">
        <label for="floatingInput">Địa chỉ</label>
        <input type="text" class="form-control" id="floatingInput" name="address" placeholder="Address" value="<?= $address ?>">
        
        </div>
        <div class="form-floating">
        <label for="floatingInput">Số điện thoại</label>
        <input type="text" class="form-control" id="floatingInput" name="phone_number" placeholder="Phone" value="<?= $phone_number ?>">
        </div>
            <input type="hidden" name="password" value="<?=$password?>">
        
        <div class="capnhattt updateinfo">
            <button class="btn" type="submit" name="capnhat">Cập nhật</button>
        </div>
    </form>
        
    </div>


</main>