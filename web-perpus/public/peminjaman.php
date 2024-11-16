<h1 class="mt-4">Laporan peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="?page=tambah_peminjaman" class="btn btn-primary"><i class="fa fa-plus"></i>Pinjam Buku</a>
               
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Book</th>
                            <th>Loan Date</th>
                            <th>Return Date</th>
                            <th>Loan Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM borrowing LEFT JOIN user ON user.UserId = borrowing.UserId LEFT JOIN buku ON buku.BookId = borrowing.BookId where borrowing.UserId=" . $_SESSION['user']['UserId']);
                        if ($query) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['Username']; ?></td>
                            <td><?php echo $data['Title']; ?></td>
                            <td><?php echo $data['LoanDate']; ?></td>
                            <td><?php echo $data['ReturnDate']; ?></td>
                            <td><?php echo $data['LoanStatus']; ?></td>
                            <td>
                                <?php
                                    if($data['LoanStatus'] != 'dikembalikan'){
                                ?>
                                <a href="?page=ubah_peminjaman&&id=<?php echo $data['BorrowingId'] ?>" class="btn btn-info">Edit</a>
                                <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_peminjaman&&id=<?php echo $data['BorrowingId'] ?>" class="btn btn-danger">Delete</a>
                                    <?php
                                    }
                                    ?>
                            </td>
                        </tr>
                        <?php
                            }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
