<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="layout/img/bg/breadcrumb_bg03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Cart Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- cart-area -->
            <div class="cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="product-stt">STT</th>
                                                <th class="product-thumbnail">Ảnh</th>
                                                <th class="product-name">Tên sản phẩm</th>
                                                <th class="product-price">Đơn giá</th>
                                                <th class="product-quantity">Số lưọng</th>
                                                <th class="product-size">Size</th>
                                                <th class="product-color">Màu sắc</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $stt=1;$total=0;?>
                                            <?php foreach($_SESSION['addcart'] as $cart):?>
                                            <tr>
                                                <td class="product-stt"><?=$stt?></td>
                                                <td class="product-thumbnail"><a href="shop-details.html"><img src="layout/img/product/<?=$cart[3]?>" alt=""></a></td>
                                                <td class="product-name">
                                                    <h4><a href="shop-details.html"><?=$cart[1]?></a></h4>
                                                </td>
                                                <td class="product-price"><?=$cart[2]?>.000 VNĐ</td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num" value="<?=$cart[6]?>" readonly="">
                                                            <div class="qtybutton-box">
                                                                <span class="plus"><img src="layout/img/icon/plus.png" alt=""></span>
                                                                <span class="minus dis"><img src="layout/img/icon/minus.png" alt=""></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-size"><span><?=$cart[4]?></span></td>
                                                <td class="product-color"><span><?=$cart[5]?></span></td>
                                                <td class="product-subtotal"><span><?=$cart[7]?>.000 VNĐ</span></td>
                                                <td class="product-delete"><a href="index.php?act=delcart&id=<?=$stt?>"><i class="flaticon-trash"></i></a></td>
                                            </tr>
                                            <?php $stt+=1;$total+=$cart[7]?>
                                            <?php endforeach?>
                                            <!-- <tr>
                                                <td class="product-thumbnail"><a href="shop-details.html"><img src="layout/img/product/cart_img02.jpg" alt=""></a></td>
                                                <td class="product-name">
                                                    <h4><a href="shop-details.html">Travelling Bags</a></h4>
                                                </td>
                                                <td class="product-price">$ 37.00</td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num" value="1" readonly="">
                                                            <div class="qtybutton-box">
                                                                <span class="plus"><img src="layout/img/icon/plus.png" alt=""></span>
                                                                <span class="minus dis"><img src="layout/img/icon/minus.png" alt=""></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span>$ 74.00</span></td>
                                                <td class="product-delete"><a href="#"><i class="flaticon-trash"></i></a></td>
                                            </tr> -->
                                            <tr>
                                                <td style="font-weight: bolder;font-size:20px;" colspan="7">Tổng đơn hàng</td>
                                                <td style="font-weight: bolder;font-size:20px;"><?= $total?>.000 VNĐ</td>
                                            </tr>
                                        </tbody>
                                        
                                        
                                    </table>
                                </div>
                                <div class="shop-cart-bottom mt-20">
                                    
                                    <div class="continue-shopping">
                                        <a href="shop.html" class="btn">Mua thêm</a>
                                    </div>

                                    <div class="delallcart">
                                        <a href="index.php?act=delcart"><button class="btn">Xóa tất cả</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-total pt-95">
                                <h3 class="title">CART TOTALS</h3>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>
                                            <li class="sub-total"><span>SUBTOTAL</span> $ 136.00</li>
                                            <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                                    </div>
                                                    <a href="#" class="calculate">Calculate shipping</a>
                                                </div>
                                            </li>
                                            <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">$ 151.00</span></li>
                                        </ul>
                                        <a href="checkout.html" class="btn">PROCEED TO CHECKOUT</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area-end -->

        </main>