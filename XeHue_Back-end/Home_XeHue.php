<?php 
    include('connect.php');
    //update();
    set_book_car();
?>
<?php $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style_Home.css">
    <title>XeHue</title>
</head>
    <style>
 /* Thuộc tính chung */
*{
    box-sizing: border-box;
}
h2{
    color: blue;
}
font{
    color: red;
    text-transform: uppercase;
    font-size: 20px;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #fff;
    min-height: 411px;
}
.container{
    margin: 0 auto;
    padding: 20px 20px;
}
.clear{
    clear: both;
}

/* ----------------------------------------------------- */

/* Hotline - Đăng nhập - Đăng ký (Header) */
.hotline-logup-login{
    background-color: rgb(35, 35, 241);
    padding: 8px 5px;
    margin: -8px -8px;
}
.header-container{
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: baseline;
    justify-content: flex-end;
}
/* Hotline */
.header-container a{
    text-decoration: none;
}
.fa-phone{
    display: none;
}
.header-container a span{
    font-size: 20px;
    margin: 0 20px;
    color: red;
    font-weight: 700;
    text-shadow:#fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px;
}
/* Đăng nhập - Đăng ký */
#logup{
    color: white;
    margin: -5px 5px;
    font-size: 15px;
}
#login{
    color:white;
    margin: 0px 5px;
    border-left: 1px solid white;
    padding: 5px 5px;
}
#logup img, #login img{
    width: auto;
    height: 30px;
    margin: -8px 5px;
}
@media (min-width: 0px) and (max-width: 572px){
    .header-container a span{
        display: none;
    }
    .fa-phone{
        display: block;
        color: red;
        text-shadow:#fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px, #fff 0 0 5px;
        margin: 5px 5px;
    }
}

/* Logo - Thanh navbar */
.logo-navbar{
    background-color: #5B7FEC;
    margin: 5px -8px;
    padding: 10px 0;
    height: 81.6px;
    line-height: 80px;
}
.logo-navbar img{
    position: relative;
    top: -60px;
    margin-left: 10%;
}
.navbar-list{
    display: block;
    float: right;
    margin-right: 15%;
    margin-top: -30px;
}
.navbar-list li{
    list-style: none;
    display: inline-block;
    margin: 0px;
    padding: 0 15px;
    cursor: pointer;
}
.navbar-list li a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 20px;
}
.home{
    background-color: #f5a720;
    height: 81.6px;
    display: block;
    
}
.navbar-list li:hover{
    background-color: #f5a720;
}
#btn-navbar, .button-navbar{
    display: none;
}
@media (min-width: 1200px) and (max-width: 1252px){
    .logo-navbar img{
        position: relative;
        top: -60px;
        margin-left: 5%;
    }
    .navbar-list{
        display: block;
        float: right;
        margin-right: 5%;
    }
    #btn-navbar{
        display: none;
    }
}
@media screen and (min-width: 986px) and (max-width: 1199px){
    .logo-navbar img {
        position: relative;
        top: -60px;
        margin-left: 10%;
        width: 150px;
    }
    .navbar-list{
        display: block;
        float: right;
        margin-right: 10%;
    }
    .navbar-list li{
        list-style: none;
        display: inline-block;
        margin: 0px;
        padding: 0 15px;
        cursor: pointer;
    }
    .navbar-list li a{
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
    }
    #btn-navbar, .button-navbar{
        display: none;
    }
}
@media screen and (min-width: 788px) and (max-width: 985px){
    .logo-navbar img {
        position: relative;
        top: -60px;
        margin-left: 0%;
        width: 150px;
    }
    .navbar-list{
        display: block;
        float: right;
        margin-right: -10px;
    }
    .navbar-list li{
        list-style: none;
        display: inline-block;
        margin: 0px;
        padding: 0 15px;
        cursor: pointer;
    }
    .navbar-list li a{
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
    }
    #btn-navbar, .button-navbar{
        display: none;
    }
}
@media screen and (min-width: 0px) and (max-width: 788px){
    .logo-navbar{
        background-color: #5B7FEC;
        margin: 5px -8px;
        padding: 0px 0;
        height: auto;
        line-height: 80px;
        float: left;
        width: 105%;
        padding-right: 10px;
        padding-left: -5px;
        clear: both;
    }
    .logo-navbar img{
        position: inherit;;
        top: -20px;
        margin-left: 10%;
        float: left;
        height: 65px;
    }
    .navbar-list{
        display: none;
        margin-top: 45px;
        padding: 5px 0px;
        margin-right: -5%;
        width: 105%;
    }
    .navbar-list li{
        display: block;
        list-style: none;
        margin: 0 -5%;
        padding: 0 15px;
        cursor: pointer;
    }
    .navbar-list li a{
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
        width: 105%;
        margin-left: 45px;
    }
    .button-navbar{
        float: right;
        margin: 0 20px;
        display: inline-block;
    }
    #btn-navbar{
        display: block;
        margin-right: -10px;
        height: 30px;
        width: 50px;
        background-color: #5B7FEC;
        border: 2px solid white;
        padding: 0px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    #btn-navbar:hover{
        background-color: #f5a720;
    }
    .fa-bars{
        color: white;
    }
}

/* ----------------------------------------------------- */

/* (Ảnh sologan -  Form đặt xe) - Ảnh quảng bá */
.imgsologan-form-img{
    display: flex;
    margin: 0 120px;
    justify-content: center;
}
/* Ảnh sologan - form đặt xe */
.imgsologan-form{
    width: 563px;
}
.imgsologan img{
    height: 120px;
}
/* form đặt xe */
.form-bookcar{
    background-color: #efefef;
    font-weight: 700;
}
.form-bookcar h2{
    text-align: center;
    font-size: 25px;
    text-transform: uppercase;
    
}
.title-bookcar{
    text-align: center;
    background-color: #275fff;
    color: white;
    padding: 10px 15px;
    position: relative;
    border-radius: 0 0 10px 10px;
}
.title-bookcar::before{
    content: "";
    position: absolute;
    top: 0px;
    left: -5px;
    border: 4px solid #20346d;
    border-top-color: transparent;
    border-left-color: transparent;
}
.title-bookcar::after{
    content: "";
    position: absolute;
    top: 0px;
    right: -5px;
    border: 4px solid #20346d;
    border-top-color: transparent;
    border-right-color: transparent;
}
/* Hành trình */
.way{
    display: flex;
    flex-direction: column;
}
#way-select{
    height: 30px;
    border: none;
    outline:none;
}
/* Số điện thoại - Họ tên */
.phone-name{
    display: flex;
    margin: 10px 0px;
}
#phone-input, #name-input{
    width: 240px;
    height: 25px;
    border: none;
    outline:none;
}

