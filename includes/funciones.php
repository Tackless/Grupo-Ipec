<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isRol($rol) {
    if ($_SESSION['rol'] === '1' ) {
        return;
    } else if ($_SESSION['rol'] != $rol) {
        header('Location: /');
    }
}

function validarORedireccionar(string $url, int $limite) {
    // Validar que sea un ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id || $id > $limite || $id < 1) {
        header("Location: /${$url}");
    }

    return $id;
}

function esUltimo(string $actual, string $proximo) : bool {

    if ($actual != $proximo) {
        return true;
    } 
    return false;
}