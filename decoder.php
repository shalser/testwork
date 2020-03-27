<?php

$input = '+20∆∆A+4µcњil->5•Ћ®†Ѓ p+5f-7Ќ¬f pro+10g+1悦ra->58->44m+1*m+2a喜er!';
$arrow = '';
$number = '';
$Plus = '';
$Minus = '';
$str = '';
$i = 0;
$something = '';
$somethingDigits = '';


for ($i = 0; $i <= 90; $i++) {
    if ($something === '->') {
        $arrow = $something;
        $something = '';
    }
//    $str = mb_substr($input, $i, 1, "UTF-8");
    $strString = preg_match('~[a-zA-Z]~', $str);
    if (is_numeric($str)) {
        continue;
    }
    if ($strString) {
        echo $str;
        continue;
    }
    if (is_numeric($str)) {
        $number .= $str;
        continue;
    }
    $strAll = preg_match('~[a-zA-Z0-9]~', $str);
    if ((!$strAll) && ($str === '+' || $str === '-' || $str === '>')) {
        if ($str === '+') {
        $Plus = $str;
        continue;
    }
    if (is_numeric($str)) {
        $number .= $str;
        continue;
    }
    if (!is_numeric($str)) {
        continue;
    }
//        $strP = preg_match('~[a-zA-Z0-9]~', $str);
//        if (!$strP) {
//            $i = $Plus;
//            continue;
//        }
        $i += $Plus;
        $str = mb_substr($input, $i, 1, "UTF-8");
        $strP = preg_match('~[a-zA-Z0-9]~', $str);
        if (($str === '->' || $str === '+' || $str === '-') && (!$strP)) {
            $Plus = '';
            continue;
        } else {
            echo $str;
            $Plus = '';
            continue;
        }

        $something .= $str;
        continue;
    }
    if ($str === '-') {
        $Minus = $str;
        continue;
    }

}
//    if ($arrow === '->') {
//        if (is_numeric($str)) {
//            $number .= $str;
//            $arrow = '';
//            continue;
//        }
//    }
//    if ($str === '-') {
//        $Minus = $str;
//        continue;
//    }
//    if (is_numeric($str)) {
//        $Minus .= $str;
//        continue;
//    }
////    if (!is_numeric($str)) {
////        $i -= $Minus;
////        $str = mb_substr($input, $Minus, 1, "UTF-8");
////        $number .= $str;
////        continue;
////    }
//    if (!is_numeric($str)) {
//        $str = mb_substr($input, $number, 1, "UTF-8");
//        $strP = preg_match('~[a-zA-Z]~', $str);
//        if ($strP) {
//            echo $str;
//            $i = $number;
//            $arrow = '';
//            $number = '';
//            continue;
//        }
//    }





//        } else {
//            echo $str;
//        }
//        if ($str === '>') {
//            $dash .= $str;
//            continue;
//        } elseif ($dash === '->') {
//            if (is_numeric($str)) {
//                $number .= $str;
//                continue;
//            } elseif (!is_numeric($str)) {
////            var_dump($number);
////        die();
//                $str = mb_substr($input, $number, 1, "UTF-8");
//                $strP = preg_match('~[a-zA-Z0-9]~', $str);
////            var_dump($strP);
////        die();
//                if (($str === '->' || $str === '+' || $str === '-') && (!$strP)) {
//
//                    continue;
//                } else {
//                    echo $str;
//                    $i = $number;
//                    $number = '';
//                    $dash = '';
//                    continue;
//                }

//                        var_dump($i);
//        die();






//    else
//
//
//    }
//    elseif ($str === '-') {
//        continue;
//    } elseif (is_numeric($str)) {
//        $Minus .= $str;
//    } elseif (!is_numeric($str)) {
//        $i -= $Minus;
////                var_dump($i);
////        die();
//        $str = mb_substr($input, $i, 1, "UTF-8");
//        $strP = preg_match('~[a-zA-Z0-9]~', $str);
//        if (($str === '->' || $str === '+' || $str === '-') && (!$strP)) {
////                            var_dump($i);
////        die();
////            var_dump($strP);
////        die();
//            continue;
//        } else {
//            echo $str;
//
//
//
//            $Minus = '';
//            continue;
//        }
//    }







//function regExp($str)
//{
//    $str = preg_match('~[a-zA-Z0-9]~', $str);
//    return $str;
//}


//var_dump($str);
//die();

//function ifDash() {
//    $value = $str;
//
//}


//$str = mb_substr($input, 11, 1, "UTF-8");

//$str = mb_substr($input, 11, 1, "UTF-8");
//$str = strlen($input);
//echo $str;

//echo '<pre>';
//print_r($str);
//echo '<pre>';

//for ($i = 0; $i <= 90; $i++) {
//    $str = mb_substr($input, $i, 1, "UTF-8");
//    if ($str === 'A') {
//        echo 'A';
//        break;
//    } else {
//        echo '';
//    }
//}

//[a-zA-Z0-9_]

//for ($i = 0; $i <= 90; $i++) {
//    $str = mb_substr($input, $i, 1, "UTF-8");
//    if ($str === '-') {
//        $str = mb_substr($input, 11, 1, "UTF-8");
//        echo $str;
//        break;
//    } else {
//        echo '0';
//    }
//}






