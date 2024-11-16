<h1 class="mt-4">Pinjam Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        if (isset($_POST['submit'])) {
                            $UserId = $_SESSION['user']['UserId'];
                            $BookId = $_POST['BookId'];
                            $LoanDate = $_POST['LoanDate'];
                            $ReturnDate = $_POST['ReturnDate'];
                            $LoanStatus = $_POST['LoanStatus'];
                            
                            $query = mysqli_query($koneksi, "INSERT INTO borrowing(UserId, BookId, LoanDate, ReturnDate, LoanStatus) values ('$UserId','$BookId','$LoanDate','$ReturnDate', '$LoanStatus')");
                                
                            if ($query) {
                                echo '<script>alert("Peminjaman Berhasil."); location.href="index.php?page=peminjaman"</script>';
                            } else {
                                echo '<script>alert("Gagal Melakukan Peminjaman: ' . mysqli_error($koneksi) . '");</script>';
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
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="LoanDate">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-2">Tanggal Pengembalian</div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="ReturnDate">
                            </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="LoanStatus" class="form-select">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                            
                            <button type="reset" class="btn btn-secondary">Reset</button>
                           
                            <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
