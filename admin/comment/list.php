
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>id</th>
                <th>content</th>
                <th>id_user</th>
                <th>id_product</th>
                <th>date</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($show_comment as $sc):?>
                    <tr>
                        <td><?php echo $sc['id'] ?></td>
                        <td><?php echo $sc['content'] ?></td>
                        <td><?php echo $sc['id_user'] ?></td>
                        <td><?php echo $sc['id_product'] ?></td>
                        <td><?php echo $sc['date'] ?></td>
                        <td><a href="index.php?act=delcomment&id=<?=$sc['id']?>"><button>Delete</button></a> </td>
                    </tr>
                <?php endforeach?>
            </tbody>
    </table>
    </div>