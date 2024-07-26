
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px; 
            background-color: #258af5;
            position: fixed;
            height: 100%;
            overflow: auto;
        }


        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }


        .sidebar a.active {
            background-color: #075eba;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        
        .content {
            margin-left: 250px;
            padding: 20px; 
            height: calc(100vh - 56px); 
            overflow-y: auto;
        }

       
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
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
    </style>
</head>
<body>
   
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
