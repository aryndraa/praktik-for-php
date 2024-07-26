<?php 

$squareArea = 3;

// square
for ($coloum = 0; $coloum < $squareArea; $coloum++) {
    for ($row = 0; $row < $squareArea; $row++) {
        echo "◯";
    }
    echo "<br>";
}

echo "<br/>";

//donut
for ($coloum = 0; $coloum < $squareArea; $coloum++) {
    for ($row = 0; $row < $squareArea; $row++) {
        
        if ($coloum == 1 && $row == 1) {
            echo " # ";
        } else {
            echo "◯";
        }

    }
    echo "<br>";
}

$triangleArea = 5;

//segitiga siku"
for ($coloum = 0; $coloum <= $triangleArea; $coloum++) {
    for ($row = 0; $row < $coloum; $row++) {
        echo "◯ ";
    }

    echo "<br>";
}

echo "<br/>";

//segitiga siku terbalik
for ($coloum = $triangleArea  ; $coloum >= 1; $coloum--) {
    for ($row = 0; $row < $coloum; $row++) {
        echo "◯ ";
    }

    echo "<br>";
}

for ($coloum = 0; $coloum <= $triangleArea; $coloum++) {

    for ($row = 0; $row < $coloum; $row++) {

        if($coloum == 3 && $row == 1) {
            echo "✕. ";
        } elseif(($coloum == 4) && ($row == 2) || 
                 ($coloum == 4) && ($row == 1)) {
            echo "✕. ";
        } else {
            echo "◯ ";
        }

    }
    echo "<br>";
}