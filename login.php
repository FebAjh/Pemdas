<?php

$user = $_POST["username"];

if ($user == "schoolmart" && $_POST["pass"] == "schoolmart") {
    # code...
    echo "LOGIN BERHASIL";
    header("location:dashboard.php");
    // alihkan halaman
}else {
    echo "LOGIN GAGAL";
}






?>