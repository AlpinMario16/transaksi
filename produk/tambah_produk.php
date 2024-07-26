<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUK
            </div>
            <div class="card-body">
              <form action="simpan_produk.php" method="POST">
              <div class="form-group">
                  <label>GAMBAR</label>
                  <input type="file" name="gamar" id="filegambar">
                </div>
                <div class="form-group">
                    <label>NAMA PRODUK</label>
                    <input type="text" name="nama_produk" placeholder="Masukkan Nama produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>HARGA PRODUK</label>
                  <input type="text" name="harga" placeholder="Masukkan Jumlah Harga" class="form-control">
                </div>

                <div class="form-group">
                  <label>JUMLAH STOK</label>
                  <input type="text" name="stok" placeholder="Masukkan jumlah Stok" class="form-control">
                </div>

                <div class="form-group">
                  <label>KATEGORI</label>
                  <input type="text" name="kategori_produk" placeholder="Masukkan Kategori" class="form-control">
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