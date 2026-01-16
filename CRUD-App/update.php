<?php

require_once 'config/conn.php';


function ftr($value) {
    return htmlspecialchars(stripslashes(trim($value)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = ftr($_POST['id']);
    
    $nama = ftr($_POST['nama']);
    $sekolah = ftr($_POST['sekolah']);
    $jurusan = ftr($_POST['jurusan']);
    $no_hp = ftr($_POST['no_hp']);
    $alamat = ftr($_POST['alamat']);
    
    $update_query = "UPDATE peserta SET
        nama='$nama',
        sekolah='$sekolah',
        jurusan='$jurusan',
        no_hp='$no_hp',
        alamat='$alamat'
        WHERE id='$id'
    ";
    $result = mysqli_query($conn, $update_query);
    if ($result) {
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Pendaftaran | Perbarui Data</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <!-- ERR ALERT -->
    <?php if (($_SERVER['REQUEST_METHOD'] == 'POST') && !$result): ?>
    <div class="alert alert-danger d-flex align-items-center gap-3" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
      </svg>
      <div>Data gagal diperbarui</div>
    </div>
    <?php endif; ?>
    
    <h1 class="fs-3 mb-3">Perbarui Peserta</h1>
    
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="mb-3">
        <label class="form-label" for="formNama">Nama</label>
        <input class="form-control" type="text" name="nama" id="formNama" placeholder="Masukkan nama peserta" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="formSekolah">Sekolah</label>
        <input class="form-control" type="text" name="sekolah" id="formSekolah" placeholder="Masukkan nama sekolah" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="formJurusan">Jurusan</label>
        <input class="form-control" type="text" name="jurusan" id="formJurusan" placeholder="Masukkan nama jurusan" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="formNomor">Nomor HP</label>
        <input class="form-control" type="number" name="no_hp" id="formNomor" placeholder="Masukkan nomor HP" required>
      </div>
      <div class="mb-4">
        <label class="form-label" for="formAlamat">Alamat</label>
        <input class="form-control" type="text" name="alamat" id="formAlamat" placeholder="Masukkan nama Alamat" required>
      </div>
      
      <input type="hidden" name="id" value="<?= $_GET['update']; ?>">
      
      <button class="btn btn-success" type="submit">Update</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>