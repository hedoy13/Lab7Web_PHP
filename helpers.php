<?php
// Fungsi bantu dipakai bersama
function e(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
function formatRupiah(float|int $angka): string {
    return "Rp" . number_format($angka, 0, ",", ".");
}
