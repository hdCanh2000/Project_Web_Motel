<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <title>Đăng nhập</title>
    <style>
        *{
    box-sizing:inherit;
    padding: 0;
    margin: 0;
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
:root{
    --text-color: black;
    --primary-color:#ff994c ;
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

.header{
    height: 140px;
    background-image: linear-gradient(180deg,rgba(255,0,0,0.7),rgba(255,140,0,0.7));
}
.header__1{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header__logo{
    display: flex;
    align-items: center;
}
.header__logo-link-img{
    width: 150px;
    height: 100px;
    margin-top: 5px;
}

.header__span1,.header__span2{
    font-size: 32px;
    margin-left: 16px;
    font-weight: 400;
    font-family: 'Style Script';
    
}
.header__span1{
    margin-bottom:24px;
}
.header__span2{
    margin-left:110px;
}
.header__span{
    display:flex;
    flex-direction: column;
    margin-left: 244px;
    margin-top: 12px;

}
.header__help{
    
}

.header__help:hover{
    
}

.header__help-link{
    font-size: 16px;
    text-decoration: none;
    color: #fff;
}

.header__help-link:hover{
    cursor: pointer;
    color: black;
}

.content{
    background-color: #f5f5f5;
}


.content_login{
    width: 50%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.content_login-header{
    font-size: 24px;
    font-weight: 300;
}
.content_login-content{
    display: flex;
    flex-direction: column;
}
.content{
    display: flex;
    justify-content: center;
}
.auth-form{
    width: 500px;
    background-color: var(--white-color);
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid #ccc;
    padding: 32px 32px;
    margin: 32px 0;
    
}

.auth-form__container{
    padding: 0 32px;
}

.auth-form__header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 12px;
    margin-top: 10px;
}

.auth-form__heading{
    font-size: 2.2rem;
    font-weight: 400;
    color: var(--text-color);
}

.auth-form__switch-btn{
    color: var(--primary-color);
    font-size: 1.6rem;
    cursor: pointer;
}


.auth-form__input{
    width: 100%;
    height: 46px;
    margin-top: 16px;
    padding: 0 12px;
    font-size: 1.4rem;
    border: 1px solid var(--border-color);
    border-radius: 2px;
    outline: none;
}

.auth-form__input:focus{
    border-color:#888;
}

.auth-form__aside{
    margin-top: 18px;
}

.auth-form__policy-text{
    font-size: 1.2rem;
    line-height: 1.6rem;
    text-align: center;
    padding: 0 12px;
}

.auth-form__text-link{
    text-decoration: none;
    color: var(--primary-color);
}

.auth-form__controls{
    display: flex;
    justify-content:flex-end;
    padding-top:36px ;

}
.auth-form__controls a{
    text-decoration: none;

}

.auth-form__control-back{
    margin-right: 8px;
}

.auth-form__socials{
    background-color: #f5f5f5;
    padding: 16px 36px;
    display: flex;
    margin-top: 20px;
    margin-right: -4px;
    justify-content: space-between;
}

.auth-form__socials-icon{
    font-size: 2.2rem;
    padding-left: 12px;
}

.auth-form__socials--facebook{
    background-color: #1877f2;
    color: white;
    width: 180px;
}

.auth-form__socials--google{
    background-color: #4285f4;
    color: white;
    width: 180px;
}

.auth-form__socials-title{
    margin: 0 36px;
}

.auth-form__help{
    display: flex;
    justify-content: flex-end;
}

.auth-form__help-link{
    text-decoration: none; 
    font-size: 1.4rem;
    color: #939393;
}

.auth-form__help-separate{
    display: block;
    border-left:1px solid ;
    border-color: var(--border-color);
    height: 20px;
    margin: 0px 16px 1px;
}

.auth-form__help-forgot{
    color: var(--primary-color);
}
.auth-form__help-forgot:hover{
    opacity: 0.8;
}
.btn{
    min-width: 124px;
    height: 34px;
    text-decoration: none;
    border: none;
    border-radius: 2px;
    font-size: 1.4rem;
    padding: 0;
    cursor: pointer;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}

.btn.auth-form__control-back:hover{
    background-color: rgba(0,0, 0, 0.1);
   
}

.btn.btn--primary{
    background-color: var(--primary-color);
    margin-left: 8px;
}
.btn:hover{
    opacity: 0.9;
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


.content__head{
    font-size: 32px;
    text-align: center;
    margin-bottom: 8px;
}
.list1{
    display: flex;
    margin-top: 0px;
    margin-left: 75px;
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
    </style>
</head>
<body>
    <header class="header">
    <ul class="list1">
            <li class="item_list1">
                <a href="?task=viewPhong2" class="item_list1-link">Trang chủ</a>
            </li>
            <li class="item_list1">
                <a href="./views/VeChungToi.php" class="item_list1-link">Về chúng tôi</a>
            </li>
            <li class="item_list1">
                <a href="http://www.tnu.edu.vn/" class="item_list1-link">Tin tức- Sự kiện</a>
            </li>
            
            <li class="item_list1">
                <a href="" class="item_list1-link">Hướng dẫn</a>
            </li>
        </ul>
        <div class="grid header__1">
            <div class="header__logo"> 
                <a href="?task=viewPhong2" class="header__logo-link">
                    <img class="header__logo-link-img" src="./views/img/logo 01_u.png" alt="">
                </a>
                
                <div class="header__span" >

                    <span class="header__span1" > Phòng trọ không chỉ để ở,</span>
                    <span class="header__span2" > Phòng trọ còn là Motel... </span>
                </div>

            </div>
            <div class="header__help">
                <a href="" class="header__help-link">Cần trợ giúp ?</a> 
            </div>
        </div>
    </header>
    <div class="content">
        <div class="auth-form"> 
        <form action="?task=dangnhap" method="POST" enctype="multipart/form-data">
            <div class="auth-form__container">
                <h3 class="content__head">
                    ĐĂNG NHẬP
                </h3>
                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name = "email" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name = "matkhau" placeholder="Mật khẩu của bạn">
                    </div>
                </div>
                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu ?</a>
                    </div>
                </div>

                <div class="auth-form__controls">
                    <button name = "submit"class="btn btn--primary">ĐĂNG NHẬP</button>
                    <a href="?task=dangky">
                        <button class="btn btn--primary">ĐĂNG KÍ</button>
                        
                    </a>

                </div>
            </div>
            </form>

            <div class="auth-form__socials">
                <a href="" class=" auth-form__socials--facebook btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                    <span class="auth-form__socials-title">
                        Facebook
                    </span> 
                </a>
                <a href="" class=" auth-form__socials--google btn  btn--with-icon">
                    <i class="auth-form__socials-icon fab fa-google"></i>
                    <span class="auth-form__socials-title">
                         Google
                    </span>
                </a>
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
</div> 
    
</body>
</html>