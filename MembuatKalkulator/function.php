<?php
session_start();

// Melakukan perhitungan aritmatika sederhana
// @param $nilai1
// @param $nilai2
// @parameter $opr : operator nilai perhitungan
// return angka numerik hasil perhitungan

function hitung($nilai1, $nilai2, $opr){
    $nilai1 = (int)$nilai1;
    $nilai2 = (int)$nilai2;

    if($opr == '+'){
        return $nilai1 + $nilai2;
    } else if($opr == '-'){
        return $nilai1 - $nilai2;
    } else if($opr == 'x'){
        return $nilai1 * $nilai2;
    } else if($opr == '/'){
        return $nilai1 / $nilai2;
    }
}

// menyimpan operasi dan hasil perhitungan dalam session

function add_session_his($nilai1, $nilai2, $opr, $hasil){
    $new_calc = [$nilai1, $nilai2, $opr, $hasil];
    if (!isset($_SESSION['history'])){
        $_SESSION['history'] = [$new_calc];
    } else {
        array_push($_SESSION['history'], $new_calc);
    }

    return count ($_SESSION['history']);
}