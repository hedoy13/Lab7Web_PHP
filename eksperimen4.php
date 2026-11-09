<?php require_once __DIR__ . "/helpers.php";
// Ketentuan: NIM hanya angka, panjang 8 sampai 12 digit
const NIM_MIN = 8;
const NIM_MAX = 12;
function validasiNim(string $nim): ?string {
    if ($nim === "") return "NIM wajib diisi.";
    if (!ctype_digit($nim)) return "NIM hanya boleh berisi angka.";
    $len = strlen($nim);
    if ($len < NIM_MIN || $len > NIM_MAX) return "NIM harus " . NIM_MIN . "–" . NIM_MAX . " digit (anda: $len).";
    return null;
}
$nim = ""; $pesan = null; $cek = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");
    $pesan = validasiNim($nim);
    $cek = true;
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Eksperimen 4</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Eksperimen 4 - Validasi NIM</h1>
<form method="POST">
 <label for="nim">NIM (angka, <?= NIM_MIN ?>–<?= NIM_MAX ?> digit)</label>
 <input id="nim" name="nim" value="<?= e($nim) ?>">
 <button type="submit">Validasi</button>
</form>
<?php if ($cek): ?>
  <?php if ($pesan): ?><p class="error"><?= e($pesan) ?></p>
  <?php else: ?><p class="ok">NIM <?= e($nim) ?> valid.</p><?php endif; ?>
<?php endif; ?>
</body></html>
