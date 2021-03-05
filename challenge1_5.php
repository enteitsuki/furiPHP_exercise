<?php
$attacks = [1 => "剣", 2 => "魔法", 3 => "打撃"];
$hp = 10000;

while ($hp > 0) {
    echo '攻撃技は？' . PHP_EOL;
    foreach ($attacks as $num => $attack) {
        echo $num . '.' . $attack;
    }
    echo PHP_EOL;
    $answer = trim(fgets(STDIN));
    switch ($answer) {
        case 1:
        case 2:
        case 3:
            $damage = rand(500,3000);
            if ($damage >= 2000) {
                echo 'クリティカルヒット！！' . PHP_EOL;
            }
            $hp -= $damage;
            echo '攻撃力' . $damage . 'の攻撃！' . PHP_EOL;
            if ($hp > 0) {
                echo 'HP: '. $hp . PHP_EOL;
            } else {
            break;
            }
            break;
        default:
            echo '攻撃に失敗！' . PHP_EOL;
            break;
    }
}

echo 'HP: 0' . PHP_EOL . '敵を倒した!!' . PHP_EOL;