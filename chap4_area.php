<?php
function displayMsg($top, $bottom, $height, $area) {
    $msg = <<<EOM
台形のサイズ
上底 : {$top}
下底 : {$bottom}
高さ : {$height}
面積 : {$area}\n\n
EOM;
    echo $msg;
}
function calcArea($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;
}