/* Ngày đi - Giờ đi */
.day-time{
    display: flex;
}
#day-input{
    width: 180px;
    border: none;
    outline:none;
}
.day{
    display: flex;
    flex-direction: column;
}
.time{
    display: flex;
    flex-direction: column;
    margin: 0 40px;
}
#day-input, #time-input{
    width: 240px;
    height: 25px;
    border: none;
    outline:none;
}
/* Nơi đón - Nơi đến */
.pickup-arrive{
    display: flex;
    margin: 15px 0px;
}
.place-pickup{
    display: flex;
    flex-direction: column;
}
.place-arrive{
    display: flex;
    flex-direction: column;
    margin: 0 40px;
}
#pickup-input, #arrive-input{
    width: 240px;
    height: 25px;
    border: none;
    outline:none;
}
/* Thuê xe - Người lớn - Trẻ em */
.rent-adult-children{
    display: flex;
}
#rent-input{
    transform: scale(2);
    border: none;
    outline:none;
}
#rent-select{
    margin: 0 20px;
    width: 200px;
    height: 25px;
    border: none;
    outline:none;
}
.rent-content{
    display: flex;
    margin: 5px 0;
}
#adult-input, #children-input{
    width: 100px;
    height: 25px;
    border: none;
    outline:none;
}
.adult{
    margin-left: 20px;
}
.children{
    margin: 5px 0px;
}
/* Nút đặt xe */
.btn-book-car{
    display: flex;
    justify-content: center;
    margin: 20px 0px;
}
#book-button{
    font-size: 20px;
    font-weight: 600;
    color: white;
    text-transform: uppercase;
    border: 2px solid #f29a00;
    padding: 10px 20px;
    border-radius: 50px;
    background-color: #f29a00;
}
#book-button:hover{
    background-color: #be7b07;
    cursor: pointer;
    font-weight: bold;
}
/* Ảnh quảng bá */
.img-adds img{
    margin: 0 20px;
    height: 622px;
}
@media (min-width: 1150px) and (max-width: 1252px){
    .imgsologan-form-img {
        display: flex;
        margin: 0 60px;
    }
    .imgsologan-form {
        width: 500px;
    }
    .imgsologan-form {
        width: 500px;
    }
    .imgsologan img {
        height: 120px;
        width: 500px;
    }
    .img-adds img {
        margin: 0 20px;
        height: 630px;
        width: 500px;
    }
    #phone-input, #name-input {
        width: 210px;
        height: 25px;
        border: none;
        outline: none;
    }
    #day-input, #time-input {
        width: 210px;
        height: 25px;
        border: none;
        outline: none;
    }
    #pickup-input, #arrive-input {
        width: 210px;
        height: 25px;
        border: none;
        outline: none;
    }
    #rent-select {
        margin: 0 20px;
        width: 170px;
        height: 25px;
        border: none;
        outline: none;
    }
    #adult-input, #children-input {
        width: 100px;
        border: none;
        height: 25px;
        outline: none;
    }

}
@media screen and (min-width: 985px) and (max-width: 1149px){
    .imgsologan-form-img {
        display: flex;
        margin: 0 40px;
        align-content: center;
    }
    .imgsologan-form {
        width: 455px;
    }
    .imgsologan-form {
        width: 455px;
    }
    .imgsologan img {
        height: 120px;
        width: 455px;
    }
    .img-adds img {
        margin: 0 20px;
        height: 625px;
        width: 400px;
    }
    #phone-input, #name-input, #day-input, #time-input, #pickup-input, #arrive-input{
        width: 188px;
        height: 25px;
        border: none;
        outline: none;
    }
    #rent-select {
    margin: 0 5px;
    width: 162px;
    height: 25px;
    border: none;
    outline: none;
    }
    #rent-select {
        margin: 0 5px;
        width: 162px;
        height: 25px;
        border: none;
        outline: none;
    }
    .adult {
        margin-left: 34px;
    }
    #adult-input, #children-input {
        width: 85px;
        border: none;
        outline: none;
    }

}
@media screen and (min-width: 788px) and (max-width: 984px){
    .imgsologan-form-img {
        display: flex;
        flex-direction: column;
        margin: 0px auto;
        width: 555px;
        align-items: center;
    }
    .img-adds img {
        margin: 20px 0px;
        height: 622px;
        width: 563px;
    }
    .phone-name, .day-time, .pickup-arrive {
        display: flex;
        margin: 10px 0px;
        flex-direction: column;
    }
    .phone, .name, .day,  .place-pickup{
        display: flex;
        flex-direction: column;
    }
    .time, .place-arrive{
        margin: 10px 0px;
    }
    #way-select, #phone-input, #name-input, #day-input, #time-input, #pickup-input, #arrive-input{
        width: 523px;
    }
    .rent-adult-children {
        display: flex;
        flex-direction: column;
    }
    .rent-content {
        display: flex;
        margin: 5px 0px;
        width: 540px;
    }
    #rent-select {
        margin-left: 10px;
        width: 523px;
        height: 25px;
        border: none;
        outline: none;
    }
    .adult {
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
    }
    #adult-input, #children-input{
        margin: 5px 0px;
        width: 523px;
        height: 25px;
    }
    .children{
        display: flex;
        flex-direction: column;
    }
    
}
@media screen and (min-width: 630px) and (max-width: 788px){
    .imgsologan-form-img {
        display: flex;
        flex-direction: column;
        margin: 0px auto;
        width: 555px;
    }
    .imgsologan img {
        height: 80px;
        min-width: 100%;
    }
    .img-adds img {
        margin: 20px 0px;
        height: 622px;
        width: 563px;
    }
    .phone-name, .day-time, .pickup-arrive {
        display: flex;
        margin: 10px 0px;
        flex-direction: column;
    }
    .phone, .name, .day,  .place-pickup{
        display: flex;
        flex-direction: column;
    }
    .time, .place-arrive{
        margin: 10px 0px;
    }
    #way-select, #phone-input, #name-input, #day-input, #time-input, #pickup-input, #arrive-input{
        width: 523px;
    }
    .rent-adult-children {
        display: flex;
        flex-direction: column;
    }
    .rent-content {
        display: flex;
        margin: 5px 0px;
        width: 540px;
    }
    #rent-select {
        margin-left: 10px;
        width: 523px;
        height: 25px;
        border: none;
        outline: none;
    }
    .adult {
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
    }
    #adult-input, #children-input{
        margin: 5px 0px;
        width: 523px;
        height: 25px;
    }
    .children{
        display: flex;
        flex-direction: column;
    }
}
@media screen and (min-width: 440px) and (max-width: 629px){
    .imgsologan-form-img {
        display: flex;
        flex-direction: column;
        margin: 0px auto;
        width: 550px;
        max-width: 100%;
        align-items: center;
    }
    .imgsologan img {
        height: 80px;
        min-width: 100%;
    }
    .imgsologan-form {
        width: 400px;
        max-height: 100%;
    }
    .img-adds img {
        margin: 20px 0px;
        height: 622px;
        width: 400px;
        max-width: 100%;
    }
    .phone-name, .day-time, .pickup-arrive {
        display: flex;
        margin: 10px 0px;
        flex-direction: column;
    }
    .phone, .name, .day,  .place-pickup{
        display: flex;
        flex-direction: column;
    }
    .time, .place-arrive{
        margin: 10px 0px;
    }
    #way-select, #phone-input, #name-input, #day-input, #time-input, #pickup-input, #arrive-input{
        width: 360px;
    }
    #day-input, #time-input {
        width: 360px;
        height: 25px;
        border: none;
        outline: none;
    }
    .rent-adult-children {
        display: flex;
        flex-direction: column;
    }
    .rent-content {
        display: flex;
        margin: 5px 0px;
        width: 540px;
    }
    #rent-select {
        margin-left: 10px;
        width: 330px;
        height: 25px;
        border: none;
        outline: none;
    }
    .adult {
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
    }
    #adult-input, #children-input{
        margin: 5px 0px;
        width: 360px;
        height: 25px;
    }
    .children{
        display: flex;
        flex-direction: column;
    }
}
@media screen and (min-width: 0px) and (max-width: 439px){
    .imgsologan-form-img {
        display: flex;
        flex-direction: column;
        margin: 0px auto;
        width: 550px;
        max-width: 100%;
        align-items: center;
    }
    .imgsologan img {
        height: 40px;
        min-width: 100%;
    }
    .imgsologan-form {
        width: 230px;
        max-height: 100%;
    }
    .img-adds img {
        margin: 20px 0px;
        height: 622px;
        width: 230px;
        /* max-width: 100%; */
    }
    .phone-name, .day-time, .pickup-arrive {
        display: flex;
        margin: 10px 0px;
        flex-direction: column;
    }
    .phone, .name, .day,  .place-pickup{
        display: flex;
        flex-direction: column;
    }
    .time, .place-arrive{
        margin: 10px 0px;
    }
    #way-select, #phone-input, #name-input, #day-input, #time-input, #pickup-input, #arrive-input{
        width: 200px;
    }
    .rent-adult-children {
        display: flex;
        flex-direction: column;
    }
    .rent-content {
        display: flex;
        margin: 5px 0px;
        width: 540px;
    }
    #rent-select {
        margin-left: 10px;
        width: 170px;
        height: 25px;
        border: none;
        outline: none;
    }
    .adult {
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
    }
    #adult-input, #children-input {
        margin: 5px 0px;
        width: 200px;
        height: 25px;
    }
    .children{
        display: flex;
        flex-direction: column;
    }
}

