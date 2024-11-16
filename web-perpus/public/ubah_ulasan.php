<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $BookId = $_POST['BookId'];
                        $UserId = $_SESSION['user']['UserId'];
                        $Review = $_POST['Review'];
                        $Rating = $_POST['Rating'];
                        $query = mysqli_query($koneksi, "UPDATE book_review set 
                          BookId='$BookId',
                          Review ='$Review',
                          Rating='$Rating' where ReviewId=$id" );
                            
                            if ($query) {
                                echo '<script>alert("Ulasan Berhasil di Ubah."); 
                                location.href="index.php?page=ulasan"</script>';
                            } else {
                                echo '<script>alert("Gagal Mengubah Ulasan.");</script>';
                            }
                        
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM book_review where ReviewId=$id");
                        $data = mysqli_fetch_array($query);
                    
                    ?>
                    <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="col-md-8">
                        <select name="BookId" class="form-select">
                            <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                    ?> 
                                    <option <?php if($data['BookId'] == $buku['BookId']) echo 'selected'; 
                                    ?> value="<?php echo $buku['BookId']; ?>"><?php echo $buku['Title']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>    
                    </div> 
                </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Review</div>
                        <div class="col-md-8">
                                <textarea name="Review"  rows="5" class="form-control"><?php echo $data['Review']; ?></textarea>
                        </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                                <select name="Rating" class="form-control">
                                    
                                    <?php
                                        for ($i=1; $i <= 10; $i++) { 
                                            ?>
                                            <option 
                                            <?php 
                                            if($data['Rating'] == $i) echo 'selected'; ?>><?php echo $i ?></option>
                                            <?php
                                        }
                                    ?>
                                    
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
