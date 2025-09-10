<?php 

function giaiptb2($a,$b,$c){
$delta = $b*$b - 4*$a*$c;
if ($delta <0){
    echo "Phương trình vô nghiệm";
} elseif ($delta == 0){
    $x = -$b/(2*$a);
    echo "Phương trình có một nghiệm duy nhất $x"; 
} else {
    $x1 =(-$b + sqrt($delta))/ (2 * $a);
    $x1 =(-$b - sqrt($delta))/ (2 * $a);
    echo "Phương trình có một nghiệm duy nhất $x1 , $x2";
}
giaiptb2(4,4,16);
}

?>