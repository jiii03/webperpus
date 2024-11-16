<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku where id_buku=$id");
?>
<script>
    alert("Hapus buku Berhasil");
    location.href = "index.php?page=buku";
</script>