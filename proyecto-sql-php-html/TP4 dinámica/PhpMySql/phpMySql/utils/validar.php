<?php
// Función para validar el CAPTCHA
function validarCaptcha($captcha) {
    $secretKey = '65f873b2-912c-4da6-a170-00bcb674eb7c';
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
    $responseKeys = json_decode($response, true);

    return intval($responseKeys['success']) === 1;
}
