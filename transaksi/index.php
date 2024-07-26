<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <title>Data Kasir</title>
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
              TABEL TRANSAKSI
            </div>
            <div class="card-body">
              <a href="tambah_transaksi.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH TRANSAKSI</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NOMINAL</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">KEMBALIAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('C:\laragon\www\transaksi\koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM transaksi");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nominal'] ?></td>
                      <td><?php echo $row['tanggal'] ?></td>
                    <td><?php echo $row['total'] ?></td>
                    <td><?php echo $row['kembalian'] ?></td>
                      <td class="text-center">
                        <a href="edit_transaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_transaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        <a href="..\d_transaksi\index.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-warning">DETAIL</a>
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
