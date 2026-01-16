<?php

require_once 'config/conn.php';


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    $delete_query = "DELETE FROM peserta WHERE id='$id'";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Pendaftaran | Data Peserta</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar bg-dark">
    <a class="navbar-brand text-light h1 mx-3 mb-0" href="<?= $_SERVER['PHP_SELF']; ?>">Daftar Peserta</a>
  </nav>
  <div class="container my-5">
    <!-- ERR ALERT -->
    <?php if (isset($_GET['delete']) && !$result): ?>
    <div class="alert alert-danger d-flex align-items-center gap-3" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
      </svg>
      <div>Data gagal dihapus</div>
    </div>
    <?php endif; ?>
    
    <h1 class="fs-3 text-center">Form Pendaftaran Peserta</h1>
    
    <div class="overflow-x-auto my-3">
      <table class="table table-bordered">
        <thead>
          <tr class="table-primary text-center">
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Alamat</th>
            <th scope="colgroup" colspan="2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $select_query = "SELECT * FROM peserta";
          $result = mysqli_query($conn, $select_query);
          
          $no = 0;
          while ($data = mysqli_fetch_array($result)):
              $no++;
          ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['sekolah']; ?></td>
            <td><?= $data['jurusan']; ?></td>
            <td><?= $data['no_hp']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><a class="btn btn-sm btn-warning" href="update.php?update=<?= $data['id']; ?>" role="button">Update</a></td>
            <td><a class="btn btn-sm btn-danger" href="index.php?delete=<?= $data['id']; ?>" role="button">Hapus</a></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    
    <a class="btn btn-primary" href="create.php" role="button">Peserta Baru</a>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>