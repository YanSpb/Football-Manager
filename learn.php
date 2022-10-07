<?php
$burger = 4.95;
$cocktail = 1.95;
$coca_cola = 0.85;
$tax = 0.075;
$tips = 0.16;
$price = $burger*2 + $cocktail + $coca_cola; //стоимость без налога и чайвых
$cost = $price * $tax;
$pay = $cost * $tips;
print $pay;
