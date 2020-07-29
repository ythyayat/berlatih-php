<?php
function pasangan_terbesar($angka){
// kode di sini
    $terbesar = 0;
    $pasangan = 0;
    do{
        $pasangan = $angka%100;
        if($pasangan > $terbesar){
            $terbesar = $pasangan;
        }
        $angka/=10;
    }while($angka > 10);
    return $terbesar."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>