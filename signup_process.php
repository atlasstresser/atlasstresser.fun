<?php
// signup_process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Validasi data (pastikan tidak kosong, dll.)
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Simpan data ke file data.txt
    $file = 'data.txt';
    $data = $username . "," . $email . "," . $password . "\n";

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "Error saving data.";
        exit;
    }

    // Redirect ke halaman login
    header("Location: login.php");
    exit;
} else {
    echo "Invalid request method.";
}
?>
