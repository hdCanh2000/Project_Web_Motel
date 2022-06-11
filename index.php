<?php
require_once "controllers/ControllersPhong.php";
require_once "controllers/ControllerUser.php";
if (isset($_GET['task'])) {
    $task = $_GET['task'];
    $cs = new ControllersPhong();
    $us = new usert();

    switch ($task) {
        case "viewPhong":
            $cs->viewPhong();
            break;
        case "viewPhong2":
            $cs->viewPhong2();
            break;
        case "update_phong":
            $cs->show_update_phong();
            break;
        case"timkiem":
            $cs->timkiem();
            break;
        case "update_phong1":
            $cs->update_phong();
            break;
        case "show_dangnhap":
            $us->show_dangnhap();
            break;
        case "delete_phong":
            $cs->delete_phong();
            break;
        case "show_update_user":
            $us->show_update_user();
            break;
        case "show_thong_tin_user":
            $us->show_thong_tin_user();
            break;
        case "dangxuat":
            $us->dangxuat();
            break;
        case "update_usert":
            $us->updateuser();
            break;
        case "admin":
            $cs->admin();
            break;
        case "delete_user":
            $us->delete_user();
            break;
        case "dangnhap":
            $us->dangnhap();
            break;
        case "viewChitietPhong":
            $cs->view_thongtinphong();
            break;
        case "show_form":
            $cs->show_form_dangtin();
            break;
        case "them1":
            $cs->dangtin();
            break;
        case "dangky":
            $us->show_form_dangky();
             break;
         case "dangky1":
             $us->dangky();
             break;
        default:
        $cs->viewPhong2();
        break;

        
    }
}else{
    $cs = new ControllersPhong();
    $cs->viewPhong2();
}



?>
