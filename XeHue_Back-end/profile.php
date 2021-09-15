<?php 
    include_once('connect.php');
    update();
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
        <h2 style="text-align: center;text-transform:uppercase;font-size:20px;color:#5B7FEC;">Chào mừng <?php echo$_SESSION['name'] ?> đã đến với 
            <a href="Home_XeHue.php" style="text-decoration: none; text-transform:uppercase;font-size:20px;color:#f5a720;">XeHue.VN</a>!
        </h2>
        <!-- <form action="profile.php" method="POST"> -->
            <!-- <label for="">Tên người dùng</label> <br>
            <input class="input-dis" disabled type="text" name="user_name" value= "<?php echo $_SESSION['user'] ?>" >

            <label for="">Họ và tên</label>  <br>
            <input class="input" disabled type="text" name="name" value= "<?php echo $_SESSION['name'] ?>">

            <label for="">Mật khẩu</label><br>
            <input class="input" disabled type="password" name="password" value= "<?php echo $_SESSION['pass']?> ">

            <label for="">Email</label><br>
            <input class="input" disabled type="email" name="email" value= "<?php echo $_SESSION['email']?> ">

            <label for="">Ngày sinh</label><br>
            <input class="input" disabled type="text" name="date" value= "<?php $date = date_create($_SESSION['date']); echo date_format($date, "d-m-Y")?>" >

            <label for="">Địa chỉ</label>
            <input class="input" disabled type="text" name="address" value= "<?php echo $_SESSION['address'] ?> "> -->
            <table style="display: flex; justify-content: center;border: none; border-color: red;" border=2>
                <tr>
                    <th colspan="3" style="color:#5B7FEC;">THÔNG TIN NGƯỜI DÙNG</th>
                </tr>
                <tr>
                <tr>
                <tr>
                    <td>Tên người dùng</td>
                    <td><input class="input-dis" readonly type="text" value= "<?php echo $_SESSION['user'] ?>" ></td>
                </tr>
                <tr>
                    <td>Họ và tên</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['name'] ?>"></td>
                </tr>
                <!-- <tr>
                    <td>Mật khẩu</td>
                    <td><input class="input" disabled type="password" value= "<?php echo $_SESSION['pass']?> "></td>
                </tr>       -->
                <tr>
                    <td>Email</td>
                    <td><input class="input" readonly type="email" value= "<?php echo $_SESSION['email']?> "></td>
                </tr>    
                <tr>
                    <td>Ngày sinh</td>
                    <td><input class="input" readonly type="text" value= "<?php $date = date_create($_SESSION['date']); echo date_format($date, "d-m-Y")?>" > </td>
                </tr>   
                <tr>
                    <td>Địa chỉ</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['address'] ?> "></td>
                </tr>
                <tr>
                    <td>Chức năng</td>
                    <td><input class="input" readonly type="text" value= "<?php echo $_SESSION['radio'] ?>"></td>
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

    <div class="container">
      <label for="uname"><b>Tên đăng nhập</b></label>
      <input type="text" readonly placeholder="" name="user_name" value= "<?php echo $_SESSION['user'] ?>"  required>

      <label for="uname"><b>Họ và tên</b></label>
      <input type="text" placeholder="" name="name" value= "<?php echo $_SESSION['name'] ?>"  >

      <!-- <label for="psw"><b>Nhập mật khẩu cũ</b></label>
      <input type="password" disabled placeholder="Enter Password" name="password" value= "<?php echo $_SESSION['pass'] ?>">

      <label for="psw"><b>Nhập mật khẩu mới</b></label>
      <input type="password" disabled placeholder="Enter Password" name="password" value= "<?php echo $_SESSION['pass'] ?>">

      <label for="rpsw"><b>Nhập lại mật khẩu</b></label>
      <input type="password" disabled placeholder="Enter Password" name="re_password" value= "<?php echo $_SESSION['pass'] ?>"> -->

      <label for="email"><b>Email</b></label>
      <input type="email" readonly placeholder="Enter Email" name="email" value= "<?php echo $_SESSION['email'] ?>">
       
      <label for="date"><b>Ngày sinh</b></label>
      <input type="date" placeholder="Enter Password" name="date" value= "<?php echo $_SESSION['date']?>" >

      <label for="addr"><b>Địa chỉ</b></label>
      <input type="text" placeholder="Enter Password" name="address" value= "<?php echo $_SESSION['address'] ?>">

      <label for="radio">Chức năng</label>
      <div class="checkbox">
        <span class="i-radio"><input checked class="check" type="radio" name="user_radio" value="<?php echo $_SESSION['radio'] ?>" id="" required> <?php echo $_SESSION['radio'] ?></span>
        <span class="i-radio" id="Đại-lý"><input class="check" type="radio" name="user_radio" value="Đại lý" id="" required> Đại lý</span>
        <span class="i-radio" id="Khách-lẻ"><input class="check" type="radio" name="user_radio" value="Khách lẻ" id="" required> Khách lẻ</span>
      </div>
        
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
        .i-radio{
          display: contents;
        }
        .container{
            background-color:#fff;
            width: 50%;
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
        outline: none;
      }

      /* Set a style for all buttons */
      #edit{
        width: 100%;
        margin-top: 20px;
        background-color: #f44336;
      }
      #save{
        width: 100%;
        margin-top: 10px;
        background-color: #04AA6D;
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
        height: 100px;
        border-radius: 100px;
      }

      .container {
        padding: 16px;
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
        $(document).ready(function(){                  
            var found = [];
            $("input[type='radio']").each(function() {
            if($.inArray(this.value, found) != -1){
              var radio_val = this.value;
              radio_val = radio_val.replace(' ', '-');
              //alert('#'+radio_val);
              $(radio_val).remove();
              $('#' + radio_val).css('display', 'none');
            } 
            found.push(this.value);
            //alert(this.value);
            });
        });

    </script>
    <?php else: echo"<span style='display: block;color:red;text-align: center; font-size: 20px'>Trang này không tồn tại !</span>
            <a style='display: block;text-align: center; font-size: 20px' href='Home_XeHue.php'>Quay về lại trang chủ</a>" ?>
    <?php endif; ?>

</body>
</html>