/* -------------------------------------------------------------- */
/* Mục tiện ích */
.tool h2{
    text-align: center;
    text-transform: uppercase;
    font-size: 30px;
    font-weight: 600;
    padding: 20px 10px;
}
.tool span{
    text-transform: uppercase;
    color: #f29a00;   
    font-weight: 600;
    font-size: 30px;
}
.tool-img{
    display: flex;
    justify-content: center;
    height: 125px;
}
.img-commit{
    text-align: center;
    font-size: 15px;
    text-transform: uppercase;
    width: 265px;
}
.img-commit{
    background-color: #4d6fd6;
    margin: -25px 15px;
    color: white;
    font-size: 18px;
}
.img-four-commit{
    width: 130px;
}
#img-quality, #img-price{
    background-color: #6fabfd;
}

@media screen and (min-width: 260px) and (max-width: 1252px){
    .tool-img {
        display: flex;
        justify-content: center;
        height: auto;
        flex-wrap: wrap;
    }
    .img-commit {
        width: 225px;
        background-color: #4d6fd6;
        margin: 15px 5px;
        color: white;
        font-size: 16px;
        max-width: 100%;
    }
    .img-four-commit{
        width: 130px;
    }
    
}
/* ---------------------------------------------------------------- */
/* Mục tải xuống */
.download{
    margin: 50px 0;
}
.download h2{
    text-align: center;
    color: #f29a00;
    text-transform: uppercase;
    font-size: 30px;
    font-weight: 600;
}
.download-link{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.android-ios {
    border: 1px solid #f29a00;
    padding: 10px 15px;
    border-radius: 50px;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    font-size: 15px;
    color: black;
    text-decoration: none;
    font-weight: 600;
    width: 300px;
    margin: 10px 20px;
    text-align: center;
}
.android-ios:hover{
    box-shadow:  #be7b07 0 0 10px;
}
.android-ios > img{
    height: 45px;
    margin: 0 10px;
}
/* ----------------------------------------------------------------- */
/* Mục tin tức và sự kiện */
.news-event{
    text-align: center;
    background-color: #efefef;
    padding: 20px 20px;
    margin: 0 auto;
}
.news-event h2 a{
    text-decoration: none;
    text-transform: uppercase;
    font-size: 30px;
    color: #4d6fd6;
    font-weight: 600;
}
.news-event-content{
    color: #333;
    font-size: 20px;
}
/* ----------------------------------------------------------------- */
/* Các tuyến đường */
h2{
    text-align: center;
    text-transform: uppercase;
    font-size: 30px;
    font-weight: 600;
    color: #4d6fd6;
}
.way-popular{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 50px 20px;
}
.img-way{
    margin: 0 50px;
}
.img-move{
    height: 60px;
    margin: 50px 25px;
}
/* ----------------------------------------------------------------- */
/* Mục Hệ thống và nhà xe */
.system{
    text-align: center;
    background-color: #efefef;
    padding: 20px 20px;
    margin: 0 auto;
}
.system-content{
    text-align: center;
    color: #333;
    font-size: 20px;
}
/* ----------------------------------------------------------------- */
/* Liên hệ - Thông tin - Lượt truy cập - Liên kết (Footer) */
footer{
    float: left;
    width: 100%;
    height: 400px;
    background-color: #00264f;
    padding: 20px 0px;
    color: white;
}
/* Liên hệ */
.contact-content{
    float: left;
    width: 25%;
    font-size: 18px;
}
.img-contact{
    height: 75px;
    margin: -20px 15px;
}
.email{
    margin: 20px 0;
    font-size: 15px;
    color: #f29a00;
}
.address{
    font-size: 16px;
}
.tel{
    font-size: 16px;
    color: #f29a00;
}
.website{
    font-size: 17px;
    color: #f29a00;
}
/* Thông tin */
.information{
    float: left;
    width: 25%;
}
.information-content{
    margin-top: 55px;
}
.information h3{
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    margin-top: 20px;
    margin-left: 20px;
}
.list-information{
    margin-left: -15px;
}
.list-information li{
    list-style: none;
    padding: 5px 0;
    width: 132px;
}
@keyframes move{
    from{left: 0px;}
    to{left: 10px;}
}
.list-information li:hover{
    animation-name: move;
    animation-duration: 0.25s;
    position: relative;
    left: 10px;
}

.list-information li a{
    text-decoration: none;
    color: #f29a00;
    font-size: 18px;
}
.list-information li a:hover{
    color: #f8b43f;
}

.fa-angle-right{
    color: #f29a00;
    padding: 0 5px
}

/* Lượt truy cập */
.access{
    float: left;
    width: 10%;
    margin-top: -15px;
}
.access-content{
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
}
.numbers-online, .total-online{
    color: #f29a00;
    font-size: 30px;
}
/* Liên kết */
.link{
    float: left;
    width: 32%;
    margin-left: 60px;
}
.link-content{
    margin: -40px 31px;
}
.btn-top{
    border: 1px solid red;
    background-color: red;
    width: 50px;
    height: 50px;
    border-radius: 100px;
    cursor: pointer;
    position: relative;
    right: -100%;
    top: 10px;
}
.btn-top i{
    margin: 0px 13px;
    position: relative;
    top: 5px;
}
.fa-angle-up{
    color: white;
}
.link-content p {
    color: #4470a2;
    font-style: italic;
    line-height: 25px;
}
.email-register{
    display: flex;
    align-content: stretch;
    align-items: center;
}
#email-input{
    border-radius: 50px;
    height: 35px;
    width: 500px;
    outline: none;
}
.btn-register{
    color: white;
    border-radius: 50px;
    height: 40px;
    background-color: #f29a00;
    padding: 0 12px;
    cursor: pointer;
    border: none;
    font-size: 15px;
    position: relative;
    right: 25px;
    width: 165px;
}
.btn-register:hover{
    background-color: #744b06;
}
.link-social{
    display: flex;
    margin-left: -55px;
}
.link-social li{
    list-style: none;
    margin-left: 20px;
}
.fa-facebook, .fa-google, .fa-twitter{
    color: #4470a2;
}
.fa-facebook:hover, .fa-google:hover, .fa-twitter:hover{
    color: #f29a00;
}
.fast-order{
    display: flex;
    align-content: stretch;
    justify-content: flex-end;
    border: 1px solid #275fff;
    width: 75px;
    height: 75px;
    text-align: center;
    border-radius: 100px;
    margin: -60px 200px;
    background-color: #275fff;
    position: fixed;
    bottom: 30%;
    right: -12%;
    cursor: pointer;
}
.fast-order p{
    font-style: normal;
    color: white;
    border: 1px solid;
    border-radius: 100px;
    width: 60px;
    height: 60px;
    font-size: 12px;
    margin-top: 6px;
    margin-right: 6px;
}
.copyright{
    font-size: 18px;
    color: #4d6fd6;
}
.support-online {
    position: fixed;
    bottom: 5%;
    right: 1%;
}
@keyframes zoom{
    0%{transform:scale(.5);opacity:0}50%{opacity:1}to{opacity:0;transform:scale(1)}
}
@keyframes lucidgenzalo{
    0%{transform:rotate(-25deg)}50%{transform:rotate(25deg)}
}
.jscroll-to-top{
    bottom:100px
}
.fcta-zalo-ben-trong-nut svg path{
    fill:#fff
}

