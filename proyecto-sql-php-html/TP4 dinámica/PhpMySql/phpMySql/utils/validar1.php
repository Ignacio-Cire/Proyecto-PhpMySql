<?php
// Función para validar el CAPTCHA
function validarCaptcha($captcha) {
    $secretKey = '6LfhnVkqAAAAAAYhv6_sMWmJTAwtMErZLcOiVPvV';
    $response = file_get_contents("https://hcaptcha.com/siteverify?secret=$secretKey&response=$captcha");
    $responseKeys = json_decode($response, true);
    return intval($responseKeys['success']) === 1;
}