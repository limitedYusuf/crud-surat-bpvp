<?php

    include '../conn.php';

    $id =$_GET['id'];

    mysqli_query($conn, "DELETE FROM user WHERE id='$id'");

    header('location:index.php');

?>