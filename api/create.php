<?php
    include("connection.php");
    //$gid = $_POST['gid'];
    //$uid = $_SESSION['id'];
    // $role = $_POST['role'];
    $vote_name = $_POST['vote-name'];

    $create_vote = mysqli_query($connect,"UPDATE user set create_vote = '$vote_name' where id = 1");
   
    // UPDATE user set create_vote = 'Bí Thư' WHERE id = 6;
        if($create_vote){
            echo '<script>
                    alert("Tạo bỏ phiếu thành công!");
                    window.location = "../routes/dashboard.php";
                </script>';
        }
        else{
            echo '<script>
                    alert("Không thành công!");
                    window.location = "../routes/dashboard.php";
                </script>';
        }
?>