<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Đăng Tin</title>
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

.content{
    background-color: #f7ecec;
}

.content__app{
    display: flex;
    margin: 0 auto;
    max-width: 700px;
    flex-direction: column;
}

.content__head{
    text-align: center;
    padding-top: 32px ;
    font-size: 24px;
    font-weight: 600;

}
.content__info{
    border: 1px solid rgb(150, 149, 149);
    padding: 16px;
    width: 700px;
    border-radius: 5px;
    margin-top: 32px ;

}

.content__info-head{
    text-align: center;
    font-size: 20px;
    font-weight: 400;
    margin-bottom: 16px;
}

.content__info-content{
    display: flex;
    flex-direction: column;
}

.content__info-label{
    font-size: 18px;
    margin: 8px 12px;
    display: block;
}

.content__info-input{
    padding: 8px 70px 8px 4px ;
    font-size: 16px;
    overflow: none;
    flex: 1;
}

.content__info-content2{
    display: flex;
    flex-direction: row;
}

.col-6 {
    margin-left:44px ;
}

.content{
    padding-bottom: 24px;
}
.content__info-head2{
    font-size: 20px;
    font-weight: 500;
    margin: 16px  0;
}

.content__info-quan{
    margin-top: 61px;
}

.content__info-wrap{
    padding: 4px 0;
    position: relative;
}

.content__info-gia{
    position: absolute;
    top:48px;
    right: 24px;
    font-size: 16px;

}

.content__img{
    border: 1px solid rgb(150, 149, 149);
    padding: 16px;
    margin-top: 32px;
}

.content__img-heading{
    font-size: 20px;
    font-weight: 500;
    margin: 16px  0;
    text-align: center;
}

.content__img-list{
    display: flex;
    justify-content: space-between;
}

.content__mota{
    border: 1px solid rgb(150, 149, 149);
    padding: 16px;
    margin: 32px 0;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.content__mota-heading{
    font-size: 20px;
    font-weight: 500;
    text-align: center;
}

.content__mota-content{
    width: 90%;
    height: 90%;
    padding: 8px;
}

.btn{
    padding: 10px 50px;
    cursor: pointer;
    font-size: 24px;
    display: flex;
    margin: 0 auto; 
}

.footer{
    display: flex;
    justify-content: space-evenly;
    padding: 32px 0;
}
.footer__information-phone{
    font-size: 24px;
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
    font-size: 24px;
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
                        <img src="./img/anh-chibi-sieu-nhan-sieu-anh-hung-dep-va-chat-nhat-23.jpg" alt="" class="list2__item-img">
                        <span class="list2__item-name">Nguyễn Thanh</span>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item"><a href="">Tài khoản của tôi</a></li>
                            <li class="header__navbar-user-item"><a href="">Địa chỉ của tôi</a></li>
                            <!-- <li class="header__navbar-user-item"><a href="">Đơn mua</a></li> -->
                            <li class="header__navbar-user-item"><a href="">Đăng xuất </a></li>
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
        <div class="grid">
            <h2 class="content__head">MỜI NHẬP THÔNG TIN PHÒNG TRỌ</h2>
            <form action="?task=them1" method="POST" enctype="multipart/form-data">
            <div class="content__app">
                <div class="content__info">
                    <h3 class="content__info-head">THÔNG TIN NGƯỜI CHO THUÊ</h3>
                    <div class="content__info-content">
                        <label for="1" class="content__info-label">Người cho thuê</label>
                        <input id="1" type="text" name="HOTEN_CHUPHONG" class="content__info-input">
                        <label for="2" class="content__info-label">Số điện thoại</label>
                        <input id="2" type="text" name="SDT_CHUPHONG" class="content__info-input">
                        <label for="3" class="content__info-label">Email</label>
                        <input id="3" type="email" name="EMAIL_CHUPHONG" class="content__info-input">
                    </div>
                </div>
                <div class="content__info">
                    <h3 class="content__info-head">THÔNG TIN PHÒNG CHO THUÊ</h3>
                    <div class="content__info-content2">
                        <div class="col-6">
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Giá phòng</label>
                                <input id="" type="text" name="GIA_PHONG" class="content__info-input">
                                <span class="content__info-gia">đ/tháng</span>
                            </div>
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Giá điện</label>
                                <input id="" type="text" name="GIADIEN" class="content__info-input">
                                <span class="content__info-gia">đ/số</span>

                            </div>
                            <h4 class="content__info-head2">Địa chỉ cụ thể :</h4>
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Tỉnh/thành phố</label>
                                <input id="" type="text" name="TINH_TP" class="content__info-input">
                            </div>
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Xã/phường/thị trấn</label>
                                <input id="" type="text" name="XA_PHUONG" class="content__info-input">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Diện tích</label>
                                <input id="" type="text" name="DIENTICH" class="content__info-input">
                                <span class="content__info-gia">m2</span>

                            </div>
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Giá nước</label>
                                <input id="" type="text" name="GIANUOC" class="content__info-input">
                                <span class="content__info-gia">đ/m3</span>

                            </div>
                            <div class="content__info-quan">
                                <label for="" class="content__info-label">Quận/huyện</label>
                                <input id="" type="text" name="QUAN_HUYEN" class="content__info-input">
                            </div>
                            <div class="content__info-wrap">
                                <label for="" class="content__info-label">Phố/thôn/xóm</label>
                                <input id="" type="text" name="SONHA" class="content__info-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__img">
                    <div class="content__img-heading">ẢNH CHI TIẾT PHÒNG</div>
                    <div class="content__img-list">
                        <input type="file" name="ANH1" class="content__img-item">
                        <input type="file" name="ANH2" class="content__img-item">
                        <input type="file" name="ANH3" class="content__img-item">
                    </div>
                </div>
                <div class="content__mota">
                    <h4 class="content__mota-heading">MÔ TẢ THÊM</h4>
                    <textarea  type="text" id="" name ="MOTA" class="content__mota-content"></textarea>
                </div>
            </div>
          
        </div>
        

            <input type="submit" class="btn" value="Đăng tin"></input>
        
    </div>
    </form>
    <footer class="footer">
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
    </footer>
</body>
</html>