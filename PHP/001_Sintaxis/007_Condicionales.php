<?php

//Condicional If
if (true) {
    echo "condición = true";
}
echo '<br>';
//Condicional else If
if (5 > 10) {
    echo "5 no es > 10";
} elseif (5 == 5) {
    echo "5 es == 5";
}

echo '<br>';

// Switch
$color = "rosa";

switch ($color) {
    case 'amarillo':
        echo "Es amarillo";
        break;

    case 'verde':
        echo "Es verde";

    case 'rosa':
        echo "Es rosa";

}
