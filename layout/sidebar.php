

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #343a40;
            position: fixed;
            height: 100%;
            overflow: auto;
            transition: width 0.5s, margin-left 0.5s;
            color: white;
        }

        .sidebar.collapsed {
            width: 0;
            margin-left: -250px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a.active {
            background-color: #007bff;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #575d63;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.5s;
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .content.collapsed {
            margin-left: 0;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                transition: height 0.5s;
            }
            .sidebar a { float: left; }
            .content { margin-left: 0; }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .toggle-btn {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .toggle-btn:hover {
            background-color: #575d63;
        }

        h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            font-size: 1.5rem;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 10px 10px 0 0;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    

<div class="sidebar">

<a href="../transaksi/dashboard.php" target="content-frame">Dashboard</a>
<a href="../transaksi/kasir/index.php" target="content-frame">Kasir</a>
<a href="../transaksi/transaksi/index.php" target="content-frame">Transaksi</a>
<a href="../transaksi/produk/index.php" target="content-frame">Produk</a>
<a href="../transaksi/supplier/index.php" target="content-frame">Supplier</a>
</div>

<div class="content">
<iframe name="content-frame" src="dashboard.php"></iframe>
</div>
    </body>