.fcta-zalo-nen-nut, div.fcta-zalo-mess{
    box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16)
}
.fcta-zalo-vi-tri-nut {
    position: fixed;
    bottom: 75px;
    left: 140px;
    z-index: 999;
}
.fcta-zalo-nen-nut {
    width: 50px;
    height: 50px;
    text-align: center;
    color: #fff;
    background: #0068ff;
    border-radius: 50%;
    position: fixed;
    left: 9%;
}
.fcta-zalo-nen-nut::after,.fcta-zalo-nen-nut::before{
    content:"";
    position:absolute;
    border:1px solid #0068ff;
    background:#0068ff80;
    z-index:-1;
    left:-20px;
    right:-20px;
    top:-20px;
    bottom:-20px;
    border-radius:50%;
    animation:zoom 1.9s linear infinite
}
.fcta-zalo-nen-nut::after{
    animation-delay:.4s
}
.fcta-zalo-ben-trong-nut,.fcta-zalo-ben-trong-nut i{
    transition:all 1s
}
.fcta-zalo-ben-trong-nut{
    position:absolute;text-align:center;width:60%;height:60%;left:10px;bottom:25px;line-height:70px;font-size:25px;opacity:1
}
.fcta-zalo-ben-trong-nut i{
    animation:lucidgenzalo 1s linear infinite
}
.fcta-zalo-nen-nut:hover .fcta-zalo-ben-trong-nut,.fcta-zalo-text{
    opacity:0
}
.fcta-zalo-nen-nut:hover i{
    transform:scale(.5);transition:all .5s ease-in
}
.fcta-zalo-text a{
    text-decoration:none;
    color:#fff
}
.fcta-zalo-text{position:absolute;top:6px;text-transform:uppercase;font-size:12px;font-weight:700;transform:scaleX(-1);transition:all .5s;line-height:1.5}.fcta-zalo-nen-nut:hover .fcta-zalo-text{transform:scaleX(1);opacity:1}div.fcta-zalo-mess{position:fixed;bottom:29px;right:58px;z-index:99;background:#fff;padding:7px 25px 7px 15px;color:#0068ff;border-radius:50px 0 0 50px;font-weight:700;font-size:15px}.fcta-zalo-mess span{color:#0068ff!important}
                        span#fcta-zalo-tracking{font-family:Roboto;line-height:1.5}.fcta-zalo-text{font-family:Roboto}
div.fcta-zalo-mess {
    position: fixed;
    bottom: 30px;
    right: 58px;
    z-index: 99;
    background: #fff;
    padding: 7px 25px 7px 15px;
    color: #0068ff;
    border-radius: 50px 0 0 50px;
    font-weight: 700;
    font-size: 16px;
    margin: 0 10px;
    left: 1%;
    width: 130px;
}
@media screen and (min-width: 901px) and (max-width: 1252px){
    .fast-order {
        display: flex;
        align-content: stretch;
        justify-content: flex-end;
        border: 1px solid #275fff;
        width: 75px;
        height: 75px;
        text-align: center;
        border-radius: 100px;
        margin: -60px 200px;
        background-color: #275fff;
        position: fixed;
        bottom: 30%;
        right: -15%;
        cursor: pointer;
    }
    #email-input {
        border-radius: 50px;
        height: 35px;
        width: 300px;
        outline: none;
    }.fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 75px;
        left: 140px;
        z-index: 999;
    }
    .fcta-zalo-nen-nut {
        width: 50px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: fixed;
        left: 10%;
    }
}

