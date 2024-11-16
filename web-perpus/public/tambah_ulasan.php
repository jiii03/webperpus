<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $BookId = $_POST['BookId'];
                        $UserId = $_SESSION['user']['UserId'];
                        $Review = $_POST['Review'];
                        $Rating = $_POST['Rating'];
                        $query = mysqli_query($koneksi, "INSERT INTO book_review(BookId, UserId, Review, Rating) values ('$BookId','$UserId','$Review','$Rating')" );
                            
                            if ($query) {
                                echo '<script>alert("Ulasan Berhasil di Buat."); location.href="index.php?page=ulasan"</script>';
                            } else {
                                echo '<script>alert("Gagal Membuat Ulasan.");</script>';
                            }
                        
                        }
                    
                    ?>
                    <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="col-md-8">
                        <select name="BookId" class="form-select">
                            <?php
                            $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                            while ($buku = mysqli_fetch_array($buk)) {
                            ?> 
                            <option value="<?php echo $buku['BookId']; ?>"><?php echo $buku['Title']; ?></option>
                            <?php
                            }
                            ?>
                        </select>    
                    </div> 
                </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8">
                                <textarea name="book_review" id=""  rows="5" class="form-control"></textarea>
                        </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                                <select name="Rating" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
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
