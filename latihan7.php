<?php
$error = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";
    if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Latihan 7</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Latihan 7 - Ringkasan Transaksi</h1>
<form method="POST">
 <label>Nama barang <input name="barang" required></label>
 <label>Harga <input name="harga" type="number" min="0" step="0.01" required></label>
 <label>Jumlah <input name="jumlah" type="number" min="1" step="1" required></label>
 <button type="submit">Hitung</button>
</form>
<?php
if ($error !== null) {
    echo "<p class='error'>" . htmlspecialchars($error) . "</p>";
} elseif (isset($subtotal)) {
    echo "<div class='ok'><p>Barang: " . htmlspecialchars($barang) . "</p>";
    echo "<p>Harga: Rp" . number_format($harga, 0, ",", ".") . "</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p></div>";
}
?>
<p><small>Tips uji: matikan validasi HTML dengan DevTools (hapus atribut <code>required</code>/<code>min</code>) lalu kirim jumlah 0, -1, atau teks, untuk membuktikan validasi PHP tetap bekerja.</small></p>
</body></html>
