<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            width: 20px;
            height: 20px;
            background-color: red;
        }
        .black{
            width: 20px;
            height: 20px;
            background-color: black;
        }
        .blue{
            width: 20px;
            height: 20px;
            background-color: blue;
        }
        .green{
            width: 20px;
            height: 20px;
            background-color: green;
        }
        .tieudesp{
            text-align: center;
            font-size: 40px;
        }
        .ctsp{
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: 50px 200px;
        }
        .ctsp img{
            width: 70%;
        }
        .size{
            padding-bottom: 15px;
        }
        .color{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        .mausac{
            width: 200px;
        }
        .chitiet p{
            font-size: 20px;
            font-weight: bold;
        }
        .them{
            margin-top: 50px;
            padding: 15px 40px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: black;
        }
        .themgiohang .them:hover{
            background-color: red;
            border: 1px solid red;
        }
        
    </style>
</head>
<body>
    <?php extract($pddetails) ?>
    <div class="tieudesp">
        
        <h2><?=$product_name?></h2>
    </div>
    <div class="ctsp">
        <div class="img">
            <img src="layout/img/product/<?=$img?>" alt="">
        </div>
        <div class="chitiet">
            <h2><?=$product_name?></h2>
            <p>PRICE:  $<?= $price?>.00</p>
            <form action="indexdemo.php?act=addtocart" method="POST">
                <div class="size">
                    <p>Product size</p>
                    <input type="radio" name="size" value="S" checked> S
                    <input type="radio" name="size" value="M"> M
                    <input type="radio" name="size" value="L"> L
                    <input type="radio" name="size" value="XL"> XL
                    <input type="radio" name="size" value="XXL"> XXL
                </div>
                <div class="mausac">
                    <p>Color</p> <br>
                    <div class="color">
                        <div class="chonmau">
                            <input type="radio" name="color" value="red">
                            <div class="red"></div>
                        </div>
                        <div class="chonmau">
                            <input type="radio" name="color" value="black" checked>
                            <div class="black"></div>
                        </div>
                        <div class="chonmau">
                            <input type="radio" name="color" value="blue">
                            <div class="blue"></div>
                        </div>
                        <div class="chonmau">
                            <input type="radio" name="color" value="green">
                            <div class="green"></div>
                        </div>
                    </div>
                </div>
                
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="pd_name" value="<?=$product_name?>">
                <input type="hidden" name="price" value="<?=$price?>">
                <input type="hidden" name="img" value="<?=$img?>">
                <div class="themgiohang">
                    <a  href="indexdemo.php?act=addtocart">
                        <input class="them" type="submit" name="them" value="Thêm vào giỏ hàng">
                    </a>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>