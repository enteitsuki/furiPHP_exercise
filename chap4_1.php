<?php
require_once __DIR__ . "/chap4_area.php";
$orders = [
["top"=>10, "bottom"=>20, "height"=>30],
["top"=>40, "bottom"=>50, "height"=>60]
];
foreach($orders as $order) {
    $area = calcArea($order["top"], $order["bottom"], $order["height"]);
    displayMsg($order["top"], $order["bottom"], $order["height"], $area);
}