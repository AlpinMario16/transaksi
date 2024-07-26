<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <title>PRODUK</title>
    <style>
        /* Custom styling for the card header */
        .card-header {
            font-size: 2rem; /* Larger font size for the header */
            padding: 10px; /* Increased padding */
            background-color: #343a40; /* Optional: dark background for better contrast */
            color: white; /* Optional: white text color for better readability */
            border-bottom: 2px solid #dee2e6; /* Optional: border at the bottom */
        }

        /* Adjust the container to fit the new header size */
        .container {
            margin-top: 50px; /* Increased margin-top to fit larger header */
        }
    </style>
</head>

  <body>

    <div class="container" style="margin-top: 70px">
      <div class="row">
        <div class="col-md-16">
          <div class="card">
            <div class="card-header">
              PRODUK
            </div>
            <div class="card-body">
              <a href="tambah_produk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">NAMA PRODUK</th>
                    <th scope="col">HARGA PRODUK</th>
                    <th scope="col">JUMLAH STOK</th>
                    <th scope="col">KATEGORI </th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('C:\laragon\www\transaksi\koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM produk");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><img src="<?php echo $row['gambar']; ?>" alt="Image"></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                    <td><?php echo $row['stok'] ?></td>
                    <td><?php echo $row['kategori_produk'] ?></td>
                      <td class="text-center">
                        <a href="edit_produk.php?id=<?php echo $row['id_produk'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_produk.php?id=<?php echo $row['id_produk'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
