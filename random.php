<?php
// programa mexcla mazo cartas (52)
for ($i = 1; $i < 53; $i++) {
    $M[$i] = 0;
}
$i=0;
while ($i < 53) {
    $d = rand(1, 52);
    
    $M[$i] = $d;
    for ($j = 1; $j < $i; $j++) {
        if ($M[$j] == $d) {
            $i = $i - 1;
        }
    }
    $i = $i + 1;
}

for ($n=1;$n<53;$n++){
    echo $M[$n];
    // calcula el palo y el numero de la carta
    $num = ($M[$n]%13);
    if ($num == 0){
        $num = 13;     
    }
    $p = (int)(($M[$n]-1)/13);
    echo ' ',$p,'    ';
    if ($p == 0){
        $pal = "trebol";
    }
    if ($p == 1){
        $pal = "carrot";
    }
    if ($p == 2){
        $pal = "corazones";
    }
    if ($p == 3){
        $pal = "picas";
    }

    echo '  ',$pal,' ',$num;
        echo "<br>";
    
}

?>
