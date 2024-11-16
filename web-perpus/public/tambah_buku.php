<h1 class="mt-4">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $CategoryId = $_POST['CategoryId'];
                        $Title = $_POST['Title'];
                        $Author = $_POST['Author'];
                        $Publisher = $_POST['Publisher'];
                        $PublishYear = $_POST['PublishYear'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(CategoryId, Title, Author, Publisher, PublishYear) values ('$CategoryId','$Title','$Author','$Publisher','$PublishYear')" );
                            
                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil."); location.href="index.php?page=buku"</script>';
                            } else {
                                echo '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        
                        }
                    
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="CategoryId" id="" class="form-select">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM bookcategory");
                                while ($bookcategory = mysqli_fetch_array($kat)) {
                                   ?> 
                                   <option value="<?php echo $bookcategory['CategoryId']; ?>"><?php echo $bookcategory['CategoryName']; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>    
                        </div> 
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Title"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Author"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="Publisher"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="PublishYear"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>           
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
