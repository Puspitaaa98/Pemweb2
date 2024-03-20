<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

if ($email == 'pitaa@gmail.com' && $password == 'puspitaaa') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}