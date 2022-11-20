<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<style>
    .cart{
        width: 70%;
        margin: 50px auto;
    }
</style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="tieude text-center p-5">
        <h2>Giỏ hàng</h2>
    </div>
    <div class="cart">
        <table class="table table-striped">
            <thead>
                <td>STT</td>
                <td>Product Name</td>
                <td>IMG</td>
                <td>Price</td>
                <td>Color</td>
                <td>Size</td>
                <td>DELETE</td>
            </thead>
            <?php
                $stt = 1; 
                foreach($_SESSION['mycart'] as $cart){
                    echo '<tr>
                        <td>'.$stt.'</td>
                        <td>'.$cart[1].'</td>
                        <td><img src="layout/img/product/'.$cart[3].'" alt="" width="50px"></td>
                        <td>'.$cart[2].'.00</td>
                        <td>'.$cart[5].'</td>
                        <td>'.$cart[4].'</td>
                        <td><a href="indexdemo.php?act=delcart&id='.$stt.'"><button type="submit" name="delete" class="btn btn-danger">DELETE</button></a></td>
                    </tr>';  
                    $stt+=1; 
                } 
            ?>
    
        </table>
        <a class="btn btn-success" href="indexdemo.php?act=product">Thêm sản phẩm</a>
        <a class="btn btn-success" href="indexdemo.php?act=thanhtoan">Thanh toán</a>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>