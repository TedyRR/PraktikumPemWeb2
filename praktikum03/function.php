<?php 
    //Inisiasi fungsi
    function hitungUmur($thn_lahir){
        $thn_sekarang = 2023;
        // Menghitung umur
        $umur = $thn_sekarang - $thn_lahir;
        // Menampilkan umur
        return $umur;
    }

// Panggil fungsi
echo hitungUmur(2000);
?>