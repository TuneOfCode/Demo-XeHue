<?php 
    include_once('connect.php');
    get_book_car();
    update_bookcar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Thông tin người dùng</title>
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['user'])): ?>
        <h2 style="text-align: center;text-transform:uppercase;font-size:20px;color:#5B7FEC;">Cảm ơn khách hàng <?php echo$_SESSION['name'] ?> đã tin tưởng
            <a href="Home_XeHue.php" style="text-decoration: none; text-transform:uppercase;font-size:20px;color:#f5a720;">XeHue.VN</a>!
        </h2>
            <table style="display: flex; justify-content: center;border: none; border-color: red;" border="2">
                <tr>
                    <th style="text-transform: uppercase; color:#5B7FEC;" colspan="3">THÔNG TIN ĐẶT XE của khách hàng <?php echo$_SESSION['name'] ?></th>
                </tr>
        
                <!-- <tr>
                    <td>ID</td>
                    <td><input class="input-dis" disabled type="text" value= "<?php echo $_SESSION['id'] ?>" ></td>
                </tr> -->
                <tr>
                    <td>Hành trình</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['way'] ?>"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input class="input" readonly type="text" value= "<?php $_SESSION['phone'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $_SESSION['phone'])); echo $_SESSION['phone']?> "></td>
                </tr>      
                <tr>
                    <td>Ngày đi</td>
                    <td><input class="input" readonly type="text" value= "<?php $date = date_create($_SESSION['day']); echo date_format($date, "d-m-Y")?> "></td>
                </tr>    
                <tr>
                    <td>Giờ đi</td>
                    <td><input class="input" readonly type="text" value= "<?php $date = date_create($_SESSION['time']); echo date_format($date, "H:i:a")?>" > </td>
                </tr>   
                <tr>
                    <td>Nơi đón</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['pickup'] ?> "></td>
                </tr>
                <tr>
                    <td>Nơi đến</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['arrive'] ?> "></td>
                </tr>
                <tr>
                    <td>Thuê xe</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['rent'] ?> "></td>
                </tr>
                <tr>
                    <td>Số người lớn</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['adult'] ?> "></td>
                </tr>
                <tr>
                    <td>Số trẻ em</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['children'] ?>"></td>
                </tr>
                
                <!-- <button class="btn-save" type="submit" name="save"><i class="fa fa-save"></i>Lưu</button> -->
            </table>
            <button id="edit" class="btn-edit" onclick="document.getElementById('mdl').style.display='block'"><i class="fa fa-edit fa-2x"></i>Sửa</button>
            <!-- <button class="btn-edit" type="submit"><i class="fa fa-edit"></i>Sửa</button>
            <button class="btn-save" type="submit" name="save"><i class="fa fa-save"></i>Lưu</button> -->
        <!-- </form> -->
    </div>
    <!-- <div class="user">
        <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
        <div class="drop">
            <a href="" target="_blank">Thông tin người dùng</a>
            <a href="">Đổi mật khẩu</a>
            <a href="">Đăng xuất</a>
        </div>
    </div> -->

    <div id="mdl" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('mdl').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container" id="c-modal">
        <div class="way">
            <label for="">Hành trình (<font>*</font>)</label>
            <select name="way" id="way-select">
                <option value="<?php echo $_SESSION['way'] ?>"><?php echo $_SESSION['way'] ?></option>
                <option value="Huế - Đà Nẵng - Xe 7 chỗ">Huế - Đà Nẵng - Xe 7 chỗ</option>
                <option value="Đà Nẵng - Huế - xe 7 chỗ">Đà Nẵng - Huế - xe 7 chỗ</option>
                <option value="Huế - Đà Nẵng - Xe LIMOUSINE">Huế - Đà Nẵng - Xe LIMOUSINE</option>
                <option value="Đà Nẵng - Huế - Xe LIMOUSINE">Đà Nẵng - Huế - Xe LIMOUSINE</option>
                <option value="Tuyến khác - Tuyến khác">Tuyến khác - Tuyến khác</option>
            </select>
        </div>
        <div class="phone-name">
            <div class="phone">
                <label for="">Số điện thoại (<font>*</font>)</label>
                <input type="text" name="phone" id="phone-input" placeholder="Nhập số" value= "<?php echo $_SESSION['phone'] ?>">
            </div>
            <div class="name">
                <label for="">Họ tên (<font>*</font>)</label>
                <input type="text" name="name" readonly  id="name-input" placeholder="Nhập tên" value= "<?php echo $_SESSION['name'] ?>">
            </div>
        </div>
        <div class="day-time">
            <div class="day">
                <label for="">Ngày đi (<font>*</font>)</label>
                <input type="date" name="day" id="day-input" value= "<?php echo $_SESSION['day'] ?>">
            </div>
            <div class="time">
                <label for="">Giờ đi (<font>*</font>)</label>
                <input type="time" name="time" id="time-input" value= "<?php echo $_SESSION['time'] ?>">
            </div>
        </div>
        <div class="pickup-arrive">
            <div class="place-pickup">
                <label for="">Nơi đón (<font>*</font>)</label>
                <input type="text" name="pickup" id="pickup-input" value= "<?php echo $_SESSION['pickup'] ?>">
            </div>
            <div class="place-arrive">
                <label for="">Nơi đến (<font>*</font>)</label>
                <input type="text" name="arrive" id="arrive-input" value= "<?php echo $_SESSION['arrive'] ?>">
            </div>
        </div>
        <!-- Thuê xe - Người lớn - Trẻ em -->
        <div class="rent-adult-children">
            <div class="rent">
                <div class="title-rent">
                    <label for="">Thuê xe</label>
                </div>
                <div class="rent-content">
                    <input checked type="checkbox" name="" id="rent-input">
                <select name="rent" id="rent-select" >
                    <option value= "<?php echo $_SESSION['rent'] ?>"><?php echo $_SESSION['rent'] ?></option>
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
                <input type="number" name="adult" id="adult-input" min="1" value= "<?php echo $_SESSION['adult'] ?>">
            </div>
            <div class="children">
                <label for="">Trẻ em</label>
                <input type="number" name="children" id="children-input" min="0" value= "<?php echo $_SESSION['children'] ?>">
            </div>
        </div>
      <!-- <label for="psw"><b>Nhập mật khẩu cũ</b></label>
      <input type="password" disabled placeholder="Enter Password" name="password" value= "<?php echo $_SESSION['pass'] ?>">

      <label for="psw"><b>Nhập mật khẩu mới</b></label>
      <input type="password" disabled placeholder="Enter Password" name="password" value= "<?php echo $_SESSION['pass'] ?>">

      <label for="rpsw"><b>Nhập lại mật khẩu</b></label>
      <input type="password" disabled placeholder="Enter Password" name="re_password" value= "<?php echo $_SESSION['pass'] ?>"> -->

      <!-- <label for="email"><b>Email</b></label>
      <input type="email" disabled placeholder="Enter Email" name="email" value= "<?php echo $_SESSION['email'] ?>">
       
      <label for="date"><b>Ngày sinh</b></label>
      <input type="date" placeholder="Enter Password" name="date" value= "<?php echo $_SESSION['date']?>" >

      <label for="addr"><b>Địa chỉ</b></label>
      <input type="text" placeholder="Enter Password" name="address" value= "<?php echo $_SESSION['address'] ?>">

      <label for="radio">Chức năng</label>
      <div class="checkbox">
        <input class="check" type="radio" name="user_radio" value="Đại lý" id="" required> Đại lý
        <input class="check" type="radio" name="user_radio" value="Khách lẻ" id="" required> Khách lẻ
      </div> -->
        
      <button id="save" class="btn-save" type="submit" name="save"><i class="fa fa-save fa-2x"></i>Lưu</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Ghi nhớ
      </label> -->
    </div>
  </form>
