<?php
    include('connection.php');
    $sql = "ALTER TABLE tamil_albums RENAME TO tamil_songs";

    $result = mysqli_query($conn,$sql);
?>