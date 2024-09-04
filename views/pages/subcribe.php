<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Emaili yoxlamaq
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    // İstifadəçinin IP adresini almaq
    $ip_address = $_SERVER['REMOTE_ADDR'];

    if ($email) {
        // E-mail və IP məlumatını data.txt faylına yazmaq
        $data = "Email: " . $email . ", IP: " . $ip_address . PHP_EOL;

        // Yazma prosesini yoxlamaq üçün file_put_contents funksiyasının qaytardığı nəticəni yoxlayırıq
        if (file_put_contents('./data.txt', $data, FILE_APPEND | LOCK_EX)) {
            echo "Email uğurla qəbul edildi!";
        } else {
            echo "Fayla yazmaq mümkün olmadı.";
        }


    } else {
        echo "Xahiş edirik, düzgün email daxil edin.";
    }
}

