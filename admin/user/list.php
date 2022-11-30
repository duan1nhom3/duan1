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
       <!-- col-6 -->
       <!-- <div class="col-md-6">
        <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
          <!-- <div class="info">
            <h4>Tổng khách hàng</h4>
            <p><b>56 khách hàng</b></p>
            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
          </div> -->
        </div>
      </div> -->
       <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b>1850 sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
           <!-- col-6 -->
          <!-- <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng đơn hàng</h4>
                <p><b>247 đơn hàng</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div> -->
           <!-- col-6 -->
          <!-- <div class="col-md-6">
            <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
              <div class="info">
                <h4>Sắp hết hàng</h4>
                <p><b>4 sản phẩm</b></p>
                <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
              </div>
            </div>
          </div> -->
           <!-- col-12 -->
           <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tình trạng đơn hàng</h3>
              <div>
                <table class="table table-bordered">
                  <thead>
                  <tr>
                        <td>STT</td>
                        <td>User Name</td>
                        <td>Email</td>
                        <td>IMG</td>
                        <td>Password</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Role</td>
                        <td>Action</td>
                        
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                        foreach ($list_user as $tk) {
                            extract($tk);
                            $suatk="index.php?act=sua_user&id=".$id;
                            $xoatk="index.php?act=xoa_user&id=".$id;
                            
                            echo'
                            <tr>
                            <td>'.$id.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$email.'</td>
                            <td><img src="../layout/img/product/'.$img.'" width="100px"></td>
                            <td>'.$password.'</td>
                            <td>'.$address.'</td>
                            <td>'.$phone_number.'</td>
                            <td>'.$role_id.'</td>
                            <td>
                            <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                            <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                            </td>
                           </tr>';
                        }
                        ?>        
                  </tbody>
                </table>
                <!-- <div class="row mb20">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Đã Chọn">
                       <!-- <a href="index.php?act=add_tk"><input type="button" value="Nhập Thêm"> </a> -->
                    </div>
              </div> 
              <!-- / div trống-->
            </div>
           </div>

    </div>


    <div class="text-center" style="font-size: 13px">
      <p><b>Copyright
          <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script> Phần mềm quản lý bán hàng | Dev By Trường
        </b></p>
    </div>
  </main>
  