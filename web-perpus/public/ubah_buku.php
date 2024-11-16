<h1 class="mt-4" align="center">Change Books</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                            $CategoryId = $_POST['CategoryId'];
                            $Title = $_POST['Title'];
                            $Author = $_POST['Author'];
                            $Publisher = $_POST['Publisher'];
                            $PublishYear = $_POST['PublishYear'];
                            $query = mysqli_query($koneksi, "UPDATE buku set CategoryId='$CategoryId', Title='$Title', Author='$Author', Publisher='$Publisher', PublishYear='$PublishYear'  where BookId=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil."); location.href="index.php?page=buku"</script>';
                            } else {
                                echo '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        } 
                   
                    $query = mysqli_query($koneksi, ("SELECT*FROM buku where BookId=$id"));
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Book Category</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="CategoryId" value="<?php echo $data['CategoryId'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Title</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Title" value="<?php echo $data['Title'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Authors</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Author" value="<?php echo $data['Author'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Publisher</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Publisher" value="<?php echo $data['Publisher'] ?>"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Publish Year</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="PublishYear" value="<?php echo $data['PublishYear'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 