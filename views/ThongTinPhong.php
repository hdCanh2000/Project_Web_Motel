<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Thông tin phòng</title>
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
    max-width: 1200px;
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
    
    margin: 16px 0;
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
.content{
    background-color:  #f5f5f5; 
    padding: 32px 0;
}

.content__img-left{

}

.content__img-left-item{
    width: 95%;
    /* height: 500px; */
}

.content__img-right{
    height:754.922px;
    display: flex;
    flex-direction:column;
    justify-content: space-between;
}

.content__img-item{
    width: 94%;
}

.content__heading{
    padding: 24px 0;
    font-size: 28px;
    color: black;
}

.content__info{
    border: 1px solid #ccc;
}

.content__info-list{
    padding: 8px;
    list-style: none;
    min-height:300px;
}

.content__wrap{
    display: flex;
    flex-direction: column;
    margin-top: 65px;
    height: 300px;
    justify-content: space-between;
}

.content__info-item{
    font-size: 20px;
    line-height: 28px;
    margin-top: 6px;
}

.content__info-host{
    border: 1px solid #ccc;
}

.content__info-host-head{
    font-size: 24px;
    font-weight: 300;
    padding: 20px 8px 12px;
}

.content__info-host-list{
    list-style: none;
    
}

.content__info-host-list:last-child{
    margin-bottom: 8px;
}

.content__info-host-item{
    font-size: 20px;
    line-height: 20px;
    margin-left: 20px;
    margin-top: 8px;

}

.content__report{
    border: 1px solid #ccc;
    padding: 20px  8px ;
}

.content__report-head{
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 12px;
}

.content__report-list{
    list-style: none;

}

.content__report-item{
    font-size: 20px;
    line-height: 20px;
    margin-left: 20px;
    margin-top: 8px;
}

.footer{
    margin-bottom: 32px;
    margin-top: 40px;
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
.header__option{
    min-inline-size: -webkit-fill-available;
}


    </style>
</head>
<body>
    <div class="header">
        <div class=" grid ">
            <div class="nav">
            <ul class="list1">
                   <li class="item_list1">
                        <a href="?task=viewPhong2" class="item_list1-link">Trang chủ</a>
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
            </div>
            <div class="header-search">
                <div class="header__logo">
                    <a href="?task=viewPhong2" class="header__logo-link">
                        <img class="header__logo-link-img" src="./views/img/logo 01_u.png" alt="">
                    </a>
                </div>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm" class="search__input"></input>
                    <button class="header__search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="header__select">
                    <div class="header__search-select" >             
                        <select  class="header__option"  name="quan" id="" style=" min-inline-size: -webkit-fill-available;">
                            <option value="">Khu Vực</option>
                            <option value=""> Tân Thịnh </option>
                            <option value=""> Quyết Thắng</option>
                            <option value=""> tp Thái Nguyên</option>
                        </select>
                    </div>
                    <div class="header__search-select">
                    <select class="header__option"  name="gia" id="">
                            <option value="">khoảng giá</option>
                            <option value=""> 500-1000</option>
                            <option value=""> 1000-2000</option>
                            <option value=""> 3000-5000</option>


                        </select>
                    </div>
                    <div class="header__search-select">
                    <select  class="header__option" name="dientich" id="">
                            <option value="">diện tích</option>
                            <option value=""> 10-20 </option>
                            <option value=""> 20-30 </option>
                            <option value=""> 30-50 </option>


                        </select>
                    </div>
                    
                </div>
                 <button class="Timkiem">Tìm Kiếm</button>
             </div>
        </div>
    </div>
    <div class="content">
        <div class="grid">
            <div class="row">
                <div class="col-8">
                    <div class="content__img-left">
                        <img class="content__img-left-item" src="<?php echo $data['ANH1']?>" alt="">
                    </div>
                    <h3 class="content__heading">THÔNG TIN CHI TIẾT</h3>
                    <div class="content__info">
                        <ul class="content__info-list">
                            <li class="content__info-item">
                                - Giá: <?php echo $data['GIA_PHONG']?>
                            </li>
                            <li class="content__info-item">
                                - Tổng diện tích mặt sàn: <?php echo $data['DIENTICH']?>
                            </li>
                            <li class="content__info-item">
                                - Giá điện: <?php echo $data['GIADIEN']?>
                            </li>
                            <li class="content__info-item">
                                - Giá Nước: <?php echo $data['GIANUOC']?>
                            </li>
                            <li class="content__info-item">
                                - ĐỊA CHỈ PHÒNG: <?php echo $data['TINH_TP']?>, <?php echo $data['QUAN_HUYEN']?>, <?php echo $data['XA_PHUONG']?>, <?php echo $data['SONHA']?>
                            </li>                           
                            <li class="content__info-item">
                                - MÔ TẢ THÊM: <?php echo $data['MOTA']?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div class="content__img-right">
                        <img class="content__img-item" src="<?php echo $data['ANH2']?>" alt="">
                        <img class="content__img-item" src="<?php echo $data['ANH3']?>" alt="">
                    </div>
                    <div class="content__wrap">

                        <div class="content__info-host">
                            <h4 class="content__info-host-head">
                                THÔNG TIN CHỦ TRỌ
                            </h4>
                            <ul class="content__info-host-list">
                                <li class="content__info-host-item">
                                    Họ tên: <?php echo $data['HOTEN_CHUPHONG']?>
                                </li>
                                <li class="content__info-host-item">
                                    Số điện thoại:  <?php echo $data['SDT_CHUPHONG']?>
                                </li>
                                <li class="content__info-host-item">
                                    Email:  <?php echo $data['EMAIL_CHUPHONG']?>
                                </li>
                            </ul>
                        </div>
                        <div class="content__report">
                            <h4 class="content__report-head">
                                BÁO CÁO VI PHẠM
                            </h4>
                            <ul class="content__report-list">
                                <li class="content__report-item">
                                    Thông tin trên có vi phạm chính sách của chúng tôi không? 
    
                                </li>
                                <li class="content__report-item">
                                    <a href="">Hãy cho chúng tôi biết!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="grid">
            <div class="row">
                <div class="col-6">
                     <div class="footer__logo">
                         <a href="./Home/formHome.html" class="footer__logo-link">
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
                             <a href="" class="footer_connection-item-link">
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