<?php
session_start();
// Require file common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Khai báo hàm hỗ trợ

// Require toàn bộ file controller
require_once './controllers/HomeController.php';
require_once './controllers/DanhMucController.php';

// Require toàn bộ file model

require_once './model/AdminDanhMuc.php';

$act = $_GET['act'] ?? '/';
match($act){
    '/' => (new HomeController)->home(),

    'danh-muc' => (new DanhMucController)->listDanhMuc(),
    'form-them-danh-muc' => (new DanhMucController)->formAddDanhMuc(),
    'them-danh-muc' => (new DanhMucController)->addDanhMuc(),
    'form-sua-danh-muc' =>(new DanhMucController)->formEditDanhMuc(),
    'sua-danh-muc' => (new DanhMucController)->editDanhMuc(),
    'xoa-danh-muc' => (new DanhMucController)->deleteDanhMuc()



}

?>