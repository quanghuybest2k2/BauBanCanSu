<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Đã bầu chọn</b>';
    }
    else{
        $status = '<b style="color: yellow">Chưa bầu chọn</b>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trang web bầu ban cán sự lớp">
    <meta name="keywords" content="Bầu ban cán sự, website bầu ban cán sự lớp, Đại Học Đà Lạt">
    <title>BẦU BAN CÁN SỰ LỚP</title>
    <link rel="shortcut icon" href="https://dlu.edu.vn/wp-content/uploads/2020/07/cropped-logo_dlu-2-180x180.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/create.css">
</head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button">Trở về</button></a>
            <a href="logout.php"><button id="logout-button">Đăng xuất</button></a>
            <h1>HỆ THỐNG BẦU CỬ</h1>  
            </div>
            <!-- Tạo bỏ phiếu -->
            <?php include "create-button.php"; ?>
            <!-- Xong Tạo bỏ phiếu -->
            <!-- Tên cuộc bỏ phiếu -->
            <?php include "display-vote.php"; ?>
            <!-- Kết thúc cuộc bỏ phiếu -->
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Họ và tên : </b><?php echo $data['name'] ?><br><br>
                    <b>Số điện thoại : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Địa chỉ : </b><?php echo $data['address'] ?><br><br>
                    <b>Trạng thái bầu chọn : </b><?php echo $status ?>
                </div>
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Ứng viên <?php echo $i+1 ?>: </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Số phiếu bầu:</b> <?php echo $groups[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px; cursor: not-allowed;" type="button">Đã bầu chọn</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #222831; color: white; border-radius: 5px; cursor: pointer;" type="submit">Bầu chọn</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>Không có ứng viên nào cả.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>