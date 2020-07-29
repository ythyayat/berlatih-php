<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $angka++;
    $str = "".$angka; //memanfaatkan concatenasi agar menjadi string ;)
    $length = strlen($str)-1;
    for($i = 0 ; $i <= strlen($str)-1 ; $i++){
        if($str[$i] != $str[$length]){
            return palindrome_angka($angka);
        }
        $length--;
    }
    return $angka."<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>