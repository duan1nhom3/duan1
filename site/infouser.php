<main>
    <?php if (isset($_SESSION['user'])) {
       $user =  $_SESSION['user'];
    }?>
    <div class="infouser">
        <div class="td text-center p-5">
            <h2>Thông tin tài khoản</h2>
        </div>
        <div class="info">
            <div class="anhdaidien">
                <img src="layout/img/product/<?=$user['img']?>" alt="">
            </div>
            <div class="tt">
                <div>
                    <label>Họ tên :</label>
                    <p> <?=$user['fullname']?></p>
                </div>
                <div>
                    <label>Email :</label>
                    <p> <?=$user['email']?></p>
                </div>
                <div>
                    <label>Số điện thoại :</label>
                    <p> <?=$user['phone_number']?></p>
                </div>
                <div>
                    <label>Địa chỉ :</label>
                    <p> <?=$user['address']?></p>
                </div>
                <div class="capnhattt">
                    <a href="index.php?act=updateinfo"><button class="btn">Cập nhật thông tin tài khoản</button></a>
                </div>
            </div>
            
        </div>
        
    </div>


</main>