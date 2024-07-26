<?php 
  
  include('C:\laragon\www\transaksi\koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM transaksi WHERE id_transaksi = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="update_transaksi.php" method="POST">
                
                <div class="form-group">
                  <label>NOMINAL</label>
                  <input type="text" name="nominal" value="<?php echo $row['nominal'] ?>" placeholder="Masukkan Nominal" class="form-control">
                  <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>">
                </div>

                <div class="form-group">
                  <label>TANGGAL</label>
                  <input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" placeholder="Masukkan Tanggal" class="form-control">
                </div>

            <div class="form-group">
                <label>TOTAL</label>
                <input type="text" name="total" value="<?php echo $row['total'] ?>" placeholder="Masukkan Total Harga" class="form-control">
            </div>
            <div class="form-group">
                <label>KEMBALIAN</label>
                <input type="text" name="kembalian" value="<?php echo $row['kembalian'] ?>" placeholder="Masukkan Jumlah Kembalian" class="form-control">
            </div>

                
                <button type="submit" class="btn btn-success">UPDATE</button>
                

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