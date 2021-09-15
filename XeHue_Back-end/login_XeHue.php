<?php
    //session_start();
    include_once('connect.php');
    login();
?>
<?php if (!isset($_SESSION['user'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/XeHue_Login/style_Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>XeHue - Đăng nhập</title>
</head>
<style>
    *{
        box-sizing: border-box;
    } 
    body{
        background: url(https://xehue.vn/img/auth-background.jpg);
        font-family: Arial, Helvetica, sans-serif;
        max-width: 100%;
    }
    a{
        text-decoration: none;
        color: #55acee;
        width: 150px;
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
    .lb{
        margin-left: 10px;
    }
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
        width: 25%;
        height: auto;
        margin: 10% auto;
    }
    .account{
        display: flex;
        flex-direction: row;
        justify-content: end;
        flex-wrap: wrap;
        padding: 10px 0;
    }
    input[type="text"], input[type="password"]{
        margin-left: 0px;
        width: 100%;
        margin-top: 0px;
        height: 25px;
        outline: none;
        margin-top: 5px;
    }
    input[type="checkbox"]{
        height: 20px;
        width: 20px;
        margin: -5px;
        margin-right: 10px;
    }
    input[type="checkbox"]:hover{
        cursor: pointer;
        
    }
    .checkbox-login{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-top: 20px;
    }
    .button{
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        margin-left: 30%;
        height: 30px;
        max-width: 100%;
        background-color: #55acee;
        color: white;
        font-size: 15px;
        border: none;
        text-transform: uppercase;
        padding: 5px;
        margin-top: 10px;
    }
    .button:hover{
        background-color:steelblue;
        cursor: pointer;
    }
    .nofi-login{
        display: flex;
        flex-direction: column;
        font-size: 12px;
        padding: 10px 0;
    }
    .nofi-login a{
        padding: 2px 0;
        max-width: 100%;
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
    }
</style>
<body>
    <div class="login">
        <div class="title-login">
            <h2>XeHue</h2>
        </div>
        <div class="form">
            <form action="" method="POST">
                <div class="account">
                   <i class="fa fa-envelope-square"></i><label class="lb" for="">Tài khoản</label>
                   <input type="hidden" name="id">
                   <input type="text" name="user_name" required>
                </div>
                <div class="password">
                    <i class="fa fa-lock"></i><label class="lb" for="">Mật khẩu</label>
                    <input type="password" name="password" id="" required>
                </div>
                <div class="checkbox-login">
                    <input type="checkbox" name="remember" id="" value="1" checked> Ghi nhớ
                    <input class="button" type="submit" name="submit" value="Đăng nhập" id="btn-login">
                </div>
                <div class="nofi-login">
                    <a href="forgotPassword.php">Quên mật khẩu?</a>
                    <a href="register_XeHue.php">Đăng ký tài khoản mới</a>
                </div>
            </form>
        </div>
    </div>
    <?php else: echo"<span style='display: block;color:red;text-align: center; font-size: 20px'>Trang này không tồn tại !</span>
            <a style='display: block;text-align: center; font-size: 20px' href='Home_XeHue.php'>Quay về lại trang chủ</a>" ?>
    <?php endif; ?>
</body>
</html>
