<?php
var_dump("数字を入力して下さい");
$num = trim(fgets(STDIN));
if ($num % 2 == 0) {
    var_dump($num . " は 偶数です");
} else {
    var_dump($num . " は 奇数です");
}