<div class="row">  
                <div class="row formtitle">
                    <h1>THÊM MỚI USER</h1>
                </div>
                <div class="row formcontent ">
                    <form action="index.php?act=add_user" method="post"  enctype="multipart/form-data">
                        <div class=""> 
                            Username <br>
                            <input type="text" name="fullname"  id="">
                        </div>
                        <div class=""> 
                            Email <br>
                            <input type="text" name="email"  id="">
                        </div>
                        <div class=""> 
                            IMG <br>
                          <input type="file" name="img">
                        </div>
                        <div class=""> 
                            Password <br>
                            <input type="text" name="password"  id="">
                        </div>
                        <div class=""> 
                            Address <br>
                            <input type="text" name="address"  id="">
                        </div>
                        <div class=""> 
                            Phone Number <br>
                            <input type="text" name="phone_number"  id="">
                        </div>
                        <div class="row mb20">
                            <input type="submit" name="themmoi" value="Thêm Mới">
                            <input type="reset" value="Nhập Lại">
                           <a href="index.php?act=list_user"><input type="button" value="Danh Sách"> </a>
                        </div>
                        <?php 
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }          
                        ?>
                    </form>
                </div>   
        </div>
    </div>