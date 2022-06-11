
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ThongTinUser.css">
    <link rel="stylesheet" href="./views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Admin</title>
    <style>
        *{
    box-sizing:inherit;
    padding: 0;
    margin: 0;
}

:root{
    --text-color: black;
    --primary-color: #a4a5db;
}
html{
    
    font-size: 62.5%;
    line-height: 1.6rem;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}



.grid {
    max-width: 1250px;
    width: 100%;
    margin: 0 auto;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -8px;
    margin-right: -8px;
}

.col-2 {
    padding-left: 8px;
    padding-right: 8px;
}
.col-6{
    width: 50%;
    padding-left: 8px;
    padding-right: 8px;
}
.col-2{
    width: 25%;
}
.col-8{
    width: 66.66667%;
    padding-left: 8px;
    padding-right: 8px;
}

.col-4{
    width: 33.3333%;
    padding-left: 8px;
    padding-right: 8px;
}
.header{
    height: 140px;
    background-image: linear-gradient(180deg,rgba(255,0,0,0.7),rgba(255,140,0,0.7));
}

.nav{
    display: flex;
    justify-content: space-between;
    
}

.list1{
    display: flex;
    margin-top: 12px;
}

.item_list1{
    list-style: none;
    margin-right: 14px ;
}

.item_list1-link{
    font-size: 14px;
    text-decoration: none;
    color: #fff;
}

.item_list1-link:hover{
    color: black;
}

.list2{
    display: flex;
    margin-top: 12px;
    list-style: none;
    position: relative;
}

.item_list2{
    list-style: none;
    margin-right: 14px ;

}

.item_list2-link{
    font-size: 14px;
    text-decoration: none;
    color: #fff;
}

.item_list2-link:hover{
    color: black;

}

.header-search{
    display: flex;
    
    /* margin: 16px 0; */
    align-items: center;
}



.header__logo-link-img{
    width: 118px;
    height: 80px;
}

.search{
    background-color: #fff;
    width: 250px;
    height: 28px;
    margin-left: 24px;
    position: relative;
}
.search__input{
    width: 85%;
    height: 100%;
    border: none;
    outline: none;
    margin:0 4px ;
}
.header__search-btn{
    font-size: 18px;
    /* border: none; */
    outline: none;
    padding-right: 4px;
    background-color: orange;
    cursor: pointer;
    position: absolute;
    top: 1px;
    right: 1px;
}

.header__select{
    display: flex;
    justify-content: space-between;
}

.header__search-select{
    width: 130px;
    height: 20px;
    background-color: #fff;
    margin-left: 32px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
}

.header__search-select-label{
    font-size: 14px;
    line-height: 20px;
    margin: 0 4px;
}

.header__search-select-icon{
    font-size: 14px;
    position: relative;
    top:4px;
    right: 6px;
}

.Timkiem{
    margin-left: 74px;
    padding: 4px 12px;
    cursor: pointer; 
}

.list2__item-img{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1px solid #e13f2a;
    cursor: pointer;
}

.list2__item-name{
    padding-left: 8px;
    font-size: 1.4rem;
    padding-top: 2px;
    color: #fff;
    text-decoration: none;
    cursor: pointer;
    position: relative;
    top:-8px;
}

.list2:hover .header__navbar-user-menu{
    display: block;
}
.header__navbar-user-menu::before{
    content: "";
    position: absolute;
    width: 160px;
    height: 8px;
    top:-8px;
    right: 0;
}
.header__navbar-user-menu{
    position: absolute;
    top:calc(100% + 8px);
    right: 0;
    padding-left: 0;
    background-color: rgb(214, 141, 141);
    border-radius: 2px;
    width: 160px;
    list-style: none;
    z-index: 2;
    box-shadow: 0px 0px 10px rgb(211, 208, 208);
    display: none;
    
}
.header__navbar-user-item a{
    text-decoration: none;
    list-style: none;
    font-size: 1.4rem;
    color: white;
    padding: 8px 16px;
    display: block;
}
.header__navbar-user-item:hover{
    background-color: rgb(135, 168, 153);
}
.header__navbar-user-item:first-child{
    border-top-left-radius:2px ;
    border-top-right-radius:2px ;
}

.header__navbar-user-item:last-child{
    border-bottom-left-radius:2px ;
    border-bottom-right-radius:2px ;
}
table, th, td {  
    border: 1px solid #ccc;
    border-collapse: collapse;
    font-size: 14px;
    padding: 12px 12px;
    
}
.aa{
    text-decoration:none;
    color:#000000;
}
 .content {
    margin-top: 36px;
}
th{

}
.table{
    width: 1200px;
    height:400px;
    overflow-x:scroll;
}

