<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Kasir</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH KASIR
            </div>
            <div class="card-body">
              <form action="simpan_kasir.php" method="POST">
                
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Kasir" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="no_tlp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>


                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="jabatan" class="form-control">
                    <option value="">Pilih Jabatan</option>
                    <option value="kasir">Kasir</option>
                    <option value="manajer">Manajer</option>
                  </select>
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