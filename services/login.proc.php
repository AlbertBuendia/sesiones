<?php
include 'connection.php';
if (isset($_POST['email']) /*&& isset($_POST['psswd']*/) {
    //echo md5($_POST['psswd']);
    $email=$_POST['email'];
    $psswd=md5($_POST['psswd']);
    $query='SELECT * from tb_user where email="'.$email.'" AND passwd="'.$psswd.'"';
    $result=mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)){
        
    }
} else {
    header('Location: ../index.php');
}
?>