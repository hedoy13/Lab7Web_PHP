<?php require_once __DIR__ . "/helpers.php";
$data = ["Alya", "Bima", "Citra", "Doni", "Eka", "Farhan", "Gita", "Alvin"];
$kata = trim($_GET["kata"] ?? "");
$hasil = [];
if ($kata !== "") {
    foreach ($data as $n) {
        if (stripos($n, $kata) !== false) $hasil[] = $n;   // pencarian tidak peka huruf besar/kecil
    }
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Eksperimen 2</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Eksperimen 2 - Cari Nama (GET)</h1>
<form method="GET">
 <label for="kata">Cari nama:</label>
 <input id="kata" name="kata" value="<?= e($kata) ?>">
 <button type="submit">Cari</button>
</form>
<?php if ($kata !== ""): ?>
  <h3>Hasil untuk "<?= e($kata) ?>"</h3>
  <?php if ($hasil): ?>
    <ul><?php foreach ($hasil as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul>
  <?php else: ?><p>Tidak ditemukan.</p><?php endif; ?>
<?php endif; ?>
<p><small>Data: <?= e(implode(", ", $data)) ?></small></p>
</body></html>
