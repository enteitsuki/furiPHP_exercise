<?php
function displayMsg($owner) {
    $animal_types = array_unique($owner["animal"]);
    $animal = implode("、", $animal_types);
    $count = count($owner["animal"]);
    $msg = <<<EOM
{$owner["name"]}さんは
{$animal}を
{$count}匹飼っています。\n
EOM;
    echo $msg;
}