<h1 class="mt-4">Change Category Book</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {            
                        if(!empty($_POST['bookcategory'])) {
                            $bookcategory = $_POST['bookcategory'];
                            $query = mysqli_query($koneksi, "UPDATE bookcategory set bookcategory='$bookcategory' where CategoryName=$id");

                            if ($query) {
                                echo '<script>alert("Ubah Data Berhasil."); location.href="index.php?page=kategori"</script>';
                            } else {
                                echo '<script>alert("Ubah Data Gagal.");</script>';
                            }
                        } else {
                            echo '<script>alert("Nama Kategori harus diisi.");</script>';
                        }
                    }
                   
                    $query = mysqli_query($koneksi, ("SELECT*FROM bookcategory where CategoryId=$id"));
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Category Name</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="bookcategory" value="<?php echo $data['CategoryName'] ?>"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>