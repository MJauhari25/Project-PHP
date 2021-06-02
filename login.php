<?php
    ob_start();
    session_start();
    include "koneksi1.php";
    $user        = $_POST['idusername'];
    $password    = $_POST['idpassword'];
    $_SESSION['idnim'] = $user;
    $sql = "SELECT * FROM 02_tbl_member where username ='$user'";
    $qry = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($qry);
    $row = mysqli_fetch_array($qry);

    if ($num==0 OR $password!=$row['password']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai !');
            document.location='form_login.php';
        </script>
    <?php
    }
    else {
        $_SESSION['Login']=1;
        header("Location: daftar_buku.php");
    }
    mysqli_close($Open);
?>