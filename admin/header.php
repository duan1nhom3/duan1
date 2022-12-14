<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="view/doc/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <style>
    ul.ptrang{
      width: 20px;
      display: flex;
      flex-direction: row;
      float: left;
    }
    ul.ptrang li{
      padding: 5px 10px;
      display: inline-block;
      border:1px solid black;
      border-radius: 50%;
      margin-right: 5px;
    }
    ul.ptrang li a{
      text-align: center;
      text-decoration: none;
    }
  </style>
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../layout/img/logo/logoxoaphonghoanchinh.png" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Nhom 3</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="index.php?act=home"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">ADMIN MELIA SHOP</span></a></li>
      <li><a class="app-menu__item active" href="index.php?act=home"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="index.php?act=categories"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý Danh mục</span></a></li>
      
      <li><a class="app-menu__item" href="index.php?act=products"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="index.php?act=ds_user"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="index.php?act=bill"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="index.php?act=comment"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý bình luận
          </span></a></li>
      <li><a class="app-menu__item" href="index.php?act=thongke"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label"> Thống kê</span></a>
      </li>
      
    </ul>
  </aside>


  