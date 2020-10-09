<?php
session_start();
if (!isset($_SESSION['email_user'])) {
    header('Location: ../index.php');    
}
echo '<h1>Bienvenido '.$_SESSION['email_user'].'</h1>';
echo '<a href="../services/logout.proc.php">Cerrar sesion</a>';
?>