</div>

    <style>
        body{
            background: url(https://xehue.vn/img/auth-background.jpg);
            font-family: Arial, Helvetica, sans-serif;
            max-width: 100%;
        }
        font{
            color: red;
        }
        .container{
            background-color:#fff;
            width: 60%;
            height: auto;
            padding: 20px 20px;
            display: block;
            margin: 10% auto;
        }
        td{
            width: 400px;
        }
        .input, .input-dis{
            font-size: 16px;
            width: 400px;
            outline: none;
        }
        button{
            cursor: pointer;
            margin: 0 5px;
        }
        .drop{
            display: block;
            background-color: #333;
            height: auto;
            width: 200px;
            border-radius: 5px;
            max-width: 100%;
        }
        .drop a{
            text-align: left;
            text-decoration: none;
            color: white;
            list-style: none;
            display: block;
            font-size: 18px;
            padding: 5px 0;
        }
        .drop a:hover{
            font-weight: bold;
        }
        img {
            text-align: center;
            margin: 24px 0 12px 0;
            width: 50px;
            border-radius: 50%;
            cursor: pointer;
            max-width: 100%;
        }

        input[type=text], input[type=password], input[type="email"], input[type="date"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

        /* Set a style for all buttons */
        #edit{
        width: 93%;
        margin-top: 20px;
        background-color: #f44336;
        }
        #save{
        width: 100%;
        margin-top: 10px;
        background-color: blueviolet;
        }
        .fa-2x {
            font-size: 1.25em;
        }
        .fa-save:before, .fa-floppy-o:before {
            content: "\f0c7";
            padding: 0 10px;
        }
        .fa-edit:before, .fa-pencil-square-o:before {
            content: "\f044";
            padding: 0 5px;
        }
        button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        display: block;
        margin: 0px auto;
        font-size: 20px;
        text-transform: uppercase;
        border-radius: 10px;
        }

        button:hover {
        opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
        }

        img.avatar {
        width: 100px;
        border-radius: 100px;
        height: 100px;
        }

        .container {
        padding: 16px;
        }
        #c-modal{
            background-color: mediumslateblue;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: red;
        cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
        }
        
        @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
input[type="radio"]{
            height: 30px;
            width: 30px;
            outline: none;
        }
        .checkbox{
            display: flex;
            align-items: center;
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


    </style>
    <script>
        $(".user").click(function(){
            $(".drop").toggle(500);
        });
        // $('.btn-edit').click(function(){
        //     $('.input').removeAttr('disabled');
        // });
        // $('.btn-save').click(function(){
        //     $('.input').attr('disabled', '');
        // });

        // Nút checkbox mở - đóng select
        // $('#rent-input').click(function(){
        //     if ($('#rent-input').is(':checked')) $('#rent-select').removeAttr("disabled");
        //     else {
        //         $('#rent-select').attr('disabled', '');
        //         $('#rent-select').val('vui lòng chọn lại');
        //     }
        // })

        $(document).ready(function(){                  
            var found = [];
            $("select option").each(function() {
            if($.inArray(this.value, found) != -1) $(this).remove();
            found.push(this.value);
            });
        });

    </script>
    <?php else: echo"<span style='display: block;color:red;text-align: center; font-size: 20px'>Trang này không tồn tại !</span>
            <a style='display: block;text-align: center; font-size: 20px' href='Home_XeHue.php'>Quay về lại trang chủ</a>" ?>
    <?php endif; ?>

</body>
</html>