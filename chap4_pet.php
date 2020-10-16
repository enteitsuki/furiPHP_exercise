<?php
function displayMsg($owner) {
    $animal = array_unique($owner["animal"]);
    $animal_types = implode("、", $animal);
    $count = count($owner["animal"]);
    $msg = <<<EOM
{$owner["name"]}さんは
{$animal_types}を
{$count}匹飼っています。\n
EOM;
    echo $msg;
}