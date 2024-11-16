<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=tambah_buku" class="btn btn-primary">+ Tambah Buku</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <th>No</th>
                <th>Category Name</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Publish Year</th>
                <th>Action</th>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN bookcategory on buku.CategoryId = bookcategory.CategoryId");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['CategoryName']; ?></td>
                    <td><?php echo $data['Title']; ?></td>
                    <td><?php echo $data['Author']; ?></td>
                    <td><?php echo $data['Publisher']; ?></td>
                    <td><?php echo $data['PublishYear']; ?></td>
                    <td>
                        <a href="?page=ubah_buku&&id=<?php echo $data['BookId'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_buku&&id=<?php echo $data['BookId'] ?>" class="btn btn-danger">Delete</a>
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