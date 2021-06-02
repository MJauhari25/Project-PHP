<!doctype html>
<html lang="en">
  <head>
    <title>Pengembalian Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <style type="text/css">
      body{
        background: #383a3d;
        padding: 10vh ;  
      }

      form{
        background: #fff;
      }

      #form-container{
        border-radius: 10px;
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <section class="container-fluid">
      <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-7">
      <form action="action_kembali.php" class="row g-4" id="form-container"  method="POST">
        <h2>Pengembalian Buku</h2><br>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nama </label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Masukkan Nama"name="nama" required>
        </div>

        <div class="col-12">
          <label for="inputAddress2" class="form-label">Judul Buku </label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Judul Buku" name="judul" required>
        </div>

        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nomor KTP/NIK</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor KTP/NIK" name="idnoktp" required>
        </div>

        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nomor Telepon </label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Telepon" name="notelp" required>
        </div>

        <div class="col-12">
            <label for="inputAddress2" class="form-label"> tanggal</label>
        	<input class="form-control" type="date" id="inputAddress2" name="tanggal" placeholder="tanggal.." required>
		    </div>
          
        <div class="col-6">
          <button type="submit" class="btn btn-primary">Kembalikan Buku</button>
        </div>
        
      </form>
    </section> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
  </body>
</html>