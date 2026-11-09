<?php require_once __DIR__ . "/helpers.php"; ?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Eksperimen 3</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Eksperimen 3 - Function Format Rupiah</h1>
<?php
foreach ([0, 2500, 150000, 1234567, 99999999] as $h) {
    echo formatRupiah($h) . "<br>";
}
?>
<p><small>Fungsi <code>formatRupiah()</code> ada di <code>helpers.php</code>.</small></p>
</body></html>
