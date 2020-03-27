<?php

$input = '->11гe+20∆∆A+4µcњil->5•Ћ®†Ѓ p+5f-7Ќ¬f pro+10g+1悦ra->58->44m+1*m+2a喜er!';
$arrow = '';
$number = '';
$Plus = '';
$Minus = '';
$str = '';
$i = 0;
$something = '';
$somethingDigits = '';


for ($i = 0; $i <= 90; $i++) {
    $str = mb_substr($input, $i, 1, "UTF-8");
    if ($str === '>' && $something === '-') {
        $arrow = $something . $str;
        $something = '';
    }

    if ($arrow === '->' && $number !== '' && !is_numeric($str)) {
        $i = $number;
        $number = '';
        $arrow = '';
//        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }
    if ($something === '->') {
        $arrow = $something;
        $something = '';
//        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }
    if ($something === '+') {
        $Plus = $something;
//        $str = mb_substr($input, $i, 1, "UTF-8");
        $something = '';
        continue;
    }
    if ($something === '-') {
        $Minus = $something;
        $arrow = $something;
//        $str = mb_substr($input, $i, 1, "UTF-8");
        $something = '';
        continue;
    }
//    if ($str === '>') {
//        $Minus = '';
//        $arrow .= $str;
//        $str = mb_substr($input, $i, 1, "UTF-8");
//        continue;
//    }
//    $str = mb_substr($input, $i, 1, "UTF-8");
    $strString = preg_match('~[a-zA-Z]~', $str);
    if (is_numeric($str)) {
        if ($Minus === '-') {
            $number .= $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($Plus === '+') {
            $number .= $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($arrow === '->') {
            $number .= $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        continue;
    }
    if ($strString) {
        echo $str;
//        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }
//    if ($str === '>' && $arrow === '-') {
//        $something .= $str;
//        continue;
//    }
//    $str = mb_substr($input, $i, 1, "UTF-8");
    $strP = preg_match('~[a-zA-Z0-9]~', $str);
    if (($arrow === '->' || $Plus === '+' || $Minus === '-') && (!$strP)) {
        if ($arrow === '->' && $number !== '' && !is_numeric($str) && !$strP) {
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }

          $i = --$number;
            $arrow = '';
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($Plus === '+') {
            $i = --$number;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($Minus === '-') {
            $i = --$number;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }



//        $i += $Plus;
//        $str = mb_substr($input, $i, 1, "UTF-8");
    $strP = preg_match('~[a-zA-Z0-9]~', $str);
    if (($str === '->' || $str === '+' || $str === '-')) {
        if ($str === '-') {
            $something = $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($str === '+') {
            $something = $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($str === '->') {
            $something = $str;
//            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
    }
}







