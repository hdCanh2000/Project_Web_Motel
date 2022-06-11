<?php
    class viewPhong{
        public function index($data){
            include 'Home.php';
        }
        public function show_form_dangtin($data){
            include 'DangTin.php';
        }
        public function view_thongtinphong($data){
         
            include 'ThongTinPhong.php';
        }
        public function admin($data,$data1){
         
            include 'Admin.php';
        }
        public function show_update_phong($data){
            include "SuaTTPhong.php";
        }
        public function index2($data){
            include 'home2.php';
        }
        public function timkiem($data){
            include 'TimKiem.php';
        }
    }
?>