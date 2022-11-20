<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: 0 20px;
        }
        .tieude{
            text-align: center;
        }
        .sanpham{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 30px;
        }
        .sp{
            width: 100%;
        }
        .pddetails a{
            text-decoration: none;
            font-size: 20px;
            color: black;
        }
        .pddetails{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tieude">
            <h2>Products</h2>
        </div>
        <div class="sanpham">
            <?php foreach($products as $pd) : ?>
                <div class="sp">
                    <div class="img">
                        <a href="indexdemo.php?act=chitietsp&id=<?=$pd['id']?>">
                            <img src="layout/img/product/<?=$pd['img']?>" alt="">
                        </a>
                    </div>
                    <div class="pddetails">
                        <div class="tensp">
                            <a href="indexdemo.php?act=chitietsp&id=<?=$pd['id']?>"><?=$pd['product_name']?></a>
                            <p>$<?=$pd['price']?>.00</p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>