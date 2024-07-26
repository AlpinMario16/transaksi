<?php 
                      include('C:\laragon\www\transaksi\koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM transaksi");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                  <a href="..\cetak\index.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-warning">CETAK</a>