@media screen and (min-width: 823px) and (max-width: 900px) {
    footer {
        float: left;
        width: 100%;
        height: 420px;
        background-color: #00264f;
        padding: 20px 0px;
        color: white;
    }
    #email-input {
        border-radius: 50px;
        height: 35px;
        width: 300px;
        outline: none;
    }
    .btn-register {
        color: white;
        border-radius: 50px;
        height: 45px;
        background-color: #f29a00;
        padding: 0px 26px;
        cursor: pointer;
        border: none;
        font-size: 12px;
        position: relative;
        right: 25px;
        width: 221px;
    }
    .fast-order {
        display: flex;
        align-content: stretch;
        justify-content: flex-end;
        border: 1px solid #275fff;
        width: 75px;
        height: 75px;
        text-align: center;
        border-radius: 100px;
        margin: -60px 200px;
        background-color: #275fff;
        position: fixed;
        bottom: 25%;
        right: -20%;
        cursor: pointer;
    }
    .support-online {
        position: fixed;
        bottom: 1%;
        right: 3%;
    }
    .fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 75px;
        left: 140px;
        z-index: 999;
    }
    .fcta-zalo-nen-nut {
        width: 50px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: fixed;
        left: 10%;
    }
}
@media screen and (min-width: 600px) and (max-width: 822px) {
    footer {
        float: left;
        width: 100%;
        height: 600px;
        background-color: #00264f;
        padding: 20px 0px;
        color: white;
    }
    .contact-content {
        float: left;
        width: 33.33%;
        font-size: 18px;
    }
    .information {
        float: left;
        width: 33.33%;
    }
    .access {
        float: left;
        width: 33.33%;
        margin-top: -15px;
    }
    .link {
        float: left;
        width: 100%;
    }
    .copyright {
        font-size: 18px;
        color: #4d6fd6;
        margin-top: 40px;
        text-align: center;
    }
    .btn-top {
        border: 1px solid red;
        background-color: red;
        width: 50px;
        height: 50px;
        border-radius: 100px;
        cursor: pointer;
        position: relative;
        right: -85%;
        top: 10px;
    }
    .fast-order {
        display: flex;
        align-content: stretch;
        justify-content: flex-end;
        border: 1px solid #275fff;
        width: 75px;
        height: 75px;
        text-align: center;
        border-radius: 100px;
        margin: -60px 200px;
        background-color: #275fff;
        position: fixed;
        bottom: 25%;
        right: -24%;
        cursor: pointer;
    }
    .support-online {
        position: fixed;
        bottom: 1%;
        right: 3%;
    }
    .fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 72px;
        left: 140px;
        z-index: 999;
    }
    .fcta-zalo-nen-nut {
        width: 50px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: fixed;
        left: 20%;
    }
}
@media screen and (min-width: 400px) and (max-width: 599px) {
    footer {
        float: left;
        width: 100%;
        height: auto;
        background-color: #00264f;
        padding: 20px 0px;
        color: white;
    }
    .contact-information-link-access{
        display: flex;
        flex-direction: column;
    }
    .contact-content {
        font-size: 18px;
    }
    .information, .link{
        float: none;
        width: auto;
    }
    .access {
        margin-top: -15px;
    }
    .link-content {
        margin: -30px -65px;
    }
    .btn-top {
        border: 1px solid red;
        background-color: red;
        width: 50px;
        height: 50px;
        border-radius: 100px;
        cursor: pointer;
        position: relative;
        /* right: -95%; */
        right: -72%;
        top: 10px;
    }
    #email-input {
        border-radius: 50px;
        height: 35px;
        width: 220px;
        outline: none;
    }
    .btn-register {
        color: white;
        border-radius: 50px;
        height: 40px;
        background-color: #f29a00;
        padding: 0 12px;
        cursor: pointer;
        border: none;
        font-size: 15px;
        position: relative;
        right: 52px;
        width: 100px;
    }
    .fast-order {
        display: flex;
        align-content: stretch;
        justify-content: flex-end;
        border: 1px solid #275fff;
        width: 75px;
        height: 75px;
        text-align: center;
        border-radius: 100px;
        margin: -60px 200px;
        background-color: #275fff;
        position: fixed;
        bottom: 25%;
        right: -33%;
        cursor: pointer;
    }
    .support-online {
        position: fixed;
        bottom: 1%;
        right: 2%;
    }
    div.fcta-zalo-mess {
        position: fixed;
        bottom: 10px;
        right: 58px;
        z-index: 99;
        background: #fff;
        padding: 7px 25px 7px 15px;
        color: #0068ff;
        border-radius: 50px 0 0 50px;
        font-weight: 700;
        font-size: 18px;
    }
    .fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 58px;
        left: 140px;
        z-index: 999;
    }
    .fcta-zalo-nen-nut {
        width: 50px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: fixed;
        left: 30%;
    }
}
@media screen and (min-width: 150px) and (max-width: 399px) {
    footer {
        float: left;
        width: 100%;
        height: auto;
        background-color: #00264f;
        padding: 20px 0px;
        color: white;
    }
    .contact-information-link-access{
        display: flex;
        flex-direction: column;
    }
    .contact-content {
        font-size: 18px;
    }
    .information, .link{
        float: none;
        width: auto;
    }
    .access {
        margin-top: -15px;
    }
    .link-content {
        margin: -30px -65px;
    }
    .link-content p {
        color: #4470a2;
        font-style: italic;
        line-height: 25px;
        font-size: 10px;
    }
    .btn-top {
        border: 1px solid red;
        background-color: red;
        width: 50px;
        height: 50px;
        border-radius: 100px;
        cursor: pointer;
        position: relative;
        right: -72%;
        top: 10px;
    }
    #email-input {
        border-radius: 50px;
        height: 35px;
        width: 220px;
        outline: none;
    }
    .btn-register {
        color: white;
        border-radius: 50px;
        height: 40px;
        background-color: #f29a00;
        padding: 0 12px;
        cursor: pointer;
        border: none;
        font-size: 15px;
        position: relative;
        right: 52px;
        width: 100px;
    }
    .fast-order {
        display: flex;
        align-content: stretch;
        justify-content: flex-end;
        border: 1px solid #275fff;
        width: 75px;
        height: 75px;
        text-align: center;
        border-radius: 100px;
        margin: -60px 200px;
        background-color: #275fff;
        position: fixed;
        bottom: 25%;
        right: -48%;
        cursor: pointer;
    }
    .support-online {
        position: fixed;
        bottom: 1%;
        right: 2%;
    }
    .copyright {
        font-size: 15px;
        color: #4d6fd6;
    }
    div.fcta-zalo-mess {
        position: fixed;
        bottom: 10px;
        right: 58px;
        z-index: 99;
        background: #fff;
        padding: 7px 25px 7px 15px;
        color: #0068ff;
        border-radius: 50px 0 0 50px;
        font-weight: 700;
        font-size: 18px;
    }
    .fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 58px;
        left: 140px;
        z-index: 999;
    }
    .fcta-zalo-nen-nut {
        width: 50px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: fixed;
        left: 40%;
    }
    
}
    .drop{
        display: none;
        background-color: #333;
        height: auto;
        width: 190px;
        border-radius: 5px;
        max-width: 100%;
        position: absolute;
        padding: 10px;
    }
    .drop a{
        text-align: left;
        text-decoration: none;
        color: white;
        list-style: none;
        display: block;
        font-size: 16px;
        padding: 5px 0;
    }
    .drop a:hover{
        font-weight: 700;
        color: red;
    }
    .user img {
        text-align: center;
        margin: 24px 0 12px 0;
        width: 50px;
        border-radius: 50%;
        cursor: pointer;
        max-width: 100%;
        margin: -5px 0;
    }
    .title-user{
        color:white;
        margin: 0px 5px;
        border-left: 1px solid white;
        padding: 5px 5px;
        text-transform: uppercase;
        position: relative;
        top: -10px;
        pointer-events: none;
        cursor: default;
    } 
    </style>
