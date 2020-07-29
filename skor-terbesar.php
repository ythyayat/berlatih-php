<?php
function skor_terbesar($arr){
//kode di sini
    $kelas = []; 
    $newArr = [] ;
    $count = 0;
    
    while($count < count($arr)){
        $cek = false;

        foreach($kelas as $k){
            if($arr[$count]["kelas"]==$k){
                $cek = true;
            }
        }
        if($cek == false){
            $kelas[] = $arr[$count]["kelas"];
            $newArr [$arr[$count]["kelas"]] = $arr[$count];
        }else{
            if($arr[$count]["nilai"] > $newArr[$arr[$count]["kelas"]]["nilai"]){
                $newArr [$arr[$count]["kelas"]] = $arr[$count];
            }
        }
        $count++;

    }
    
    return $newArr;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>