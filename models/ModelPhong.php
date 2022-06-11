<?php

class ModelPhong
{
    var $con;
	public function __construct(){
		// ket noi co so du lieu
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "xdhttt";

		$this->con = new mysqli($servername, $username, $password, $dbname);
	}
    public function admin(){
        $this->view->admin();
    }
    public function update_phong($id){
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
      
        if(!empty($ANH1)){
        $sql = "UPDATE tt_phong SET HOTEN_CHUPHONG='".$data['HOTEN_CHUPHONG']."',SDT_CHUPHONG ='".$data['SDT_CHUPHONG']."',GIA_PHONG ='".$data['GIA_PHONG']."',DIENTICH ='".$data['DIENTICH']."',GIADIEN ='".$data['GIADIEN']."',GIANUOC ='".$data['GIANUOC']."'
        ,TINH_TP ='".$data['TINH_TP']."',QUAN_HUYEN ='".$data['QUAN_HUYEN']."',XA_PHUONG ='".$data['XA_PHUONG']."',SONHA ='".$data['SONHA']."',ANH1 ='".$data['ANH1']."',MOTA ='".$data['MOTA']."'  WHERE id_phong='$id' ";
        
        $result = $this->con->query($sql);
        header('Location: ?task=admin');
           
    }
    if(!empty($ANH2)){
        $sql = "UPDATE tt_phong SET HOTEN_CHUPHONG='".$data['HOTEN_CHUPHONG']."',SDT_CHUPHONG ='".$data['SDT_CHUPHONG']."',GIA_PHONG ='".$data['GIA_PHONG']."',DIENTICH ='".$data['DIENTICH']."',GIADIEN ='".$data['GIADIEN']."',GIANUOC ='".$data['GIANUOC']."'
        ,TINH_TP ='".$data['TINH_TP']."',QUAN_HUYEN ='".$data['QUAN_HUYEN']."',XA_PHUONG ='".$data['XA_PHUONG']."',SONHA ='".$data['SONHA']."',ANH2 ='".$data['ANH2']."',MOTA ='".$data['MOTA']."'  WHERE id_phong='$id' ";
        
        $result = $this->con->query($sql);
        header('Location: ?task=admin');
           
    }
    if(!empty($ANH3)){
        $sql = "UPDATE tt_phong SET HOTEN_CHUPHONG='".$data['HOTEN_CHUPHONG']."',SDT_CHUPHONG ='".$data['SDT_CHUPHONG']."',GIA_PHONG ='".$data['GIA_PHONG']."',DIENTICH ='".$data['DIENTICH']."',GIADIEN ='".$data['GIADIEN']."',GIANUOC ='".$data['GIANUOC']."'
        ,TINH_TP ='".$data['TINH_TP']."',QUAN_HUYEN ='".$data['QUAN_HUYEN']."',XA_PHUONG ='".$data['XA_PHUONG']."',SONHA ='".$data['SONHA']."',ANH3 ='".$data['ANH3']."',MOTA ='".$data['MOTA']."'  WHERE id_phong='$id' ";
        
        $result = $this->con->query($sql);
        header('Location: ?task=admin');
           
    }
    
    
    
    
    else{
        $sql = "UPDATE tt_phong SET HOTEN_CHUPHONG='".$data['HOTEN_CHUPHONG']."',SDT_CHUPHONG ='".$data['SDT_CHUPHONG']."',GIA_PHONG ='".$data['GIA_PHONG']."',DIENTICH ='".$data['DIENTICH']."',GIADIEN ='".$data['GIADIEN']."',GIANUOC ='".$data['GIANUOC']."'
        ,TINH_TP ='".$data['TINH_TP']."',QUAN_HUYEN ='".$data['QUAN_HUYEN']."',XA_PHUONG ='".$data['XA_PHUONG']."',SONHA ='".$data['SONHA']."',MOTA ='".$data['MOTA']."'  WHERE id_phong='$id' ";
        
        $result = $this->con->query($sql);
        header('Location: ?task=admin');
    }

    }
    

    public function getPhong()
    {
        
        //2. viet cau truy van
        
      
        
            $sql = "SELECT * FROM tt_phong";
        

        //3. truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function timkiem($quan)
    {
        $sql="SELECT * from tt_phong where QUAN_HUYEN REGEXP '$quan' ORDER BY id_phong DESC";
        // truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function getPhong2()
    {
        
        //2. viet cau truy van
        
        $quan = $_POST['quan'];
        $gia = $_POST['gia'];
        $dientich = $_POST['dientich'];
        $sql = "SELECT * FROM tt_phong where (QUAN_HUEN LIKE '%$quan%') or (GIA_PHONG LIKE '%$gia%') or (DIENTICH like '%$dientich%') ";

        //3. truy van va tra lai data
        $result = $this->con->query($sql);

        $data =[];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
   
    public function dangtin(array $data)
    {
        //2. sql
        $sql = "INSERT INTO tt_phong(HOTEN_CHUPHONG	,SDT_CHUPHONG,EMAIL_CHUPHONG,GIA_PHONG,	DIENTICH,GIADIEN,GIANUOC,TINH_TP,QUAN_HUYEN,XA_PHUONG,SONHA,ANH1,ANH2,ANH3,MOTA)
        VALUES ('".$data['HOTEN_CHUPHONG']."', '".$data['SDT_CHUPHONG']."','".$data['EMAIL_CHUPHONG']."', '".$data['GIA_PHONG']."', '".$data['DIENTICH']."', '".$data['GIADIEN']."', '".$data['GIANUOC']."', 
        '".$data['TINH_TP']."', '".$data['QUAN_HUYEN']."', '".$data['XA_PHUONG']."', '".$data['SONHA']."', '".$data['ANH1']."', '".$data['ANH2']."',  '".$data['ANH3']."' , '".$data['MOTA']."' )";

        $rs = $this->con->query($sql);
        header('Location: ?task=viewPhong');
    }

    public function delete($id){
        $sql = "DELETE  FROM tt_phong where id_phong = '$id' ";
        $tra = $this->con->query($sql);
    }
}
?>