<?php
    class viewUsert{
        public function show_form_dangky(){
            include 'DangKi.php';
        }

        public function show_dangnhap(){
            include 'DangNhap.php';
        } 

        public function show_update_user($data){
            include 'SuaTTUser.php';
        }
        public function show_thong_tin_user($data,$data1){
            include 'ThongTinUser.php';
        }
    }

?>