<body>
    <!-- Hotline - Đăng nhập - Đăng ký (Header) -->
    <header class="hotline-logup-login">
        <div class="header-container">
            <a href="">
                <i class="fa fa-phone fa-2x"></i> <span class="hotline">HOTLINE: 0935 811 888</span>
            </a>
            <?php if(empty($_SESSION['user'])):?>
            <a href="login_XeHue.php" id="logup">
                <img src="https://xehue.vn/images/login.png" alt="">Đăng nhập
            </a>
            <a href="register_XeHue.php" id="login">
                <img src="https://xehue.vn/images/register.png" alt="">Đăng ký
            </a>
            <?php else:?>
                <div class="user">
                    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                    <div class="drop">
                        <a href="profile.php" target="_blank">Thông tin người dùng</a>
                        <a href="bookCar_XeHue.php" target="_blank">Thông tin đặt xe</a>
                        <a href="changePassword_XeHue.php" target="_blank">Đổi mật khẩu</a>
                        <a href="logout_XeHue.php">Đăng xuất</a>
                    </div>
                </div>
                <script>
                    $(".user").click(function(){
                        $(".drop").toggle(500);
                    })
                </script>
                <a class="title-user" href="profile.php" target="_blank"><?php echo $_SESSION['name'] ?></a>
            <?php endif;?>
        </div>
    </header>
    <!-- Logo - Thanh navbar -->
    <div class="logo-navbar">
        <div class="container">
            <a href="">
                <img src="https://xehue.vn/images/logo.png" alt="">
            </a>
            <div class="button-navbar">
                <button id="btn-navbar"><i class="fa fa-bars fa-2x"></i></button>
            </div>
            <ul class="navbar-list">
                <li class="home"><a href="/XeHue_Home/index.html">Trang chủ</a></li>
                <li><a href="/XeHue_Introduce/GioiThieu.html">Giới thiệu</a></li>
                <li><a href="/XeHue_Promotion/KhuyenMai.html">Khuyến mãi</a></li>
                <li><a href="/XeHue_News/TinTuc.html">Tin tức</a></li>
                <li><a href="/XeHue_Contact/LienHe.html">Liên hệ</a></li>
            </ul>
            
        </div>
    </div>

    <div class="container">
        <!-- (Ảnh sologan -  Form đặt xe) - Ảnh quảng bá -->
        <div class="imgsologan-form-img">
            <!-- Ảnh sologan - form đặt xe -->
            <div class="imgsologan-form">
                <!-- Ảnh sologan -->
                <div class="imgsologan">
                    <a href="">
                        <img src="https://xehue.vn/images/xehuedanang.gif" alt="">
                    </a>
                </div>
                <!-- form đặt xe -->
                <div class="form-bookcar">
                    <h2><span class="title-bookcar">Đặt xe</span></h2>
                    <div class="container">
                        <form action="" method="POST">
                            <div class="form-container">
                                <!-- Hành trình -->
                                <div class="way">
                                    <label for="">Hành trình (<font>*</font>)</label>
                                    <select name="way" id="way-select" required>
                                        <option value="Vui lòng chọn">Vui lòng chọn</option>
                                        <option value="Huế - Đà Nẵng - Xe 7 chỗ">Huế - Đà Nẵng - Xe 7 chỗ</option>
                                        <option value="Đà Nẵng - Huế - xe 7 chỗ">Đà Nẵng - Huế - xe 7 chỗ</option>
                                        <option value="Huế - Đà Nẵng - Xe LIMOUSINE">Huế - Đà Nẵng - Xe LIMOUSINE</option>
                                        <option value="Đà Nẵng - Huế - Xe LIMOUSINE">Đà Nẵng - Huế - Xe LIMOUSINE</option>
                                        <option value="Tuyến khác - Tuyến khác">Tuyến khác - Tuyến khác</option>
                                    </select>
                                </div>
                                <!-- Số điện thoại - Họ tên -->
                                <div class="phone-name">
                                    <div class="phone">
                                        <label for="">Số điện thoại (<font>*</font>)</label>
                                        <input type="text" name="phone" min="10" id="phone-input" placeholder="Nhập số điện thoại đúng quy định" required>
                                    </div>
                                    <div class="name">
                                        <label for="">Họ tên (<font>*</font>)</label>
                                        <input type="text" name="name" readonly id="name-input" placeholder="Nhập tên" value= "<?php if (isset($_SESSION['user'])) echo $_SESSION['name']; else echo ''?>">
                                    </div>
                                </div>
                                <!-- Ngày đi - Giờ đi -->
                                <div class="day-time">
                                    <div class="day">
                                        <label for="">Ngày đi (<font>*</font>)</label>
                                        <input type="date" name="day" id="day-input" required>
                                    </div>
                                    <div class="time">
                                        <label for="">Giờ đi (<font>*</font>)</label>
                                        <input type="time" name="time" id="time-input" required>
                                    </div>
                                </div>
                                <div class="pickup-arrive">
                                    <div class="place-pickup">
                                        <label for="">Nơi đón (<font>*</font>)</label>
                                        <input type="text" name="pickup" placeholder="Nhập nơi mà xe đến đón" id="pickup-input" required>
                                    </div>
                                    <div class="place-arrive">
                                        <label for="">Nơi đến (<font>*</font>)</label>
                                        <input type="text" name="arrive" placeholder="Nhập nơi mà xe đưa đến" id="arrive-input" required>
                                    </div>
                                </div>
                                <!-- Thuê xe - Người lớn - Trẻ em -->
                                <div class="rent-adult-children">
                                    <div class="rent">
                                        <div class="title-rent">
                                            <label for="">Thuê xe</label>
                                        </div>
                                        <div class="rent-content">
                                            <input type="checkbox" name="" id="rent-input">
                                        <select name="rent" id="rent-select" disabled>
                                            <option value="Xe 10 chỗ">Xe 10 chỗ</option>
                                            <option value="Xe 7 chỗ">Xe 7 chỗ</option>
                                            <option value="Xe 16 chỗ">Xe 16 chỗ</option>
                                            <option value="Xe 6 chỗ">Xe 6 chỗ</option>
                                            <option value="Xe 8 chỗ">Xe 8 chỗ</option>
                                            <option value="Xe 9 chỗ">Xe 9 chỗ</option>
                                            <option value="Xe 4 chỗ">Xe 4 chỗ</option>
                                            <option value="Xe 29 chỗ">Xe 29 chỗ</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="adult">
                                        <label for="">Người lớn (<font>*</font>)</label>
                                        <input type="number" name="adult" id="adult-input" min="1" required placeholder="Nhập số lượng người lớn đi">
                                    </div>
                                    <div class="children">
                                        <label for="">Trẻ em</label>
                                        <input type="number" name="children" id="children-input" min="0" placeholder="Trẻ em dưới 5 tuổi">
                                    </div>
                                </div>
                                <!-- Nút Đặt xe -->
                                <div class="btn-book-car">
                                    <button name="book" type="submit" id="book-button">Đặt xe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Ảnh quảng bá -->
            <div class="img-adds">
                <img src="https://xehue.vn/images/promotion_default_banner.jpg" alt="">
            </div>
        </div>

        <!-- Mục tiện ích -->
        <div class="tool">
            <h2>Vì sao chọn<span> XeHue.vn</span></h2>
            <div class="tool-img">
                <div class="img-commit">
                    <figure>
                        <img class="img-four-commit" src="https://xehue.vn/images/support.png" alt="">
                    </figure>
                    <h3>Hỗ trợ tận tình</h3>
                </div>
                <div class="img-commit" id="img-quality">
                    <figure>
                        <img class="img-four-commit" src="https://xehue.vn/images/quality.png" alt="">
                    </figure>
                    <h3>Xe chất lượng cao</h3>
                </div>
                <div class="img-commit">
                    <figure>
                        <img class="img-four-commit" src="https://xehue.vn/images/place_seat.png" alt="">
                    </figure>
                    <h3>Giữ chỗ 100%</h3>
                </div>
                <div class="img-commit" id="img-price">
                    <figure>
                        <img class="img-four-commit" src="https://xehue.vn/images/best_price.png" alt="">
                    </figure>
                    <h3>Bảo đảm giá tốt</h3>
                </div>
            </div>
        </div>

        <!-- Mục tải xuống -->
        <div class="download">
            <h2>download ứng dụng</h2>
            <div class="download-link">
                <a class="android-ios" href="">
                    <img src="https://xehue.vn/img/android.png" alt="">
                    Tải xuống cho android
                </a>
                <a id="ios" class="android-ios" href="">
                    <img src="https://xehue.vn/img/apple.png" alt="">
                    Tải xuống cho ios
                </a>
            </div>
        </div>
    </div>

    <!-- Tin tức và Sự kiện (link) -->
    <div class="news-event">
        <div class="container">
            <h2><a href="">Tin tức & Sự kiện</a></h2>
            <div class="news-event-content">
                Dữ liệu đang cập nhật!
            </div>
        </div>
    </div>
    <!-- Tuyến đường -->
    <div class="container">
        <h2>Các tuyến đường phổ biến</h2>
        <div class="way-popular">
            <img class="img-way" src="https://xehue.vn/images/hue.jpg" alt="">
            <img class="img-way img-move" src="https://xehue.vn/images/move.png" alt="">
            <img class="img-way" src="https://xehue.vn/images/danang.jpg" alt="">
            <img class="img-way img-move" src="https://xehue.vn/images/move.png" alt="">
            <img class="img-way" src="https://xehue.vn/images/tuyenkhac.jpg" alt="">
        </div>
    </div>
    <!-- Hệ thống nhà xe -->
    <div class="system">
        <h2>Hệ thống nhà xe</h2>
        <div class="system-content">
            Dữ liệu đang cập nhật!
        </div>
    </div>
    <!-- Liên hệ - Thông tin - Lượt truy cập - Liên kết (Footer) -->
    <footer>
        <div class="container">
            <div class="contact-information-link-access">
                <!-- Liên Hệ -->
                <div class="contact">
                    <div class="contact-content">
                        <a href="">
                            <img class="img-contact" src="https://xehue.vn/images/logo.png" alt="">
                        </a>
                        <p class="email">Email: infor@xehue.vn</p>
                        <p class="address">Địa chỉ: 216 Bến Nghé Phường Phú Hội, TP Huế</p>
                        <p class="tel">Tel: Quý khách liên hệ trực tiếp SĐT: 0777-500-500</p>
                        <p class="website">Website: xehue.vn</p>
                    </div>
                </div>
                <!-- Thông tin -->
                <div class="information">
                    <div class="infomation-content">
                        <h3>Thông tin</h3>
                        <ul class="list-information">
                            <li><i class="fa fa-angle-right"></i><a href="">Giới thiệu</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="">Điều khoản</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="">Khuyến mãi</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="">Tin tức</a></li>
                            <li><i class="fa fa-angle-right"></i><a href="">Sơ đồ website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Lượt truy cập -->
                <div class="access">
                    <div class="access-content">
                        <p class="numbers-online"><?php Counting_Online(); ?></p>
                        <p>Đang online</p>
                        <p class="total-online"><?php Counting_Hits(); ?></p>
                        <p>Lượt truy cập</p>
                    </div>
                </div>
                <!-- Liên kết -->
                <div class="link">
                    <div class="link-content">
                        <div class="btn-top">
                            <i class="fa fa-angle-up fa-2x"></i>
                        </div>
                        <p>Chúng tôi sẽ cung cấp cho bạn những thông tin khuyến mãi mới nhất</p>
                        <div class="email-register">
                            <input id="email-input" type="text" placeholder="*Email*">
                            <button class="btn-register"><i class="fa fa-paper-plane"></i> Đăng ký</button>
                        </div>
                        <ul class="link-social">
                            <li><a href="https://www.facebook.com/xehue"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://www.google.com/xehue"><i class="fa fa-google fa-2x"></i></a></li>
                            <li><a href="https://www.twitter.com/xehue"><i class="fa fa-twitter fa-2x"></i></a></li>
                        </ul>
                        <div class="fast-order"><p>Đặt <br> nhanh</p></div>
                        <div class="support-online">
                            <a href="">
                                <img src="https://xehue.vn/images/support_online.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <p class="copyright">© 2018. All rights reserved. Privacy policy</p>
                <div class="support-zalo">
                    <a href="https://chat.zalo.me/?phone=SĐT_Của_Bạn" id="linkzalo" target="_blank" rel="noopener noreferrer">
                        <div id="fcta-zalo-tracking" class="fcta-zalo-mess">
                            <span id="fcta-zalo-tracking">Chat hỗ trợ</span>
                        </div>
                        <div class="fcta-zalo-vi-tri-nut">
                            <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut">
                                <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg>
                                </div>
                                <div id="fcta-zalo-tracking" class="fcta-zalo-text">Chat ngay</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="/XeHue_Home/main_Home.js"></script>
    <script>
            /* Ẩn - hiện thanh navbar */
