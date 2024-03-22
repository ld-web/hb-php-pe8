<?php

$tab1 = [1, 2, 3];
$tab2 = [4, 5, 6];

//       0      1
$tab3 = [$tab1, $tab2];
var_dump($tab3);

$tab4 = [...$tab1, ...$tab2];
var_dump($tab4);
