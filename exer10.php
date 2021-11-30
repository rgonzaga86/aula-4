<?php

$vcarro = 10000;
$imp = $vcarro * (45/100);
//echo $imp;
$dis = $vcarro* (28/100);
//echo $dis;
$vcarro = $vcarro + $imp + $dis;
echo "O valor do carro é de {$vcarro}";