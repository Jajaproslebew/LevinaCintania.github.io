<?php
include '../koneksi.php';

$id = $_GET['id_ekstrakulikuler']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM ekstrakulikuler WHERE id_ekstrakulikuler= '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("Location: ekstrakulikuler.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>