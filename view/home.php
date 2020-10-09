<!DOCTYPE html>
<html>
<body>
<h3>Home</h3>


<?php
include '../services/session.php';
echo '<h1>Bienvenido '.$_SESSION['email_user'].'</h1>';
echo '<a href="../services/logout.proc.php">Cerrar sesion</a>';
?>

<div>
</div>

</body>
</html>