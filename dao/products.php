<?php

function loadallpd(){
    $sql = "select*from hang_hoa";
    $listpd = pdo_query($sql);
    return $listpd;
}

?>
