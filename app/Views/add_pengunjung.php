<!DOCTYPE html>
<html>

<head>
    <title>Input Data Pengunjung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="/js/theme.js"></script>
</head>

<body>
    <script>
        bg();
    </script>
    <br>
    <center>
        <button type="submit" class="btn btn-secondary text-right" onclick="mode()">CHANGE THEME</button>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center>
                    <br>
                    <h1>INPUT DATA PENGUNJUNG</h1>
                </center>
                <br />
                <form action=<?= base_url("/pengunjung/save") ?> method="post">
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Asal Instansi :</label>
                        <input type="text" class="form-control" name="instansi">
                    </div>
                    <div class="form-group">
                        <label>Alasan Berkunjung :</label>
                        <input type="text" class="form-control" name="alasan">
                    </div>
                    <!-- <div class="form-group">
                        <label>Tanggal Kunjungan :</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div> -->

                    <input type="submit" class="btn btn-primary" value="Save" name="submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>