<?php
function comment(){
    $sql="select * from comment";
    $comment= pdo_query($sql);
    return $comment;
}

function deletecomment($id){
    $sql="delete from comment where id=$id";
    pdo_execute($sql);
}
?>