<h2 align="center" >Laporan Peminjaman</h2>
<table border="1" cellspacing="0" cellpading="5">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                      
                </tr>
                <?php
                include "koneksi.php";
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM borrowing LEFT JOIN user on user.UserId = borrowing.UserId LEFT JOIN buku on buku.BookId = borrowing.BookId");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <td>
                        <a href="?page=ubah_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_ulasan&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            <script>
                window.print();
                setTimeout(function() {
                    window.close();
                }, 100 );
            </script>