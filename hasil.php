<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pembelian skincare - Output</title>
  <link rel="stylesheet" type="text/css" href="st_prog.css">
</head>
<body>
  <br>
  <h1>STRUK PEMBELIAN SKINCARE</h1>
  <div class="container">
    <div class="form-container">
      <h2>Data Diri Informasi</h2>

      <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rentalDate = $_POST["rental_date"];
  $rentalDays = $_POST["rental_days"];
  $totalPrice = $_POST["total_price"];
  $rentedItems = $_POST["rented_items"];

  echo "<p>Nama: " . $_SESSION["nama"] . "</p>";
  echo "<p>Nomor Telepon: " . $_SESSION["noTelp"] . "</p>";
  echo "<p>Alamat: " . $_SESSION["alamat"] . "</p>";
  echo "<p>Tanggal Pembelian: " . $rentalDate . "</p>";
  echo "<p>Jumlah: " . $rentalDays . "</p>";
  echo "<p>Total Harga: " . $totalPrice . "</p>";

  echo "<h2>Rincian Pembelian:</h2>";
  foreach ($rentedItems as $item) {
    echo "<p>- " . $item . "</p>";
  }

  echo "<br><p>Diakses Pada: " . date("d F Y") . " || " . date("H:i:s") . "</p>";

  $file = fopen("struk.txt", "w");

  fwrite($file, "Nama: " . $_SESSION["nama"] . "\n");
  fwrite($file, "Nomor Telepon: " . $_SESSION["noTelp"] . "\n");
  fwrite($file, "Alamat: " . $_SESSION["alamat"] . "\n");
  fwrite($file, "Tanggal Pembelian: " . $rentalDate . "\n");
  fwrite($file, "Jumlah: " . $rentalDays . "\n");
  fwrite($file, "Total Harga: " . $totalPrice . "\n");

  foreach ($rentedItems as $item) {
    fwrite($file, "- " . $item . "\n");
  }

  fwrite($file, "Diakses Pada: " . date("d F Y") . " || " . date("H:i:s") . "\n");

  fclose($file);
}
?>  
      
    </div>
  </div>
  <footer>
    <p>&copy; DEVA RANANDA G.P - 2300018123</p>
  </footer>
</body>
</html>
