<?php 
    include 'connect.php';
    // if ($_SESSION['login'] != 1) {
    //     echo "Bạn chưa đăng nhập";
    //     exit;
    // }
    // else echo"Đăng nhập thành công";
    get_book_car();

    // if ((isset($_SESSION['id'])) && (isset($_SESSION['user']))) {
    //     echo "Log out";
    // } else echo "re login";

    
// if (isset($_COOKIE["PHPSESSID"])) {
//     echo "active";
// } else {
//     echo "don't see one";
// }
// if (!isset($_SESSION)){
//         session_start();
//         $valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
//         if (!$valid_session) {
//         header('Location: login_XeHue.php');
//         exit();
//     }
// } else echo "false";


?>
<?php 
    $connect = new mysqli('localhost:3306', 'root', '', 'id17324133_xehue');
    if (!$connect) echo "Kết nối thất bại";
    else echo "Kết nối thành công";
    $connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin về đặt xe</title>
</head>
<body>
<div class="form-bookcar">
                    <h2><span class="title-bookcar">Đặt xe</span></h2>
                    <div class="container">
                        <form action="" method="POST">
                            <div class="form-container">
                                <!-- Hành trình -->
                                <div class="way">
                                    <label for="">Hành trình (<font>*</font>)</label>
                                    <select name="way" id="way-select">
                                        <option selected value="<?php echo $_SESSION['way'] ?>"></option>
                                    </select>
                                </div>
                                <!-- Số điện thoại - Họ tên -->
                                <div class="phone-name">
                                    <div class="phone">
                                        <label for="">Số điện thoại (<font>*</font>)</label>
                                        <input type="text" name="phone" id="phone-input" placeholder="Nhập số" value="<?php echo $_SESSION['phone'] ?>">
                                    </div>
                                    <div class="name">
                                        <label for="">Họ tên (<font>*</font>)</label>
                                        <input type="text" name="name" disabled  id="name-input" placeholder="Nhập tên" value= "<?php echo $_SESSION['name'] ?>">
                                    </div>
                                </div>
                                <!-- Ngày đi - Giờ đi -->
                                <div class="day-time">
                                    <div class="day">
                                        <label for="">Ngày đi (<font>*</font>)</label>
                                        <input type="date" name="day" id="day-input" value="<?php echo $_SESSION['day'] ?>">
                                    </div>
                                    <div class="time">
                                        <label for="">Giờ đi (<font>*</font>)</label>
                                        <input type="time" name="time" id="time-input" value="<?php echo $_SESSION['time'] ?>">
                                    </div>
                                </div>
                                <div class="pickup-arrive">
                                    <div class="place-pickup">
                                        <label for="">Nơi đón (<font>*</font>)</label>
                                        <input type="text" name="pickup" id="pickup-input" value="<?php echo $_SESSION['pickup'] ?>">
                                    </div>
                                    <div class="place-arrive">
                                        <label for="">Nơi đến (<font>*</font>)</label>
                                        <input type="text" name="arrive" id="arrive-input" value="<?php echo $_SESSION['arrive'] ?>">
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
                                            <option selected value="<?php echo $_SESSION['rent'] ?>"></option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="adult">
                                        <label for="">Người lớn (<font>*</font>)</label>
                                        <input type="number" name="adult" id="adult-input" min="1" value="<?php echo $_SESSION['adult'] ?>">
                                    </div>
                                    <div class="children">
                                        <label for="">Trẻ em</label>
                                        <input type="number" name="children" id="children-input" min="0" value="<?php echo $_SESSION['children'] ?>">
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
</body>
</html>