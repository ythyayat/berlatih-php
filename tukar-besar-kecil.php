<?php
function tukar_besar_kecil($string){
//kode di sini
    $newString = "";
    for($i = 0  ; $i < strlen($string) ; $i++){
        if(ord($string[$i])<91 && ord($string[$i])>64){
            $newString = $newString. (chr(ord($string[$i]) + 32));
        }else if(ord($string[$i])<123 && ord($string[$i])>96){
            $newString = $newString. (chr(ord($string[$i]) - 32));
        }else{
            $newString = $newString. $string[$i];
        }
    }
    return $newString."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>