<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cetak Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .table {
            width: 100%;
            margin-bottom: 20px;
        }
        .table th, .table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }
        .btn-print {
            display: block;
            width: 100px;
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <h1>Detail Transaksi</h1>
        <p>ID Transaksi: <?php echo $_GET['id']; ?></p>
    </div>

    <?php 
        include('C:\laragon\www\transaksi\koneksi.php');
        $id = $_GET['id'];
        $query = mysqli_query($connection,"SELECT * FROM transaksi WHERE id_transaksi='$id'");
        $row = mysqli_fetch_array($query);
    ?>

    <table class="table">
        <tr>
            <th>NO.</th>
            <td><?php echo $row['id_transaksi']; ?></td>
        </tr>
        <tr>
            <th>NOMINAL</th>
            <td><?php echo $row['nominal']; ?></td>
        </tr>
        <tr>
            <th>TANGGAL</th>
            <td><?php echo $row['tanggal']; ?></td>
        </tr>
        <tr>
            <th>TOTAL</th>
            <td><?php echo $row['total']; ?></td>
        </tr>
        <tr>
            <th>KEMBALIAN</th>
            <td><?php echo $row['kembalian']; ?></td>
        </tr>
    </table>

    <button class="btn btn-primary btn-print" onclick="window.print()">Print</button>
</div>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
