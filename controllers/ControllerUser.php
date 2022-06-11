<?php
    require_once "models/ModelUser.php";
    require_once "views/viewuser.php";
    
    
    class usert{
    var $model;
    var $view;
    public function __construct()
    {
        $this->model =  new modelUsert();
        $this->view = new viewUsert();
    }

    public function show_form_dangky()
    {   
        $this->view->show_form_dangky();
    }
    

    public function dangky(){
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $quequan = $_POST['quequan'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $sdt = $_POST['sdt'];
        
        
        $photo = basename($_FILES["photo"]["name"]);
        

         
        $target_dir = "uploads/";
        $target_file1 = $target_dir.$photo;
        
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file1);
      
      
        $data = array(
        'hoten' => $hoten,
        'ngaysinh' => $ngaysinh,
        'quequan' => $quequan,
        'email' => $email,
        'matkhau' => $matkhau,
        'sdt' => $sdt,
        
        'photo' => $target_file1
        
    );
        $this->model->dangky($data); 
    }


    public function show_dangnhap(){
        $this->view->show_dangnhap();
    }
    public function dangnhap(){
        
        $email  = $_REQUEST['email'];
        $matkhau = $_REQUEST['matkhau'];
        
        $this->model->dangnhap($email,$matkhau);
        
    }
    public function show_update_user(){
        $id = $_REQUEST['id_user'];
        $data = $this->model->con->query("SELECT * FROM tk_user where id_user = $id")->fetch_assoc();
        $this->view->show_update_user($data);
    }
    public function updateuser(){
        $id = $_REQUEST['id_user'];
        $this->model->updateuser($id);
    }
    public function dangxuat(){
        unset($_SESSION['id_user']);
        header('Location: ?task=show_dangnhap');
    }
    public function delete_user(){
        $id = $_REQUEST['id_user'];
        $this->model->delete($id);
        header("Location: ?task=admin");
    }

    public function show_thong_tin_user(){
        $id = $_REQUEST['id_user'];
        $data1 = $this->model->phong_user();
        $data = $this->model->con->query("SELECT * FROM tk_user where id_user = $id")->fetch_assoc();
        $this->view->show_thong_tin_user($data,$data1);
    }



     }