


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="icon" href="./views/img/logo05.png" type="image/x-icon">
    <title>Tìm Trọ TNU</title>
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
    padding-top: 12px;
    background-color: #f5f5f5;
}

.home-product-list-item{
    margin-top: 20px;
}

.home-product-item{
    list-style: none;
    text-decoration: none;
    background-color: #fff;
    display: block;
}

.home-product-item:hover{
    transform: translateY(4px);
}

.home-product-item__img{
    /* padding-top: 100%;
    background-repeat: no-repeat;
    background-size: contain;
    background-position:top center ;
    margin: 4px;
     */
     padding: 0;
}

.home-product-item__img img{
    width:280px;
    height: 250px;
    background-size: contain;

}

.home-product-item__price{
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--text-color);
    margin-top: 10px ;
    line-height: 1.8rem;
    overflow: hidden;
    word-wrap: break-word;
    display: block;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    margin-left: 8px;
}

.home-product-item__area{
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--text-color);
    margin-top: 10px ;
    line-height: 1.8rem;
    overflow: hidden;
    word-wrap: break-word;
    display: block;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    
    margin-left: 8px;

}

.home-product-item__address{
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--text-color);
    line-height: 1.8rem;
    overflow: hidden;
    word-wrap: break-word;
    display: block;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    margin-top: 10px;
    margin-left: 8px;
    padding-bottom: 8px;
}

.home-product__pagination{
    margin: 48px 0 32px;
    padding-bottom: 36px;
}

.pagination{
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
}

.pagination-item--active .pagination-item__link{
    background-color: var(--primary-color);
    color: #fff;

}

.pagination-item--active .pagination-item__link:hover{
    opacity: 0.8;
}

.pagination-item{
    margin: 0  12px;
}

.pagination-item__link{
    display: block;
    text-align: center;
    line-height: 30px;
    text-decoration: none;
    font-size: 2rem;
    font-weight: 300;
    color: #a5a5a5;
    min-width:40px;
    height: 30px;
    border-radius: 2px;
}


.footer{
    margin: 32px 0 ;
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
            <?php if(isset($_SESSION['id_user'])) {?>
               <ul class="list1">
                   <li class="item_list1">
                       <a href="?task=viewPhong" class="item_list1-link">Trang chủ</a>
                   </li>
                   <li class="item_list1">
                        <a href="./views/VeChungToi.php" class="item_list1-link">Về chúng tôi</a>
                    </li>
                    <li class="item_list1">
                        <a href="http://www.tnu.edu.vn/" class="item_list1-link">Tin tức- Sự kiện</a>
                    </li>
                    <li class="item_list1">
                        <a href="?task=show_form" class="item_list1-link" name="dangtin">Đăng tin</a>
                    </li>
                    <li class="item_list1">
                        <a href="./views/HuongDan.php" class="item_list1-link">Hướng dẫn</a>
                    </li>
               </ul>
              <?php } else{?>
                <ul class="list1">
                   <li class="item_list1">
                       <a href="?task=viewPhong" class="item_list1-link">Trang chủ</a>
                   </li>
                   <li class="item_list1">
                        <a href="./views/VeChungToi.php" class="item_list1-link">Về chúng tôi</a>
                    </li>
                    <li class="item_list1">
                        <a href="http://www.tnu.edu.vn/" class="item_list1-link">Tin tức- Sự kiện</a>
                    </li>
                    
                    <li class="item_list1">
                        <a href="./views/HuongDan.php" class="item_list1-link">Hướng dẫn</a>
                    </li>
               </ul>
                <?php }?>
               
                
               <ul class="list2">
            
                <li class="item_list2">
                     <a href="?task=dangky" class="item_list2-link">Đăng kí</a>
                 </li>
                 <li class="item_list2">
                     <a href="?task=show_dangnhap" class="item_list2-link">Đăng nhập</a>
                 </li>

                </ul>
               
           </div>
        
           <form action="?task=timkiem" method="post" enctype="multipart/form-data">
           <div class="header-search">
               <div class="header__logo">
                   <a href="" class="header__logo-link">
                       <img class="header__logo-link-img" src="./views/img/logo 01_u.png" alt="">
                   </a>
               </div>
                <div class="search">
                    <input name="QUAN_HUYEN" type="text" placeholder="Tìm kiếm" class="search__input"></input>
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
                <button type="submit" class="Timkiem">Tìm Kiếm</button>
            </div>

            </form>
           
       </div>
   </div>

   <div class="content">
       <div class="grid ">
           <div class="row home-product-list-item">
                <?php foreach ($data as $row ): ?>
                <div class="col-2">
                    <a href="" class="home-product-item">
                        <div class="home-product-item__img" ><a href="?task=viewChitietPhong&id_phong=<?php echo $row['id_phong']?>"><img src="<?php echo $row['ANH1']?>"></a></div>
                        <span class='home-product-item__price'>GIÁ: <?php echo $row['GIA_PHONG']?></span>
                        <span class='home-product-item__area'>DIỆN TÍCH: <?php echo $row['DIENTICH']?></span>
                        <span class='home-product-item__address'>ĐỊA CHỈ: <?php echo $row['TINH_TP']?>, <?php echo $row['QUAN_HUYEN']?>,<?php echo $row['XA_PHUONG']?>,<?php echo $row['SONHA']?></span>
                    </a>    
                </div>
                <?php endforeach; ?>  
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
                    <div class="footer_connection">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3710.0278748467103!2d105.8062245!3d21.584834999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1637075075722!5m2!1svi!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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