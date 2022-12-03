<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>Tên Khách Hàng</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tên sản phẩm</th>
                    <th>Method</th>
                    <th>price</th>
                    <th>img</th>
                    <th>size</th>
                    <th>color</th>
                    <th>amount</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($show_bill as $sb) :?>
                <tr align="center">
                    <td><?php echo $sb['fullname']?></td>
                    <td><?php echo $sb['address']?></td>
                    <td><?php echo $sb['email']?></td>
                    <td><?php echo $sb['phone_number']?></td>
                    <td><?php echo $sb['product_name']?></td>
                    <td><?php echo $sb['method']?></td>
                    <td><?php echo $sb['price']?></td>
                    <td><img width="50%" src="layout/img/product/<?php echo $sb['img']?>" alt=""></td>
                    <td><?php echo $sb['size']?></td>
                    <td><?php echo $sb['color']?></td>
                    <td><?php echo $sb['amount']?></td>
                    <td><?php echo $sb['total']?></td>
                </tr>
                
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>