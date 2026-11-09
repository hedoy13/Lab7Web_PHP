<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Latihan 5</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Latihan 5 - Form GET</h1>
<form method="GET" action="">
 <label for="kata">Kata kunci:</label>
 <input id="kata" name="kata" type="text">
 <button type="submit">Cari</button>
</form>
<?php
if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
}
?>
<p><small>Perhatikan URL berubah menjadi <code>?kata=...</code>. Jangan kirim kata sandi lewat GET.</small></p>
</body></html>
