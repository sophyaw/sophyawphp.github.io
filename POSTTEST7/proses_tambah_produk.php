<?php
session_start();
include_once "./db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $tipe_produk = $_POST['tipe_produk'];

  if (isset($_FILES['gambar'])) {
    $file = $_FILES['gambar'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_error = $file['error'];

    if ($file_error === 0) {
      $file_name = basename($file_name);
      $current_date = date("Y-m-d");
      $new_file_name = $current_date . '-' . $file_name;
      $upload_destination = 'uploads/' . $new_file_name;
      move_uploaded_file($file_tmp, $upload_destination);
    } else {
      echo 'File upload error. Please try again.';
      exit;
    }
  } else {
    echo 'File upload is required.';
    exit;
  }

  $sql = "INSERT INTO produk (nama_produk, harga, tipe_produk, gambar) VALUES ('$nama_produk', $harga, '$tipe_produk', '$new_file_name')";

  if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Produk berhasil ditambahkan";
    header("Location: list_produk.php");
    exit;
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
} else {
  echo 'Invalid request';
}
