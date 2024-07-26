<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpan_transaksi.php" method="POST">
                
                <div class="form-group">
                  <label>NOMINAL</label>
                  <input type="text" name="nominal" placeholder="Masukkan Nominal" class="form-control">
                </div>

                <div class="form-group">
                  <label>TANGGAL</label>
                  <input type="date" name="tanggal" placeholder="Masukkan Tanggal" class="form-control">
                </div>

                <div class="form-group">
                  <label>TOTAL</label>
                  <input type="text" name="total" placeholder="Masukkan Total Harga" class="form-control">
                </div>

                <div class="form-group">
                  <label>KEMBALIAN</label>
                  <input type="text" name="kembalian" placeholder="Masukkan Kembalian" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-success">SIMPAN</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>