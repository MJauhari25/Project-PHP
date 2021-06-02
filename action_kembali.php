<?php
if  ( ob_start()){
    session_start();
    require 'koneksi1.php';
    $username = $_POST['nama'];
    $judul = $_POST['judul'];
    $no_ktp = $_POST['idnoktp'];
    $no_telp = $_POST['notelp'];
    $tanggal = $_POST['tanggal'];
    
    $selSto =mysqli_query($koneksi, "SELECT * FROM 02_tbl_buku WHERE judul_buku like'%$judul'");
    $sto    =mysqli_fetch_array($selSto);
    $stok   =$sto['stok'];
    $cek_username=mysqli_query($koneksi,"SELECT * FROM 02_tbl_peminjaman WHERE nama ='$username'");
    //$nama_peminjam    =$peminjam['nama_peminjam'];
    //menghitung sisa stok
    if ($cek_username->num_rows == 0 ){
        ?>
        <script language="JavaScript">
            alert('Input Anda Tidak Sesuai');
            document.location='pengembalian.php';
        </script>
        <?php
    }
    //proses    
    else{
        $sisa    =$stok+1;
        $insert =mysqli_query($koneksi, "INSERT INTO 
        `02_tbl_pengembalian`( `nama`, `judul_buku`, `ktp`, `no_hp`, `tgl_kembali`) 
        VALUES ('$username','$judul','$no_ktp','$no_telp','$tanggal')");
            if($insert){
                //update stok
                $upstok= mysqli_query($koneksi, "UPDATE 02_tbl_buku SET stok='$sisa' WHERE judul_buku like'$judul'");
                ?>
                <script language="JavaScript">
                    alert('Pengembalian Buku telah Berhasil...');
                    document.location='index.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>