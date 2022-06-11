<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
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

.main{
    max-width: 875px;
    width: 100%;
    margin: 0 auto;
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
    background-color:#f7f4f2;

}
.content__img{

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
    background-size: 100%;
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
.content__head{
    font-size: 20px;
    margin-bottom: 20px;
}
.main p{
    font-size: 16px;
    line-height: 20px;
    margin-bottom: 10px;
}
.test{
    margin-left:28px;
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
            </div>
            <div class="header-search">
                <div class="header__logo">
                    <a href="?task=viewPhong" class="header__logo-link">
                        <img class="header__logo-link-img" src="../views/img/logo 01_u.png" alt="">
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
        <div class="main">
            <h3 class="content__head">**HƯỚNG DẪN NGƯỜI XEM:</h3>
            <p>1. Khi truy cập vào website bạn có thể tìm kiếm, xem các phòng trọ với thông tin chi tiết và thông tin liên hệ của chủ phòng.</p> 
            <p>2. Tại đây bạn có thể liên hệ trực tiếp với chủ phòng qua thông tin đã hiển thị để lựa chọn phòng cần đến cho nhu cầu của bản thân.</p> 
            <p>3. Chức năng tìm kiếm lọc kết quả theo yêu cầu khi nhập điều kiện cần thực hiện của người dùng nhập vào.</p> 
            <h3 class="content__head">**HƯỚNG DẪN NGƯỜI ĐĂNG TIN:</h3>
            <p>1. Điều kiện cần có để thực hiện đăng tin:</p>
            <p class="test"> 1.1. Nếu bạn chưa có tài khoản, chưa phải thành viên của website hãy đăng ký trước khi bắt đầu thực hiện chức năng đăng tin.
</p>
            <p class="test">1.2. Nếu đã có tài khoản, sau khi đăng nhập vào website, bạn bấm vào nút ĐĂNG TIN để bắt đầu.</p>
            <p>2. Người dùng chọn chức năng Đăng Tin phía trên thanh Menu trên đầu trang website để mở form điền cho trước.
</p>
            <p>3. Nhập đầy đủ và chính xác nội dung cho bài đăng trong form thông tin đã cho. </p>
            <p>4. Kiểm tra lại thông tin đã nhập và chọn "Đăng tin"</p>
            <h4 class="content__head">*Lưu ý khi đăng tin:</h4>
            <p>+ Yêu cầu chuẩn bị đủ ảnh cho bài đăng. Chụp hình khổ ngang: phòng trọ, phòng vệ sinh, không gian sử dụng chung (nếu có), bên ngoài, ...
</p>
            <p>+ Điền đầy đủ các thông tin bắt buộc vào các ô nhập liệu trong phần đăng tin.</p>
            <p>+ Phần giá cho thuê, vui lòng nhập chính xác 1 giá duy nhất (Không nhập giá từ ....đến ....) và chọn đúng đơn vị giá là triệu/tháng hoặc nghìn/tháng. Ví dụ bạn cho thuê 3 triệu/tháng thì bạn nhập đủ như sau 3000000 (1 số 3 và 6 số 0)</p>
            <p>+ Diện tích nhập đúng 1 diện tích duy nhất (Không nhập diện tích từ ....đến ....)</p>
            <p>+ Sau khi nhập đầy đủ các thông tin, chọn ĐĂNG TIN và chờ vài giây để tin bạn hiển thị trên website, nếu đăng tin thành công hệ thống sẽ báo bạn đã đăng tin thành công, nếu hệ thống cảnh báo màu đỏ, các ô chọn màu bị sai, vui lòng nhập lại cho chính xác và chọn ĐĂNG TIN lại.</p>
        </div>
    </div>
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