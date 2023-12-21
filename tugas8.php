
<?php

function printSpace($space)
{
    for ($i = 0; $i < $space; $i++) {
        echo "&nbsp;";
    }
}

function printStar($star)
{
    for ($i = 0; $i < $star; $i++) {
        echo "x";
    }
}

function createRhombus($n)
{
    for ($i = 1; $i <= $n; $i++) {
        printSpace($n - $i);
        printStar(2 * $i - 1);
        echo "<br>";
    }

    // for ($i = $n - 1; $i >= ; $i--) {
    //     printSpace($n - $i);
    //     printStar(2 * $i - 1);
    //     echo "<br>";
    // }
}

$size = 9; // Mengubah ukuran menjadi 9 agar lebih simetris
createRhombus($size);

?>
