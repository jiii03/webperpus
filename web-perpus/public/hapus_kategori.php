<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM bookcategory where CategoryId=$id");
?>
<script>
    alert("Hapus Kategori Berhasil");
    location.href = "index.php?page=kategori";
</script>