<?php
if ($_POST) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='index.html';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('Email tidak boleh kosong');location.href='index.html';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='index.html';</script>";
    } else {
        include "../conn.php";
        $insert = mysqli_query($conn, "insert into pelanggan (nama, email, password) value ('" . $username . "','" . $email . "','" . md5($password) . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Berhasil membuat akun baru');location.href='index.html';</script>";
        } else {
            echo "<script>alert('Gagal membuat akun, coba lagi');location.href='index.html';</script>";
        }
    }
}
