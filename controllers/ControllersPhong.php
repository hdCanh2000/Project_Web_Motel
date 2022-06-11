<?php

require_once "models/ModelUser.php";
require_once "models/ModelPhong.php";
require_once "views/viewPhong.php";

class ControllersPhong
{
    var $model;
    var $view;
    var $user;
    public function __construct()
    {
        $this->model =  new ModelPhong();
        $this->view = new viewPhong();
        $this->user = new modelUsert();
    }

    public function viewPhong()
    {
        if(isset($_SESSION["id_user"])){
        //1. lay danh sach Phong
        $data = $this->model->getPhong();

        //2. hien thi danh sach Phong
        $this->view->index($data);
        }else{
            header("Location: ?task=show_dangnhap");
        }
    }
    public function show_update_phong(){
        $id = $_REQUEST['id_phong'];
     
        $data = $this->model->con->query("SELECT * FROM tt_phong where id_phong = $id")->fetch_assoc();
        $this->view->show_update_phong($data);
    }

    public function timkiem(){
        $quan=$_REQUEST['QUAN_HUYEN'];
        $data = $this->model->timkiem($quan);
        $this->view->timkiem($data);
    }
    

    public function viewPhong2()
    {
        
        //1. lay danh sach Phong
        $data = $this->model->getPhong();

        //2. hien thi danh sach Phong
        $this->view->index2($data);
       
            header("Location: ?task=show_dangnhap");
        
    }
    public function update_phong(){
        
        $id = $_REQUEST['id_phong'];
        $this->model->update_phong($id);
    }
    public function delete_phong(){
        $id = $_REQUEST['id_phong'];
        $this->model->delete($id);
        header("Location: ?task=admin");
    }
    
    public function admin(){
        $data = $this->user->get_usert_admin();
        $data1 = $this->model->getPhong();
        $this->view->admin($data,$data1);
    }

    public function get_usert_admin(){
        $data = $this->user->get_usert_admin();
        $this->view->admin($data);
    }
   

    public function view_thongtinphong(){

        $id = $_REQUEST['id_phong'];
         //1. lay danh sach Phong
         $data = $this->model->con->query("SELECT * FROM tt_phong WHERE id_phong=$id")->fetch_assoc();

         //2. hien thi danh sach Phong
         $this->view->view_thongtinphong($data);
    }

    public function show_form_dangtin()
    {   
        $data = $this->user->getusert();
        $this->view->show_form_dangtin($data);
    }

    public function dangtin()
    {
        $HOTEN_CHUPHONG = $_POST['HOTEN_CHUPHONG'];
        $SDT_CHUPHONG = $_POST['SDT_CHUPHONG'];
        $EMAIL_CHUPHONG = $_POST['EMAIL_CHUPHONG'];
        $GIA_PHONG = $_POST['GIA_PHONG'];
        $DIENTICH = $_POST['DIENTICH'];
        $GIADIEN = $_POST['GIADIEN'];
        $GIANUOC = $_POST['GIANUOC'];
        $TINH_TP = $_POST['TINH_TP'];
        $QUAN_HUYEN = $_POST['QUAN_HUYEN'];
        $XA_PHUONG = $_POST['XA_PHUONG'];
        $SONHA = $_POST['SONHA'];
        $ANH1 = basename($_FILES["ANH1"]["name"]);
        $ANH2 = basename($_FILES["ANH2"]["name"]);
        $ANH3 = basename($_FILES["ANH3"]["name"]);
        $MOTA = $_POST['MOTA'];

         
        $target_dir = "uploads/";
        $target_file1 = $target_dir.$ANH1;
        $target_file2 = $target_dir.$ANH2;
        $target_file3 = $target_dir.$ANH3;
        move_uploaded_file($_FILES["ANH1"]["tmp_name"], $target_file1);
        move_uploaded_file($_FILES["ANH2"]["tmp_name"], $target_file2);
        move_uploaded_file($_FILES["ANH3"]["tmp_name"], $target_file3);
      
        $data = array(
        'HOTEN_CHUPHONG' => $HOTEN_CHUPHONG,
        'SDT_CHUPHONG' => $SDT_CHUPHONG,
        'EMAIL_CHUPHONG' => $EMAIL_CHUPHONG,
        'GIA_PHONG' => $GIA_PHONG,
        'DIENTICH' => $DIENTICH,
        'GIADIEN' => $GIADIEN,
        'GIANUOC' => $GIANUOC,
        'TINH_TP' => $TINH_TP,
        'QUAN_HUYEN' => $QUAN_HUYEN,
        'XA_PHUONG' => $XA_PHUONG,
        'SONHA' => $SONHA,
        'ANH1' => $target_file1,
        'ANH2' => $target_file2,
        'ANH3' => $target_file3,
        'MOTA' => $MOTA
    );
        $this->model->dangtin($data); 
    }
    
}
?>

