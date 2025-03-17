<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include('connect.php');

if (isset($_POST['update'])) {
    // Mengambil ID dari parameter GET dan membersihkannya
    $bookId = mysqli_real_escape_string($conn, $_GET['id']);
    $bookTitle = mysqli_real_escape_string($conn, $_POST['judul']);
    $author = mysqli_real_escape_string($conn, $_POST['penulis']);
    $publicationYear = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);

    // Menyusun query untuk memperbarui data
    $updateQuery = "UPDATE tb_buku SET judul='$bookTitle', penulis='$author', tahun_terbit='$publicationYear' WHERE id='$bookId'";

    // Menjalankan query dan memeriksa hasilnya
    if (mysqli_query($conn, $updateQuery)) {
        // Mengalihkan ke halaman katalog buku setelah pembaruan berhasil
        header("Location: katalog_buku.php?pesan=update_sukses");
        exit();
    } else {
        echo "Error saat memperbarui data: " . mysqli_error($conn);
    }
} else {
    echo "Akses tidak valid.";
    exit();
}
?>