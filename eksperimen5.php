<?php require_once __DIR__ . "/helpers.php";
$nama = ""; $jumlahKirim = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Eksperimen 5</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Eksperimen 5 - Tombol Reset</h1>
<form method="POST">
 <label for="nama">Nama</label>
 <input id="nama" name="nama" value="<?= e($nama) ?>">
 <button type="submit">Kirim</button>
 <button type="reset">Reset</button>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
  <p class="ok">Server menerima nama: <strong><?= e($nama) ?></strong>
  (waktu server <?= date("H:i:s") ?>)</p>
<?php endif; ?>
<h3>Perbedaan</h3>
<ul>
<li><b>Reset</b>: dijalankan browser, hanya mengembalikan isian form ke nilai awal HTML (atribut <code>value</code>). Tidak ada request ke server. Catatan: karena field diisi ulang dari PHP, reset mengembalikan ke nilai hasil kirim terakhir, bukan kosong. Untuk mengosongkan, pakai <a href="eksperimen5.php">link muat ulang</a>.</li>
<li><b>Pemrosesan ulang di server</b>: submit (atau refresh setelah POST) mengirim request baru, PHP menjalankan ulang kodenya dan menghasilkan halaman baru. Perhatikan waktu server berubah.</li>
</ul>
</body></html>
