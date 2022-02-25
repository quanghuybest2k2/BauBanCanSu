<!--    Học phần: Đồ án cơ sở
        Người thực hiện: 
        Giảng viên hướng dẫn: 
        Đề tài: Tìm hiểu ngôn ngữ php và tạo website "Bỏ phiếu bầu ban cán sự lớp"
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trang web bầu ban cán sự lớp">
    <meta name="keywords" content="Bầu ban cán sự, website bầu ban cán sự lớp, Đại Học Đà Lạt">
    <title>ĐĂNG NHẬP</title>
    <link rel="shortcut icon" href="https://dlu.edu.vn/wp-content/uploads/2020/07/cropped-logo_dlu-2-180x180.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
            <center>
            <div id="headerSection">
            <h1>BẦU BAN CÁN SỰ LỚP</h1>  
            </div>
            <hr/>

            <div id="loginSection">
                <h2>Đăng nhập</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Nhập số điện thoại" required><br><br>
                    <input type="password" name="pass" placeholder="Nhập mật khẩu" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Cá nhân</option>
                        <option value="2">Ban cán sự</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Đăng nhập</button><br><br>
                    Bạn chưa có tài khoản? <a href="routes/register.php">Đăng ký</a>
                </form>
            </div>
            </center> 
            <hr/>
            <footer>
                <p>Copyright &copy;
                    <script type="text/javascript">
                        var y = new Date();
                        document.write(y.getFullYear());
                    </script>
                    <a target="_blank" href="https://dlu.edu.vn/" target="_blank">ĐẠI HỌC ĐÀ LẠT</a>. All rights reserved.
                </p>
            </footer>
    </body>
</html>