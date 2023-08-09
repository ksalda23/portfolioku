<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kartikosa239@gmail.com";
    $subject = "Pesan dari Formulir Kontak";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect atau tampilkan pesan sukses
    header("Location: index.html");
    exit;
}
?>