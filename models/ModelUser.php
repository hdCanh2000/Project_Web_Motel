<?php
    session_start();
    class modelUsert{
        var $con;
	public function __construct(){
		// ket noi co so du lieu
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "xdhttt";

		
        $this->con = new mysqli($servername, $username, $password, $dbname);
	}
    public function getusert(){
        //2. viet cau truy van
        $sql = "SELECT * FROM tk_user";

        //3. truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    public function phong_user(){
        $id = $_REQUEST['id_user'];
        $sql = "SELECT tt_phong.* FROM tt_phong,tk_user where tt_phong.id_phong = tk_user.id_phong and id_user = '$id' ";

        //3. truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    public function updateuser($id){

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
    $sql = "UPDATE tk_user SET hoten='".$data['hoten']."',ngaysinh ='".$data['ngaysinh']."',quequan ='".$data['quequan']."',email ='".$data['email']."',matkhau ='".$data['matkhau']."',sdt ='".$data['sdt']."'
    ,photo ='".$data['photo']."'  WHERE id_user='$id' ";
    
    $result = $this->con->query($sql);
    header('Location: ?task=admin');
        
      


    
    }
    public function dangxuat(){

        $sql = session_destroy();
        $tra = $this->con->query($sql);
    }
    public function delete($id){
        $sql = "DELETE  FROM tk_user where id_user = '$id' ";
        $tra = $this->con->query($sql);
    }
    public function get_usert_admin(){
        //2. viet cau truy van
        $sql = "SELECT * FROM tk_user";

        //3. truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function dangky(array $data)
    {
        //2. sql
        $sql = "INSERT INTO tk_user(hoten,ngaysinh,quequan,email,matkhau,sdt,photo,roles)
    VALUES ('".$data['hoten']."', '".$data['ngaysinh']."','".$data['quequan']."', '".$data['email']."', '".$data['matkhau']."','".$data['sdt']."', '".$data['photo']."','0')";

        $rs = $this->con->query($sql);
        header('Location: ?task=viewPhong');
    }

    public function dangnhap($email,$matkhau){
        $sql = "SELECT * FROM tk_user WHERE email = '$email' and matkhau = '$matkhau'  ";
      
        $result = $this->con->query($sql);
       

        if(mysqli_num_rows($result)>0){
            
            
            while ( $data = mysqli_fetch_array($result) ) {
	    		$_SESSION["id_user"] = $data["id_user"];
				$_SESSION['hoten'] = $data["hoten"];
                $_SESSION['ngaysinh'] = $data["ngaysinh"];
                $_SESSION['quequan'] = $data["quequan"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["matkhau"] = $data["matkhau"];
				$_SESSION["sdt"] = $data["sdt"];
                $_SESSION["photo"] = $data["photo"];
                $_SESSION["id_phong"] = $data["id_phong"];
				$_SESSION["roles"] = $data["roles"];
	    	}
            header("Location: ?task=viewPhong");
        }else{
            echo "Sai mật khẩu rồi kìa";
        } 
      

    }

    }

?>