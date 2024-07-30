<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <title>Data Kasir</title>
    <style>
       
        .card-header {
            font-size: 2rem;
            padding: 10px; 
            background-color: #343a40; 
            color: white; 
            border-bottom: 2px solid #dee2e6; 
        }

       
        .container {
            margin-top: 50px; 
        }
    </style>
</head>

  <body>

  <div class="container" style="margin-top: 70px">
      <div class="row">
        <div class="col-md-16">
          <div class="card">
            <div class="card-header">
              DATA SUPPLIER
            </div>
            <div class="card-body">
              <a href="tambah_supplier.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NPWP</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NOMOR TELEPON</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('C:\laragon\www\transaksi\koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM supplier");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['npwp'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['no_tlp'] ?></td>
                      <td class="text-center">
                        <a href="edit_supplier.php?id=<?php echo $row['id_supplier'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_supplier.php?id=<?php echo $row['id_supplier'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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
