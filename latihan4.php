<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Latihan 4</title>
<link rel="stylesheet" href="style.css"></head><body>
<h1>Latihan 4 - Function</h1>
<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
function tentukanKelulusan($nilai) {
    return $nilai >= 60 ? "LULUS" : "TIDAK LULUS";
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br>";
echo "Luas persegi panjang 8 x 4 = " . hitungLuasPersegiPanjang(8, 4) . "<br>";
echo "Nilai 75: " . tentukanKelulusan(75) . "<br>";
echo "Nilai 45: " . tentukanKelulusan(45) . "<br>";
?>
</body></html>
