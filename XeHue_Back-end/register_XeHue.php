<?php 
    //include 'connect.php';
    include_once('connect.php');
    register();
    
    /* echo "<script>alert('Bạn đã nhập sai')</script>"*/
?>
<?php if (!isset($_SESSION['user'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style_dangky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>XeHue - Đăng Ký</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background: url(https://xehue.vn/img/auth-background.jpg);
            font-family: Arial, Helvetica, sans-serif;
            max-width: 100%;
        }
        font{
            color: red;
            font-weight: 700;
        }
        a{
            text-decoration: none;
            color: #55acee;
            width: 250px;
            margin: 10px 0;
        }
        a:hover{
            color: blue;
        }
        .title-login{
            text-align: center;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 700;
        }
        h3{
            text-align: center;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 700; 
            color: #55acee;
            margin-top: -10px;
        }
        .lb{
            margin-left: 10px;
        }
        .login{
            display: flex;
            border-radius: 5px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: rgba(255,255,255,.5);
            max-width: 100%;
            width: 50%;
            height: auto;
            margin: 5% auto;
        }
        .form{
            background-color: #ddd;
            padding: 20px;
            font-size: 14px;
            text-transform: uppercase;
            width: 100%;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
        }

        .content-form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
        }
        .account-pass-repass-name{
            display: flex;
            justify-content: center;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .accept{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        button{
            width: 100px;
            height: 30px;
            margin: 10px auto;
            background-color: #55acee;
            color: white;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            padding: 5px;
            border-radius: 5px;
        }
        button:hover{
            background-color: blue;
            cursor: pointer;
            
        }
        input[type="text"], input[type="password"], input[type="date"], input[type="email"]{
            width: 100%;
            height: 30px;
            margin-top: 10px;
            outline: none;
        }
        .password, .re-password, .name, .email, .birthday, .address{
            margin: 5px 0;
        }
        input[type="checkbox"], input[type="radio"]{
            height: 30px;
            width: 30px;
            outline: none;
        }
        .checkbox{
            display: flex;
            align-items: center;
        }
        .agree{
            display: flex;
            align-items: center;
        }

        @media screen and (max-width: 975px) {
            .form{
                background-color: #ddd;
                padding: 20px;
                font-size: 14px;
                text-transform: uppercase;
                width: 100%;
                max-width: 100%;
                display: flex;
                justify-content: center;
                margin: 0 auto;
                border-radius: 6px;
                overflow: hidden;
            }
            .login{
                display: flex;
                border-radius: 5px;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 30px;
                background: rgba(255,255,255,.5);
                max-width: 100%;
                width: 100%;
                height: auto;
                margin: 10% auto;
            }
            a{
                font-size: 10px;
            }
            input[type="checkbox"], input[type="radio"]{
                height: 20px;
                width: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="title-login">
            <h2>XeHue</h2>
        </div>
        <div class="form">
            <h3>Đăng ký tài khoản mới</h3>
            <form action="register_XeHue.php" method="POST">
                <div class="content-form">
                    <div class="account-pass-repass-name">
                        <div class="account">
                            <div class="account-content">
                                <i class="fa fa-mobile"></i><label class="lb" for="">Tài khoản: <font>*</font></label>
                            </div>
                            <input type="text" name="user_name" min="3" placeholder="Tài khoản có ít nhất 3 ký tự trở lên" required>
                         </div>
                         <div class="password">
                            <div class="password-content">
                                <i class="fa fa-lock"></i><label class="lb" for="">Mật khẩu: <font>*</font></label>
                            </div>
                            <input type="password" name="password" id="" minlength="5" required placeholder="Mật khẩu tối thiểu phải có 5 ký tự trở lên">
                        </div>
                        <div class="re-password">
                            <div class="re-password-content">
                                <i class="fa fa-lock"></i><label class="lb" for="">Nhập lại mật khẩu: <font>*</font></label>
                            </div>
                            <input type="password" name="re_password" minlength="5" id="" placeholder="Mật khẩu tối thiểu phải có 5 ký tự trở lên" required>
    
                        </div>
                        <div class="name">
                            <div class="name-content">
                                <i class="fa fa-user"></i><label class="lb" for="">Họ và tên: <font>*</font></label>
                            </div>
                            <input type="text" name="name" id="" required>
                        </div>
                    </div>
                    
                    <div class="email-date-address-checkbox">
                        <div class="email">
                            <div class="email-content">
                                <i class="fa fa-envelope-square"></i><label class="lb" for="">Email: <font>*</font></label>
                            </div>
                            <input type="email" name="email" placeholder="Email phải đúng cú pháp. VD: example@gmail.com" required>
                            
                         </div>
                         <div class="birthday">
                            <div class="birthday-content">
                                <i class="fa fa-calendar"></i><label class="lb" for="">Ngày sinh: </label>
                            </div>
                            <input type="date" name="date" required>
                         </div>
                         <div class="address">
                            <div class="address-content">
                                <i class="fa fa-map-marker"></i><label class="lb" for="">Địa chỉ: </label>
                            </div>
                            <input type="text" name="address" required>
                         </div>
                        <div class="checkbox">
                            <input class="check" type="radio" name="user_radio" value="Khách lẻ" id="" required> Khách lẻ
                            <input class="check" type="radio" name="user_radio" value="Đại lý" id="" required> Đại lý
                        </div>
                    </div>
                </div>
                <div class="accept">
                    <div class="agree">
                        <input type="checkbox" name="checkbox" id="check-agree"> Tôi đồng ý với các điều khoản
                        <!-- <a href="">Tôi đồng ý với các điều khoản</a> -->
                    </div>
                    <a class="have-account" href="http://127.0.0.1/XeHue_Back-end/login_XeHue.php">Tôi đã có tài khoản</a>
                    <button id="btn-submit" type="submit" name="submit" disabled>Đăng ký</button>
                </div>
                <script>
                    $('#btn-submit').attr('disabled', '');
                    $('#btn-submit').css('background-color', '#A9A9A9');
                    $('#check-agree').click(function(){
                        if ($('#check-agree').is(':checked') === true){
                        $('#btn-submit').removeAttr('disabled');
                        $('#btn-submit').css('background-color', '#55acee');
                        $('#btn-submit').hover(function(){
                            $('#btn-submit').css('background-color', 'blue');
                        })
                        $('#btn-submit').mouseleave(function(){
                            $('#btn-submit').css('background-color', '#55acee');
                        })
                    } else if ($('#check-agree').is(':checked') === false){
                        $('#btn-submit').attr('disabled', '');
                        $('#btn-submit').css('background-color', '#A9A9A9');
                        $('#btn-submit').hover(function(){
                            $('#btn-submit').css('background-color', '#A9A9A9');
                        })
                    }
                    })
                    // Thực thi gửi dữ liệu bằng ajax
                </script>
            </form>
        </div>
    </div>
    <?php else: echo"<span style='display: block;color:red;text-align: center; font-size: 20px'>Trang này không tồn tại !</span>
            <a style='display: block;text-align: center; font-size: 20px' href='Home_XeHue.php'>Quay về lại trang chủ</a>" ?>
    <?php endif; ?>
</body>
</html>