.table__img{
    width:120px;
    height:120px;
}

.content_heading{
    font-size:20px;
    margin : 30px 0;
    text-align: center;
}
.content__infoUser-avatar{
    display: flex;
    align-items: center;
    flex-direction:column;
    
}
.content__infoUser{
    margin-top: 32px;
}
.content__infoUser-img{
    width: 150px;
    height:150px;
    border-radius:50%;
    
}
.content__infoUser-name{
    margin: 12px 0;
    font-size: 24px;
}
.content__infoUser-left,
.content__infoUser-right{
    border: 1px solid #ccc;
    display: flex;
    flex-direction:column;
    padding: 16px;
    width: 580px;
}
.content__infoUser-label{
    font-size:16px;
    margin:8px ;  
}
.content__infoUser-input{
    padding: 8px ;
    overflow:none;
}

.content__infoUser-info-row{
    display: flex;
    justify-content: space-between;
    margin:24px 0;
}
.footer{
    margin: 32px 0;
}

.footer__logo-link-img{
    width: 200px;
    height: 140px;
}

.footer__information{
    padding-top: 12px;
}

.footer__information-heading{
    font-size: 16px;
}
.footer__information-address{
    font-size: 16px;
    padding-top: 8px;
    display: block;
    line-height: 20px;

}
.footer__information-phone{
    font-size: 16px;
    padding-top: 8px;

}

.footer__information-phonenumber{
    margin-left: 8px;
}
.footer__information-phonenumber-link{
    text-decoration: none;
    color: black;
}
.footer__information-gmail{
    font-size: 16px;
    padding-top: 8px;

}

.footer__information-gmail1{
    margin-left: 8px;

}
.footer__information-gmail1-link{
    margin-left: 8px;
    text-decoration: none;
    color: black;
}

.footer__information-gmail1-link:hover,
.footer__information-phonenumber-link:hover{
    opacity: 0.9;
    color: var(--primary-color);
}

.footer_connection{
    margin: 16px 0;
}

.footer_connection-name{
    font-size: 16px;
    margin-bottom: 12px;
}   


.footer_connection-item-link{
    margin-left: 8px;
    text-decoration: none;
    font-size: 24px;
    color: rgb(122, 117, 117);
}

.footer_connection-item-link:hover{
    opacity: 0.7;
}

.button__edit{
    display: flex;
    margin: 0 auto;
    padding: 8px;
    cursor: pointer;
}
.table2 table,
.table1 table{
    width: 1200px;
}
.table2{
    margin-top:32px;
}
.test1 {
    word-break: break-word;
}
    </style>
