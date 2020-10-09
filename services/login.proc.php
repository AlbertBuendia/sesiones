<?php
include 'connection.php';
if (isset($_POST['email_user']) /*&& isset($_POST['psswd']*/) {
    //echo md5($_POST['psswd']);
    $email=$_POST['email_user'];
    $psswd=md5($_POST['passwd']);
    $query='SELECT * from tb_user where email_user="'.$email.'" AND passwd="'.$psswd.'"';
    //echo $query;
    $result=mysqli_query($conn, $query);
    // El usuario existe y su password es correcto
    if (mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['email_user']=$row['email_user'];
        $_SESSION['id']=$row['id_user'];
        header('Location: ../view/home.php');
    }else{
       header('Location: ../index.php');
    }
    
} else {
    header('Location: ../index.php');
}
?>