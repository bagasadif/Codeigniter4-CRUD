<!DOCTYPE html>
<html>

<head>
  <title>Data Pengunjung Perpustakaan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    table,
    th,
    td {
      text-align: center;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="/js/theme.js"></script>
</head>

<body>
  <script>
    bg();
  </script>
  <div class="container">

    <center>
      <br>
      <h1>DATA PENGUNJUNG PERPUSTAKAAN</h1>
      <br>
    </center>

    <div class="row">
      <div class="col-12 col-sm-4">
        <form action=<?= base_url("pengunjung/add_new"); ?> method="post">
          <input type="submit" class="btn btn-primary" value="TAMBAH PENGUNJUNG" name="Submit">
        </form>
      </div>

      <div class="col-12 col-sm-4 text-center">
        <button type="submit" class="btn btn-secondary text-right" onclick="mode()">CHANGE THEME</button>
      </div>


      <div class="col-12 col-sm-4 text-right">
        <form action=<?= base_url("logout"); ?> method="GET">
          <input type="submit" class="btn btn-danger text-right" value="LOGOUT" name="Submit">
      </div>
    </div>

    <br>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA</th>
          <th>ASAL INSTANSI</th>
          <th>ALASAN BERKUNJUNG</th>
          <th>TANGGAL DAN WAKTU</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 0;
        foreach ($pengunjung as $row) :
          $no++
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["instansi"]; ?></td>
            <td><?php echo $row["alasan"]; ?></td>
            <td><?php echo $row["tanggal"]; ?></td>
            <td> <?= anchor("pengunjung/edit/{$row['id']}", "Edit") ?>
              <a onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row["nama"]; ?> ?');" href=<?= base_url("pengunjung/delete/{$row['id']}"); ?>>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>