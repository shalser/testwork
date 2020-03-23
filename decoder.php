<?php

$input = '->11гe+20∆∆A+4µcњil->5•Ћ®†Ѓ p+5f-7Ќ¬f pro+10g+1悦ra->58->44m+1*m+2a喜er!';
$dash = '';
$number = '';
$numberPlus = '';
$numberMinus = '';
$str = '';
$i = 0;


for ($i = 0; $i <= 90; $i++) {
    $str = mb_substr($input, $i, 1, "UTF-8");

    if ($str === '-') {
        $dash = $str;
        continue;
    } elseif ($str === '>') {
        $dash .= $str;
        continue;
    } elseif ($dash === '->') {
        if (is_numeric($str)) {
            $number .= $str;
            continue;
        } elseif (!is_numeric($str)) {
//            var_dump($number);
//        die();
            $str = mb_substr($input, $number, 1, "UTF-8");
            $strP = preg_match('~[a-zA-Z0-9]~', $str);
//            var_dump($strP);
//        die();
            if (($str === '->' || $str === '+' || $str === '-') && ($str !== $strP)) {

                continue;
            } else {
                echo $str;
                $i = $number;
                $number = '';
                $dash = '';
                continue;
            }

//                        var_dump($i);
//        die();


        }
    }


    elseif ($str === '+') {
//        var_dump($str);
//        die();
        continue;
    } elseif (is_numeric($str)) {
        $numberPlus .= $str;
//        var_dump($numberPlus);
//        die();
        continue;
    } elseif (!is_numeric($str)) {
//        var_dump($numberPlus);
//        die();


//        $strP = preg_match('~[a-zA-Z0-9]~', $str);
//        if ($str !== $strP) {
//            $i = $numberPlus;
//            continue;
//        }


        $i = $i + $numberPlus;
//                var_dump($i);
//        die();
        $str = mb_substr($input, $i, 1, "UTF-8");
        $strP = preg_match('~[a-zA-Z0-9]~', $str);
//        var_dump($strP);
//        die();
        if (($str === '->' || $str === '+' || $str === '-') && ($str !== $strP)) {
//                            var_dump($i);
//        die();
//            var_dump($strP);
//        die();
            $numberPlus = '';
            continue;
        } else {
            echo $str;



            $numberPlus = '';
            continue;
        }


    }
    elseif ($str === '-') {
        continue;
    } elseif (is_numeric($str)) {
        $numberMinus .= $str;
    } elseif (!is_numeric($str)) {
        $i = $i - $numberMinus;
//                var_dump($i);
//        die();
        $str = mb_substr($input, $i, 1, "UTF-8");
        $strP = preg_match('~[a-zA-Z0-9]~', $str);
        if (($str === '->' || $str === '+' || $str === '-') && ($str !== $strP)) {
//                            var_dump($i);
//        die();
//            var_dump($strP);
//        die();
            continue;
        } else {
            echo $str;



            $numberMinus = '';
            continue;
        }
    }
}





function regExp($str)
{
    $str = preg_match('~[a-zA-Z0-9]~', $str);
    return $str;
}


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






