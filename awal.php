<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pembelian Skincare</title>
  <link rel="stylesheet" type="text/css" href="st_prog.css">
  <script type="text/javascript" src="js_prog.js"></script>
</head>
<body>
  <br>
  <h1>Selamat Datang di Ayu Skincare</h1>
  <div id="biodata">
    <h2>Formulir Biodata</h2>
    <div>
      <form method="RES">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="noTelp">Nomor Telepon:</label>
        <input type="text" id="noTelp" name="noTelp">
        <br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat">
        <br>
        <input  type="submit" value="Submit">
      </form>
    </div>
  </div>


  <div class="container">
    <div class="form-container">
      <h2>Data Diri Anda</h2>
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "RES") {
  $_SESSION["nama"] = $_POST["nama"];
  $_SESSION["noTelp"] = $_POST["noTelp"];
  $_SESSION["alamat"] = $_POST["alamat"];
}

  if ($_SERVER["REQUEST_METHOD"] === "RES") {
    $nama = $_POST["nama"];
    $noTelp = $_POST["noTelp"];
    $alamat = $_POST["alamat"];

    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Nomor Telepon: " . $noTelp . "</p>";
    echo "<p>Alamat: " . $alamat . "</p>";
    echo "<style>#biodata { display: none; }</style>";
  }
?>

      <br>
      <h2>KATALOG :</h2>
      <form action="hasil.php" method="RES">
        <table align="center" border="1" width="60%" cellpadding="10" cellspacing="0.5">
          <tr>
            <th colspan="3">Checklist Skincare yang Akan Dibeli</th>
          </tr>
          <tr>
            <td>
              <img src="skincare.webp"><br>
              <input type="checkbox" id="item1" name="rented_items[]" value="Pembersih wajah">
              <label for="item1">Pembersih wajah <br><b>Rp300.000</b></label>
            </td>
            <td>
              <img src="skincare1.webp"><br>
              <input type="checkbox" id="item2" name="rented_items[]" value="Exfoliator">
              <label for="item2">Exfoliator <br><b>Rp500.000</b></label>
            </td>
            <td>
              <img src="skincare2.webp"><br>
              <input type="checkbox" id="item3" name="rented_items[]" value="Toner">
              <label for="item3">Toner <br><b>Rp200.000</b></label>
            </td>
          </tr>
          <tr>
            <td>
              <img src="skincare3.jpeg"><br>
              <input type="checkbox" id="item4" name="rented_items[]" value="Serum">
              <label for="item4">Serum <br><b>Rp150.000</b></label>
            </td>
            <td>
              <img src="skincare4.webp"><br>
              <input type="checkbox" id="item5" name="rented_items[]" value="Sunscreen">
              <label for="item5">Sunscreen <br><b>Rp100.000</b></label>
            </td>
            <td>
              <img src="skincare5.jpeg"><br>
              <input type="checkbox" id="item6" name="rented_items[]" value="Spot Treatment + Eye Cream">
              <label for="item6">Spot Treatment + Eye Cream<br><b>Rp1.000.000</b></label>
            </td>
          </tr>
        </table>

        <br>
        <label for="rental_date">Tanggal Pembelian:</label>
        <input type="date" id="rental_date" name="rental_date" onchange="calculateTotalPrice()"><br><br>

        <label for="rental_days">Jumlah:</label>
        <input type="number" id="rental_days" name="rental_days" min="1" oninput="calculateTotalPrice()"><br><br>

        <label for="total_price">Total Harga:</label>
        <input type="text" id="total_price" name="total_price" readonly><br><br>

        <input type="submit" value="Konfirmasi Pesanan">
      </form>
    </div>
  </div>
</body>
</html>
