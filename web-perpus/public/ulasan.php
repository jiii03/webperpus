<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row mb-3">
        <div class="col-md-12 ">
            <a href="?page=tambah_ulasan" class="btn btn-primary">+ Tambah Ulasan</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Aksi</th>   
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM book_review LEFT JOIN user on user.UserId = book_review.UserId LEFT JOIN buku on buku.BookId = book_review.BookId");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['Username']; ?></td>
                    <td><?php echo $data['Title']; ?></td>
                    <td><?php echo $data['Review']; ?></td>
                    <td><?php echo $data['Rating']; ?></td>
                    <td>
                        <a href="?page=ubah_ulasan&&id=<?php echo $data['ReviewId'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_ulasan&&id=<?php echo $data['ReviewId'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
        </div>
    </div>