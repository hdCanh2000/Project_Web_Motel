<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về chúng tôi</title>
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

  
    .content__nhom{
        margin: 32px 0 32px 70px;
    }
    .content__nhom{
        display: flex;
        flex-direction:column;
        align-items: center;
    }
    .header__logo-nhom-img{
        margin-bottom: 16px;
        width: 70%;
    }
    .content__nhom-h3{
        font-size:25px;
        transform:  translateX(-15%);
    }
    .content__info-img{
        width: 70%;
    }
    .content__info-item{
        display: flex;
        flex-direction:column;
        width: 350px;
        height:350px;
        align-items:center;
    }
    
    .content__info-list1{
        display: flex;
        justify-content: space-between;
       
    }
    .content__info-name{
        font-size:23px;
        margin-top: 16px;
    }
    .content__info-list2{
        display: flex;
        justify-content: space-evenly;
    }
    .footer__span{
        text-align: center;
        display:block;
        margin-bottom:16px;
    }
    </style>

</head>
<body>
    <div class="content">
        <div class="content__nhom">
            <a href="./views/index.php" class="header__nhom-link">
                <img class="header__logo-nhom-img" src="../views/img/logo 01_u.png" alt="">
            </a>
            <h3 class="content__nhom-h3">Thành viên nhóm 6 - CNTTK17N - ICTU</h3>
        </div>
        <div class="grid">
            <div class="content__info-list1">
                <div class=" content__info-item">
                    <img src="../views/img/logo02.png" alt="" class="content__info-img">
                    <span class="content__info-name">Hoàng Đức Cảnh</span>
                </div>
                <div class=" content__info-item">
                    <img src="../views/img/thao.jpg" alt="" class="content__info-img">
                    <span class="content__info-name">Nguyễn Phương Thảo</span>
                </div>
                <div class=" content__info-item">
                    <img src="../views/img/superman-69787.jpg" alt="" class="content__info-img">
                    <span class="content__info-name">Nguyễn Chí Thanh</span>
                </div>
            </div>
            <div class="content__info-list2">
                <div class=" content__info-item">
                    <img src="../views/img/logo02.png" alt="" class="content__info-img">
                    <span class="content__info-name">Hoàng Thị Thảo</span>
                </div>
                <div class=" content__info-item">
                    <img src="../views/img/logo02.png" alt="" class="content__info-img">
                    <span class="content__info-name">Nguyễn Quang Nam</span>
                </div>
                
            </div>
        </div>
    </div>
    <footer class="footer">
        <span class="footer__span">Copyright 2021 - Bản quyền thuộc về Nhóm 6 - Lớp CNTTK17n</span>
    </footer>
</body>
</html>