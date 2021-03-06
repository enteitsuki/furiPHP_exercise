<?php
function createMsg($member, $enemy, $damage) {
    $msg = <<<EOM
{$member}は、
{$enemy}に攻撃した。

クリティカルヒット！！　

{$enemy}は、{$damage}のダメージを受けた。\n\n
EOM;
    echo $msg;
}

function getDamage($attack_point) {
    return rand(100,500) * $attack_point;
}