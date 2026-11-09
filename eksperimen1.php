<?php require_once __DIR__ . "/helpers.php";
function rataRata(float ...$nilai): float { return array_sum($nilai) / count($nilai); }
$tugas = 85; $uts = 78; $uas = 90;
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Eksperimen 1</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Eksperimen 1 - Rata-rata Tiga Komponen Nilai</h1>
<p>Tugas: <?= $tugas ?>, UTS: <?= $uts ?>, UAS: <?= $uas ?></p>
<p><strong>Rata-rata: <?= number_format(rataRata($tugas, $uts, $uas), 2) ?></strong></p>
</body></html>
