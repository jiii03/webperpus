<h1 class="mt-4">Book Loan Report</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Print Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Book</th>
                            <th>Loan Date</th>
                            <th>Return Date</th>
                            <th>Loan Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM borrowing LEFT JOIN user ON user.UserId = borrowing.UserId LEFT JOIN buku ON buku.BookId = borrowing.BookId");
                        if ($query) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['Title']; ?></td>
                            <td><?php echo $data['LoanDate']; ?></td>
                            <td><?php echo $data['ReturnDate']; ?></td>
                            <td><?php echo $data['LoanStatus']; ?></td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='7'>Tidak ada data yang ditemukan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
