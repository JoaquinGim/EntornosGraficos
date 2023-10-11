<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;

echo "Página 1 - Número de visitas: " . $_SESSION['visitas'];
?>
