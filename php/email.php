<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require "../vendor/autoload.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "testeemail458@gmail.com";
$mail->Password = "testeemail2020";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

$mail->setFrom($email, $nome);
$mail->AddAddress("instituto@gehon.org.br");

$mail->Subject = "Contato pelo site";
$mail->isHTML(true);
$mail->Body = "
    <head>
    <meta charset='UTF-8'>
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400&display=swap');
    </style>
    <h2 style=\"font-family: Raleway; font-weight: 400; color: #3369c8\">$nome</h2>
    <h4 style=\"font-family: Raleway; font-weight: 400; color: #3369c8\">$email</h4>
    <br>
    <h3 style=\"font-family: Raleway; font-weight: 400; color: #3369c8\">Mensagem:</h3>
    <p style=\"font-family: Raleway; font-size: 1rem;\">
    $mensagem
    
    </p>";

if ($mail->Send()) {
    $_SESSION["email"] = "valid";
} else {
    $_SESSION["email"] = "invalid";
}

header("location: ../index.php");
