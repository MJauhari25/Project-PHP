<?php
    ob_start();
    session_start();
    require 'koneksi1.php';
    $username = $_POST['idusername'];
    $pw = $_POST['idpassword'];
    $nama = $_POST['idnama'];
    $alamat = $_POST['idalamat'];
    $jenis_kelamin = $_POST['idjeniskelamin'];
    $no_telp = $_POST['idnotelp'];
    $no_ktp = $_POST['idnoktp'];
    $cek_username=mysqli_num_rows(mysqli_query($koneksi,
    "SELECT nama,alamat,jenis_kelamin,no_ktp FROM 02_tbl_member WHERE nama ='$nama'")); 
        
        if ($cek_username > 0) {
            ?>
            <script language="JavaScript">
                alert('Data sudah ada');
                document.location='form.php';
            </script>
            <?php
        }
        //proses    
        else{
            $sql = "INSERT into 02_tbl_member(`username`, `password`, `nama`, `alamat`, `jenis_kelamin`, `no_telp`, `no_ktp`)
            VALUES('$username','$pw','$nama','$alamat','$jenis_kelamin','$no_telp','$no_ktp')";
            $result = $koneksi->query($sql);
                if($sql){
                     ?>
                    <script language="JavaScript">
                        alert('Berhasil Mendaftarkan');
                        document.location='index.php';
                    </script>
                    <?php
                }
                else {
                    echo "<div><b>Oops!</b> 404 Error Server.</div>";
                }
            }
            ?>