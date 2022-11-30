<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
                <div class="row formtitle">
                    <h1>CẬP NHẬT TÀI KHOẢN</h1>
                </div>
                <div class="row formcontent ">
                    <form action="index.php?act=update_user" method="post" enctype="multipart/form-data">
                        <div class="row mb10">
                            Email <br>
                            <input type="text" name="email"  value="<?php if (isset($email)&&($email!="")) echo $email; ?>">
                        </div>
                        <div class="row mb10"> 
                            Username <br>
                            <input type="text" name="fullname" value="<?php if (isset($fullname)&&($fullname!="")) echo $fullname; ?>">
                        </div>
                        <div class="row mb10"> 
                            Password <br>
                            <input type="text" name="password" value="<?php if (isset($password)&&($password!="")) echo $password; ?>">
                        </div>
                        <div class="row mb10"> 
                            IMG <br>
                            <img src="../layout/img/product/<?php echo $img ?>" width="100px">
                            <br>
                            <input type="file" name="img">
                        </div>
                        <div class="row mb10"> 
                            Address <br>
                            <input type="text" name="address" value="<?php if (isset($address)&&($address!="")) echo $address; ?>">
                        </div>
                        
                        <div class="row mb10"> 
                            Phone <br>
                            <input type="text" name="phone_number" value="<?php if (isset($phone_number)&&($phone_number!="")) echo $phone_number; ?>">
                        </div>

                        <div class="row mb20">
                            <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo $id ; ?>">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <input type="reset" value="Nhập Lại">
                           <a href="index.php?act=ds_user"><input type="button" value="Danh Sách"></a>
                        </div>                  
                    </form>
                </div>
        </div>
    </div>