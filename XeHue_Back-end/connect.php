<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
    $cookie_name = 'XeHue';
    $cookie_time = (3600*24*30);
    function login(){
        if (!empty($_POST)){
            //$id = $_POST['id'];
            $username = $_POST['user_name'];
            $password = $_POST['password'];
            $username = trim(preg_replace('/[\t\n\r\s]+/', ' ', $username));
            // Tạo kết nối database
            $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
            // if (!$connect->connect_error) echo "database connected";
            // else echo "database error";
            mysqli_set_charset($connect, "utf8");
            $query = "SELECT * FROM register
                        WHERE id AND username = '$username' AND password = md5('$password') ";
            $result = $connect->query($query);
            //$row = mysqli_fetch_array($result);
            // đóng kết nối
            $connect->close();
            $data = [];
            $row = mysqli_fetch_array($result);
            $d = 0;
            if (mysqli_num_rows($result) > 0){
                if ($row['username'] == $username && $row['password'] == md5($password)){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['user'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['pass'] = $row['password'];
                    $row['email'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row['email']));
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['date'] = $row['birthday'];
                    $_SESSION['address'] = $row['address'];
                    $_SESSION['radio'] = $row['radio'];
                   header("Location: Home_XeHue.php");
                   echo "
                        <script>
                            window.onhashchange = function() {
                                if (history.back()) location.reload();
                            }
                        </script>
                   ";
                   exit;
                
                   die();
                   //var_dump($row);
                   //echo $row['id'];
                    //echo $_SESSION['user'];
                } else {
                    echo "<span style='color: red; text-align: center; display: block; font-size: 18px;text-transform: uppercase;'>
                    Tài khoản hoặc mật khẩu của bạn không chính xác</span>";
                }
                //header("Location: Home_XeHue.php");
                //header("Location: Home_XeHue.php");
                //echo 'Đăng nhập thành công <br>';
               //var_dump($data);
            } else {
                //echo "<scrip>alert('Đăng nhập thất bại')</script>";
                echo "<span style='color: red; text-align: center; display: block; font-size: 18px;text-transform: uppercase;'>
                Tài khoản hoặc mật khẩu của bạn không chính xác</span>";
            }
        } 
    }
    
    function update(){
        if (!empty($_POST)){
            //$username = $_POST['username'];
            $id = $_SESSION['id'];
            $name = $_POST['name'];
            //$email = $_POST['email'];
            $date = $_POST['date'];
            $address = $_POST['address'];
            $radio = $_POST['user_radio'];
            // Tạo kết nối database
            $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
            // if (!$connect->connect_error) echo "database connected";
            // else echo "database error";
            mysqli_set_charset($connect, "utf8");
            $query = 
            "UPDATE register SET name = '$name',birthday = '$date', address = '$address', radio = '$radio' 
            WHERE id = '$id' ";

            // $query_select = "SELECT * FROM register
            // WHERE id = $id AND password = md5('$password') ";
            //$result_select = $connect->query($query);
            $result = mysqli_query($connect, $query);
            //$row = mysqli_fetch_array($result);
            // đóng kết nối
            $connect->close();
            $data = [];
            if ($result){
                echo "Cập nhật thành công";
                    $_SESSION['name'] = $name;
                    $_SESSION['date'] = $date;
                    $_SESSION['address'] = $address;
                    $_SESSION['radio'] = $radio;
                header("location: profile.php");
            } 
            else echo"Lỗi cập nhật";
        } 
    }

    function update_password(){
        if (!empty($_POST)){
            $id = $_SESSION['id'];
            $password = md5($_POST['password']);
            $new_pass = md5($_POST['new_password']);
            $re_pass = md5($_POST['re_password']);

            $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
            mysqli_set_charset($connect, "utf8");

            if ($password != $_SESSION['pass']){
                echo "Nhập mật khẩu cũ không chính xác <br>";
            } 
            else {
                echo "Mật khẩu nhập lại đúng <br>";
                if ($new_pass != $re_pass){
                    echo "Mật khẩu nhập lại không chính xác! Vui lòng kiểm tra lại <br>";
                    die();
                }
                else { 
                    $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
                    mysqli_set_charset($connect, "utf8"); 
                    $id = $_SESSION['id'];
                    $query = 
                        "UPDATE register SET password = '$new_pass', repassword = '$re_pass' 
                        WHERE id = '$id' ";

                        // $query_select = "SELECT * FROM register
                        // WHERE id = $id AND password = md5('$password') ";
                        //$result_select = $connect->query($query);
                        $result = mysqli_query($connect, $query);
                        //$row = mysqli_fetch_array($result);
                        // đóng kết nối
                        $connect->close();
                        var_dump($_SESSION['pass']);
                        if ($result){
                            echo "Cập nhật thành công";
                            $_SESSION['pass'] = $new_pass;
                            header("location: profile.php");
                            
                        } 
                        else echo"Lỗi cập nhật";
                }    
            }
        }
    }
    
    //Đếm lượt truy cập
    function Counting_Hits(){
        $id = $_SESSION['id'];
        $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
        mysqli_set_charset($connect, "utf8");
        $sql = "SELECT COUNT(id) FROM register";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);
        if ($result) echo $row['COUNT(id)'];
        else echo"#";
    }

    //Đếm số lượng online
    function Counting_Online(){
        $id = $_SESSION['id'];
        $id_session = session_id();
        $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
        mysqli_set_charset($connect, "utf8");
        $sql = "SELECT COUNT(id) FROM register";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);
        $d = 0;
      
        if ($_SESSION['user']){
            $d++;
            echo $d;
        }
        else echo $d;
    }

    function register(){
        $conn = mysqli_connect('localhost:3306', 'root', '12345', 'xehue');
        mysqli_set_charset($conn, 'utf8');
        //$error = [];
        if (isset($_POST['user_name'])){
            $user_name = $_POST['user_name'];
            $user_name = $username = trim(preg_replace('/[\t\n\r\s]+/', ' ', $user_name));
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $email = trim(preg_replace('/[\t\n\r\s]+/', ' ', $email));
            $date = $_POST['date'];
            $address = $_POST['address'];
            $radio = $_POST['user_radio'];
            
                //Kiểm tra mật khẩu nhập lại
                if ($password != $re_password){
                    //echo "<script>alert('Mật khẩu nhập lại không đúng ! Vui lòng nhập lại')</script>";
                    echo "<span style='color: red; text-align: center; display: block; font-size: 18px;text-transform: uppercase;'>
                    Mật khẩu nhập lại không đúng ! Vui lòng nhập lại</span><a style='display: block;text-align: center; font-size: 20px' href='register_XeHue.php' onclick='back()'>
                    Quay về lại trang đăng ký</a>
                    <script>function back(){history.go(-1);$('#btn-submit').removeAttr('disabled');}</script>
                    ";
                    //$error['re_password'] = "Mật khẩu nhập lại không đúng ! Vui lòng nhập lại";
                    //echo "<div class='has-error'><span style='color: red;'>Mật khẩu nhập lại không đúng ! Vui lòng nhập lại</span></div>";
                    die();
                }

                // Kiểm tra xem tên đăng nhập hoặc email có trùng nhau hay không?
                $sql_check = "SELECT * FROM register 
                WHERE username = '$user_name' OR email = '$email' ";
                $query_check = mysqli_query($conn, $sql_check);

                if (mysqli_num_rows($query_check) > 0){
                    //header("location: http://127.0.0.1/XeHue_Back-end/register_XeHue.php");
                    echo "<script>alert('Tài khoản hoặc Email của bạn đã tồn tại')</script>";
                    //echo "<script>location.reload();</script>";
                    die();
                } 
                else{
                        $sql = "INSERT INTO register(username, password, repassword, name, email, birthday, address, radio)
                            VALUES ('".$user_name."', md5('".$password."'), md5('".$re_password."'), '".$name."', '".$email."', '".$date."', '".$address."', '".$radio."')";
                        // $sql = "INSERT INTO users(username, password, repassword, name, email, birthday, address, checkbox)
                        // VALUES ($user_name, md5($password), md5($re_password), $name, $email, $date, $address, $checkbox)";
                        header("location: http://127.0.0.1/XeHue_Back-end/login_XeHue.php");
                        $query = mysqli_query($conn, $sql);
                        echo "<script>alert('Đăng ký thành công')</script>";
                    
                    }
          
            mysqli_close($conn);
        }
    
    }

    function set_book_car(){
        $connect = mysqli_connect('localhost:3306', 'root', '12345', 'xehue');
        mysqli_set_charset($connect, "utf8");
        if (!$connect) {
            echo "Kết nối thất bại";
        }
        else{
            if (!empty($_POST)){
                $id = $_SESSION['id'];
                if (empty($id)) {
                    echo "<script>alert('Bạn cần đăng nhập để được đặt xe !')</script> "; 
                
                }
                $way = $_POST['way'];
                $phone = $_POST['phone'];
                $phone = trim(preg_replace('/[\t\n\r\s]+/', ' ', $phone));
                $day = $_POST['day'];
                $time = $_POST['time'];
                $pickup = $_POST['pickup'];
                $pickup = trim(preg_replace('/[\t\n\r\s]+/', ' ', $pickup));
                $arrive = $_POST['arrive'];
                $arrive = trim(preg_replace('/[\t\n\r\s]+/', ' ', $arrive));
                $rent = $_POST['rent'];
                $adult = $_POST['adult'];
                $children = $_POST['children'];
                $query = "SELECT * FROM bookcar WHERE id = '$id'";
                $result = mysqli_query($connect, $query);
                $row = mysqli_fetch_array($result);
        
                if (mysqli_num_rows($result) > 0){
                    echo "<script>alert('Bạn đã đặt xe trước đó !')</script>";
                } else {
                    $query = "SELECT * FROM bookcar WHERE id";
                    $result = mysqli_query($connect, $query);
                    $row = mysqli_fetch_array($result);
                    $row['id'] = $id;
                    if ($row['id'] == $id){
                        $query_book = "INSERT INTO bookcar(id, way, phone, day, time, pickup, arrive, rent, adult, children) 
                            VALUES('$id', '$way','$phone', '$day', '$time', '$pickup', '$arrive', '$rent', '$adult', '$children')";
                        $result_book = mysqli_query($connect, $query_book);
                        if ($result_book){
                            echo "<script>alert('Cảm ơn bạn đã đặt XeHue.VN. Chúc bạn có 1 chuyến đi bình an!')</script>";
                        }
                    } else echo"Đặt xe thất bại";
                }
            } 
        }
        mysqli_close($connect);
    }

    function get_book_car(){
        $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
        mysqli_set_charset($connect, "utf8");
            //if (!empty($_POST)){
                $id = $_SESSION['id'];
                $query = "SELECT * FROM bookcar WHERE id = '$id'";
                $result = mysqli_query($connect, $query);
                $row = mysqli_fetch_array($result);
                if (mysqli_num_rows($result) > 0){
                        if ($_SESSION['id'] == $row['id']){
                                $_SESSION['way'] = $row['way'];
                                $row['phone'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row['phone']));
                                $_SESSION['phone'] = $row['phone'];
                                $_SESSION['day'] = $row['day'];
                                $_SESSION['time'] = $row['time'];
                                $row['pickup'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row['pickup']));
                                $_SESSION['pickup'] = $row['pickup'];
                                $row['arrive'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $row['arrive']));
                                $_SESSION['arrive'] = $row['arrive'];
                                $_SESSION['rent'] = $row['rent'];
                                $_SESSION['adult'] = $row['adult'];
                                $_SESSION['children'] = $row['children'];
                                // header("Location: bookCar_XeHue.php");
                        } else echo"Không thành công";
                }else {
                    echo "<span style='color: red; text-align: center; display: block; font-size: 18px;text-transform: uppercase;'>
                    Bạn chưa đặt xe !</span><a style='display: block;text-align: center; font-size: 20px' href='Home_XeHue.php'>Quay về lại trang chủ</a>";
                    die();
                }
            //}
        
    }

    function update_bookcar(){
        if (!empty($_POST)){
            $id = $_SESSION['id'];
                $way = $_POST['way'];
                $phone = $_POST['phone'];
                $phone = trim(preg_replace('/[\t\n\r\s]+/', '', $phone));
                $day = $_POST['day'];
                $time = $_POST['time'];
                $pickup = $_POST['pickup'];
                $pickup = trim(preg_replace('/[\t\n\r\s]+/', ' ', $pickup));
                $arrive = $_POST['arrive'];
                $arrive = trim(preg_replace('/[\t\n\r\s]+/', ' ', $arrive));
                $rent = $_POST['rent'];
                $adult = $_POST['adult'];
                $children = $_POST['children'];
            // Tạo kết nối database
            $connect = new mysqli('localhost:3306', 'root', '12345', 'xehue');
            // if (!$connect->connect_error) echo "database connected";
            // else echo "database error";
            mysqli_set_charset($connect, "utf8");
            $query = 
            "UPDATE bookcar 
            SET way = '$way', phone = '$phone', day = '$day', 
            time  = '$time', pickup = '$pickup', arrive = '$arrive', rent = '$rent', adult = '$adult', children = '$children'
            WHERE id = '$id' ";

            // $query_select = "SELECT * FROM register
            // WHERE id = $id AND password = md5('$password') ";
            //$result_select = $connect->query($query);
            $result = mysqli_query($connect, $query);
            //$row = mysqli_fetch_array($result);
            // đóng kết nối
            $connect->close();
            $data = [];
            if ($result){
                echo "Cập nhật thành công";
                    $_SESSION['way'] = $way;
                    $_SESSION['phone'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $_SESSION['phone']));
                    $_SESSION['phone'] = $phone;
                    $_SESSION['day'] = $day;
                    $_SESSION['time'] = $time;
                    $_SESSION['pickup'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $_SESSION['pickup']));
                    $_SESSION['pickup'] = $pickup;
                    $_SESSION['arrive'] = trim(preg_replace('/[\t\n\r\s]+/', ' ', $_SESSION['arrive']));
                    $_SESSION['arrive'] = $arrive;
                    $_SESSION['rent'] = $rent;
                    $_SESSION['adult'] = $adult;
                    $_SESSION['children'] = $children;
                header("location: bookCar_XeHue.php");
            } 
            else echo"Lỗi cập nhật";
        } 
    }

    function forgotPassword(){
        // Xác thực địa chỉ email có giống với email đăng nhập hay không?
        if (!empty($_POST)){    
            $email = $_POST['g-email'];
            $reset_pass = $_POST['reset_pass'];
            $new_reset_pass = $_POST['new_reset_pass'];
            $get_forget_pass = $reset_pass;
            $connect = mysqli_connect('localhost:3306', 'root', '12345', 'xehue');
                if (md5($reset_pass) != md5($new_reset_pass)){
                    echo "<span style='color: red; text-align: center; display: block; font-size: 18px;text-transform: uppercase;'>
                    Mật khẩu nhập lại không chính xác!</span>";
                } else {
                    $sql = "SELECT COUNT(id) FROM register";
                    $result = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($result) $d = $row['COUNT(id)'];
                    for ($i=1; $i<=$d; $i++){
                        $query = "SELECT email FROM register where id = '$i'";
                        $re = mysqli_query($connect, $query);
                        $row_s = mysqli_fetch_array($re);
                        //var_dump($row_s);
                        //echo $row_s['email'];
                        echo "<br>";
                        if ($email == $row_s['email']) {
                            //echo "$get_forget_pass";
                            $up = 
                        "UPDATE register SET password = md5('$reset_pass'), repassword = md5('$new_reset_pass') where id = '$i' ";
                        $result_up = mysqli_query($connect, $up);
                        if ($result_up){
                            echo "<script>alert('Đổi mật khẩu thành công!')</script>";
                            header("location: login_XeHue.php");
                        }
                            break;
                        } else {
                            echo "<script>alert('Thất bại!')</script>";
                            break;
                        }
                       
                    }
                        $connect->close();
                }
        }    
    }

    // //Xác thực email và quên mật khẩu
    // function sanitize_my_email($field) {

    // // Loại bỏ ký tự không hợp lệ
    // $field = filter_var($field, FILTER_SANITIZE_EMAIL);

    // // Xác thực Email
    // if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
    //         return true;
    // } else {
    //         return false;
    // }
    // }
    // $email = $_POST['g-email'];
    // $to_email = $email;
    // $subject = 'Chúng tôi cấp lại mật khẩu cho bạn';
    // $message = "Đây là mật khẩu mới của bạn $get_forget_pass";
    // $headers = 'From: kingproup1111@gmail.com';

    // // Kiểm tra xem địa chỉ nhận có hợp lệ không
    // $secure_check = sanitize_my_email($to_email);
    // if (!empty($email)){
    //     if ($secure_check == false) {
    //         echo "Địa chỉ email không hợp lệ !";
    //     } else { //send email 
    //         mail($to_email, $subject, $message, $headers);
    //         echo "Cung cấp mật khẩu giành cho bạn";
    //     }
    // }
    
?>
