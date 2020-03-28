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
$result = '';
$count = '';
//$str = mb_substr($input, 29, 1, "UTF-8");
//echo $str;
//die();




for ($i = 0; $i <= 90; $i++) {


    if ($str === '') {
        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }

    if ($str === ' ') {
        $result .= $str;
        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }


    if ($str === '>' && $something === '-') {
        $arrow = $something . $str;
        $something = '';
        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }

    if ($arrow === '->' && $number !== '' && !is_numeric($str)) {
        $i = $number;
        $number = '';
        $arrow = '';
        $str = mb_substr($input, $i, 1, "UTF-8");
        $result .= $str;
        $str = '';
        continue;
    }
    if ($something === '->') {
        $arrow = $something;
        $something = '';
        $str = mb_substr($input, $i, 1, "UTF-8");
        continue;
    }
    if ($something === '+' && is_numeric($str)) {
        $Plus = $something;
        $number .= $str;
        $str = mb_substr($input, $i, 1, "UTF-8");
        $something = '';
        continue;
    }
    if ($something === '-' && is_numeric($str)) {
        $Minus = $something;
        $str = mb_substr($input, $i, 1, "UTF-8");
        $something = '';
        continue;
    } else {
        if ($something === '-' && $str === '>') {
            $arrow = $something . $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            $something = '';
            continue;
        }
    }

    $strString = preg_match('~[a-zA-Z]~', $str);
    if (is_numeric($str)) {
        if ($Minus === '-') {
            $number .= $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($Plus === '+') {
            $number .= $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            $result = $str;
            $number = '';
            $str = '';
            continue;
        }
        if ($arrow === '->') {
            $number .= $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        continue;
    }
//    if ($strString) {
//        $result .= $str;
//        $count = $i;
//        $str = mb_substr($input, $i, 1, "UTF-8");
//        continue;
//    }

    $strP = preg_match('~[a-zA-Z0-9]~', $str);
    if (($arrow === '->' || $Plus === '+' || $Minus === '-') && (!$strP)) {
        if ($arrow === '->' && $number !== '' && !is_numeric($str) && !$strP) {
            continue;
        }
        if ($Plus === '+' && ($str === '-' || $str === '+')) {
            $i = $count;
            $i += --$number;
            $str = mb_substr($input, $i, 1, "UTF-8");
            $Plus = '';
            $number = '';
            continue;
        }
            if ($Plus === '+') {
                $i += --$number;
                $str = mb_substr($input, $i, 1, "UTF-8");
                $strString = preg_match('~[a-zA-Z]~', $str);
                if ($strString) {
                    $result .= $str;
                    $str = '';
                    $Plus = '';
                    $number = '';
                    continue;
                } else {
                    $str = mb_substr($input, $i, 1, "UTF-8");
                    $number = '';
                    $str = '';
                    continue;
                }

            }
            if ($Minus === '-') {
                $i = $number;
                $str = mb_substr($input, $i, 1, "UTF-8");
                continue;
            }

        }

    $strP = preg_match('~[a-zA-Z0-9]~', $str);
    if (($str === '->' || $str === '+' || $str === '-')) {
        if ($str === '-') {
            $something = $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($str === '+') {
            $something = $str;
            $str = mb_substr($input, $i, 1, "UTF-8");
            continue;
        }
        if ($str === '->') {
            $something = $str;
            continue;
        }
    }
}







