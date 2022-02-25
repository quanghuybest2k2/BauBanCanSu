<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trang web bầu ban cán sự lớp">
    <meta name="keywords" content="Bầu ban cán sự, website bầu ban cán sự lớp, Đại Học Đà Lạt">
    <title>ĐĂNG KÝ</title>
    <link rel="shortcut icon" href="https://dlu.edu.vn/wp-content/uploads/2020/07/cropped-logo_dlu-2-180x180.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <center>
            <div id="headerSection">
            <h1>ĐĂNG KÝ THÀNH VIÊN</h1>  
            </div>
            <hr>

            <h2>Thông tin cá nhân</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Họ và tên" required>&nbsp
                    <input type="number" name="mob" placeholder="Số điện thoại" required><br><br>
                    <input type="password" name="pass" placeholder="Mật khẩu" required>&nbsp
                    <input type="password" name="cpass" placeholder="Nhập lại mật khẩu" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Địa chỉ" required><br><br>
                    <div id="upload" style="width: 30%">
                        Ảnh đại diện: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Chức danh của bạn:
                        <select name="role">
                            <option value="1">Cá nhân</option>
                            <option value="2">Ban cán sự</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Đăng ký</button><br><br>
                    Bạn đã có tài khoản? <a href="../">Đăng nhập</a>
                </form>
            </center>
    </body>
</html>