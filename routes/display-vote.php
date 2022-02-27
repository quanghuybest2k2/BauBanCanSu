<?php

    include("../api/connection.php");
   // $display_name = $_POST['display'];

    $display = mysqli_query($connect,"SELECT create_vote FROM user WHERE id = 1");
   
    // SELECT create_vote FROM user WHERE id = 1;  

while($row = mysqli_fetch_array($display)) {
     echo "<h1>"."<label>Tên cuộc bỏ phiếu: </label>".$row["create_vote"]."</h1>";
    }
?>