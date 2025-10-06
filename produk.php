<!DOCTYPE html>
<html lang="id">
<head>
  <title>Produk PHP</title>
</head>
<body>

  <?php
    echo "DATA PRODUCT";

    $nama_produk = "Buku PHP untuk Pemula";
    $harga_produk = 120000;
    $diskon = 0.1;
    $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
  ?>

  <h2>nama_produk: Buku PHP untuk Pemula</h2>
  <p>Harga: Rp <?php echo $harga_produk; ?></p>
  <p>Diskon: <?php echo $diskon * 100; ?>%</p>
  <p>Harga Setelah Diskon: Rp <?php echo $harga_setelah_diskon; ?></p>

</body>
</html>

