<?php

    include "dao/pdo.php";
    include "dao/bill.php";
    include "dao/comment.php";
    // controller
    
    $show_bill = cart();
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
       
            case 'comment': 
               $show_comment = comment();
                include "comment/list.php";
                break;
                case 'delcomment':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                     deletecomment($_GET['id']);
                    }
                    $show_comment=comment();
                    include "comment/list.php";
            break;

        }
    }else {
        include "comment/list.php";
    }


    