</head>
<body>
    <div class="header">
        <div class=" grid ">
            <div class="nav">
            <ul class="list1">
                   <li class="item_list1">
                        <a href="?task=viewPhong" class="item_list1-link">Trang chủ</a>
                   </li>
                   <li class="item_list1">
                        <a href="" class="item_list1-link">Về chúng tôi</a>
                    </li>
                    <li class="item_list1">
                        <a href="http://www.tnu.edu.vn/" class="item_list1-link">Tin tức- Sự kiện</a>
                    </li>
                    <li class="item_list1">
                        <a href="../views/DangTin.php" class="item_list1-link">Đăng tin</a>
                    </li>
                    <li class="item_list1">
                        <a href="" class="item_list1-link">Hướng dẫn</a>
                    </li>
               </ul>
                <ul class="list2">
                    <li class="list2__item">
                        <img src="<?php echo $_SESSION['photo']?>" alt="" class="list2__item-img">
                        <span class="list2__item-name"><?php echo $_SESSION['hoten']?></span>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item"><a href="">Tài khoản của tôi</a></li>
                            <li class="header__navbar-user-item"><a href="?task=dangxuat">Đăng xuất </a></li>
                        </ul>
                    </li>
                 </ul>
            </div>
            <div class="header-search">
                <div class="header__logo">
                    <a href="?task=viewPhong" class="header__logo-link">
                        <img class="header__logo-link-img" src="./views/img/logo 01_u.png" alt="">
                    </a>
                </div>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm" class="search__input"></input>
                    <button class="header__search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="grid ">
            <h3 class="content_heading">THÔNG TIN VỀ CÁC THÀNH VIÊN</h3>
            <div class="table1" style="width:1250px; height: 520px; overflow-x: scroll;" >
                <table >
                    <tr>
                        <th>ID</th>
                        <th>Họ Tên</th>
                        <th>Ngày Sinh</th>
                        <th>Quê Quán</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Sđt</th>
                        <th>Avatar</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                    <?php foreach ($data as $row):?>
                    <tr>
                        <th><?php echo $row['id_user']?></th>
                        <th><?php echo $row['hoten']?></th>
                        <th><?php echo $row['ngaysinh']?></th>
                        <th class="test1"><?php echo $row['quequan']?></th>
                        <th><?php echo $row['email']?></th>
                        <th><?php echo $row['matkhau']?></th>
                        <th><?php echo $row['sdt']?></th>
                        <th><img class="table__img"src="<?php echo $row['photo']?>" alt=""></th>
                        <th><a class="aa" href="?task=show_update_user&id_user=<?php echo $row['id_user']?>"><i class="fas fa-edit"></i></a></th>
                        <th><a class="aa" href="?task=delete_user&id_user=<?php echo $row['id_user']?>"><i class="far fa-trash-alt"></i></a></th>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
            <h3 class="content_heading">THÔNG TIN VỀ CÁC PHÒNG TRÊN HỆ THỐNG</h3>
            <div class="table" style="width:1250px; height: 520px; overflow-x: scroll;">
                <table >
                    <tr>
                        <th>Mã Phòng</th>
                        <th>Tên Chủ Phòng</th>
                        <th>Số Điện Thoại</th>
                        <th>Giá Phòng</th>
                        
                        <th>Diện tích</th>
                        <th>Giá điện</th>
                        <th>Giá nước</th>
                        <th>Địa chỉ</th>
                        <th>Mô tả thêm</th>
                        <th>Ảnh</th>
                        <th>sửa</th>
                        <th>xóa</th>
                    </tr>
                    <?php foreach ($data1 as $row1):?>
                    <tr>
                        <th><?php echo $row1['id_phong']?></th>
                        <th><?php echo $row1['HOTEN_CHUPHONG']?></th>
                        <th><?php echo $row1['SDT_CHUPHONG']?></th>
                        <th><?php echo $row1['GIA_PHONG']?></th>
                        <th><?php echo $row1['DIENTICH']?></th>
                        <th><?php echo $row1['GIADIEN']?></th>
                        <th><?php echo $row1['GIANUOC']?></th>
                        <th class="test1"><?php echo $row1['TINH_TP']?>, <?php echo $row1['QUAN_HUYEN']?>, <?php echo $row1['XA_PHUONG']?>, <?php echo $row1['SONHA']?></th>
                        <th class="test1"><?php echo $row1['MOTA']?></th>
                        <th><img class="table__img"src="<?php echo $row1['ANH1']?>" alt=""></th>
                        <th><a class="aa"  href="?task=update_phong&id_phong=<?php echo $row1['id_phong']?>"><i class="fas fa-edit"></i></a></th>
                        <th><a class="aa"  href="?task=delete_phong&id_phong=<?php echo $row1['id_phong']?>"><i class="far fa-trash-alt"></i></a></th>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer">

       <div class="grid">
           <div class="row">
               <div class="col-6">
                    <div class="footer__logo">
                        <a href="" class="footer__logo-link">
                            <img class="footer__logo-link-img" src="./views/img/logo 01_u.png" alt="">
                        </a>
                    </div>
                    <div class="footer__information">
                        <h3 class="footer__information-heading">
                            Thông tin về chúng tôi
                        </h3>
                        <span class="footer__information-address">
                            Địa chỉ: Nhóm 6 - Lớp CNTTK17N, Khoa Công Nghệ Thông Tin,  Trường Đại học Công nghệ thông tin và Truyền thông, xã Quyết Thắng, TP. Thái Nguyên
                        </span>
                        <div class="footer__information-phone">
                            <i class="fas fa-phone"></i>
                            <span class="footer__information-phonenumber">
                                Phone :
                                <a href="tel:0123456789" class="footer__information-phonenumber-link">0123456789</a>
                            </span>
                        </div>
                        <div class="footer__information-gmail">
                            <i class="fas fa-envelope-square"></i>
                            <span class="footer__information-gmail1">
                                Email :
                                <a href="timtrotnu@ictu.vn" class="footer__information-gmail1-link">timtrotnu@ictu.vn</a>
                            </span>
                        </div>
                    </div>
               </div>
               <div class="col-6">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3710.0278748467103!2d105.8062245!3d21.584834999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1637075075722!5m2!1svi!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="footer_connection">
                        <h3 class="footer_connection-name">Kết nối với chúng tôi</h3>
                        <div class="footer_connection-item">
                            <a href="https://www.facebook.com/TimTroTNU" class="footer_connection-item-link">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="" class="footer_connection-item-link">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                            <a href="" class="footer_connection-item-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="" class="footer_connection-item-link">
                                <i class="fab fa-skype"></i>
                            </a>
                            <a href="" class="footer_connection-item-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </footer>
</body>
</html>