$('.navbar-list').css('display', '-moz-grid-line');
$('#btn-navbar').click(function(){
    $('.navbar-list').css('display', 'gird');
    $('.navbar-list > li').css('display', 'block');
    $('.navbar-list').toggle(500);
})




// Nút checkbox mở - đóng select
$('#rent-input').click(function(){
    if ($('#rent-input').is(':checked')) $('#rent-select').removeAttr("disabled");
    else $('#rent-select').attr('disabled', '');
})

// Lấy ngày giờ hiện tại cho ngày đi - giờ đi 
function lessTen(val) {
    if (val >= 10)
      return val;
    else
      return '0' + val;
  }
  
  //$(document).ready(function(){
    var d = new Date();
    var day_now = d.getDate();
    var month_now = d.getMonth()+1;
    var year_now = d.getFullYear();
    var hours_now = d.getHours();
    var minutes_now = d.getMinutes();
    $('#day-input').val(lessTen(year_now) + '-' + lessTen(month_now) + '-' + lessTen(day_now));
    $('#time-input').val(lessTen(hours_now + 1) + ':' + lessTen(minutes_now));
    console.log(d.getHours() + ':' + d.getMinutes())
  //});
// Kiếm tra ngày đi và giờ đi
$('#day-input').change(function(){
    //Thời gian người dùng nhập
    var date = new Date($('#day-input').val());
    day = date.getDate();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    //alert([day, month, year].join('-'));
    if (day < day_now || month < month_now || year < year_now){
        alert('Không thể chọn ngày trong quá khứ !');
        $('#day-input').val(lessTen(year_now) + '-' + lessTen(month_now) + '-' + lessTen(day_now));
    } 
});

$('#time-input').change(function(){
    //Thời gian người dùng nhập
    var date = new Date($('#day-input').val());
    day = date.getDate();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    var t = $('#time-input').val();
    var hours = t.slice(0,2);
    if ((Number(hours) < Number(hours_now))){
        if ((day <= day_now || month <= month_now || year <= year_now)){
            alert('Giờ đi phải tối thiểu trước 1 tiếng !');
            $('#time-input').val(lessTen(hours_now + 1) + ':' + lessTen(minutes_now));
        } 
    }
});

// Nút chuyển lên đầu trang
$(function(){
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $(".btn-top").fadeIn();
                else $(".btn-top").fadeOut();
        });
        $(".btn-top").click(function () {
            $("body,html").animate({scrollTop: 0}, "slow");
        });
    }		
})

// kiểm tra ô họ tên
if ($('#name-input').val() === ''){
    $('#name-input').removeAttr('readonly');
} else attr('readonly', '');

// Nút zalo 
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
{document.getElementById("linkzalo").href="https://zalo.me/SĐT_Của_Bạn";}


    </script>
</body>
</html>