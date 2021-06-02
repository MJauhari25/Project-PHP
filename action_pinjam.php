<?php
if  ( ob_start()){
    session_start();
    require 'koneksi1.php';
    $username = $_POST['nama'];
    $judul = $_POST['judul'];
    $ktp = $_POST['ktp'];
    $telp = $_POST['telp'];
    $tanggal = $_POST['tanggal'];
    
    $selSto =mysqli_query($koneksi, "SELECT * FROM 02_tbl_buku WHERE judul_buku like'%$judul'");
    $sto    =mysqli_fetch_array($selSto);
    $stok    =$sto['stok'];
    //menghitung sisa stok 
    if ($stok == 0) {
        ?>
        <script language="JavaScript">
            alert('oops stok telah habis');
            document.location='peminjaman.php';
        </script>
        <?php
    }
    //proses    
    else{
        $sisa    =$stok-1;
        $insert =mysqli_query($koneksi, "INSERT INTO 
        `02_tbl_peminjaman`( `nama`, `judul_buku`, `ktp`, `no_hp`, `tgl_pinjam`) VALUES ('$username','$judul','$ktp','$telp','$tanggal')");
        $result = $koneksi->query($insert);
            if($insert){
                //update stok
                $upstok= mysqli_query($koneksi, "UPDATE 02_tbl_buku SET stok='$sisa' WHERE judul_buku like'$judul'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi pengeluaran barang berhasil ...');
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