<?php
// print_r("tess");
// die;
if (!isset($_SESSION['id_member'])) {
    header("location:?pg=member&message=Upss-Harus-Register-Dulu");
} else {
    $id_member = $_SESSION['id_member'];
    $queryCart = mysqli_query($koneksi, "SELECT id_barang, qty FROM detail_penjualan
    WHERE id_barang='$id_barang'");
    while ($rowCart = mysqli_fetch_assoc($queryCart));
}
