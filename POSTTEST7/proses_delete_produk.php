<?php
session_start();
include_once "./db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  $id_produk = $_GET['id'];

  $query = "SELECT gambar FROM produk WHERE id = '$id_produk'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['gambar'];

    $delete_query = "DELETE FROM produk WHERE id = $id_produk";
    $deleted = mysqli_query($conn, $delete_query);

    if ($deleted) {
      if (file_exists('./uploads/' . $gambar)) {
        unlink('./uploads/' . $gambar);
      }

      $_SESSION['message'] = "Produk berhasil dihapus";
      header("Location: list_produk.php");
      exit;
    } else {
      $_SESSION['message'] = "Error delete produk.";
    }
  } else {
    $_SESSION['message'] = "Produk tidak ditemukan";
  }
}
