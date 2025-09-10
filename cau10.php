<?php 
function trungbinhcong($number){
$number_count = count($number);
$number_sum = 0;
for($i = 0; $i < $number_count; $i++) {
    $number_sum += $number[$i];
}
$result = $number_sum/$number_count;
echo "Trung bình cộng của mảng là $result";
}
$number = array(1,2);
trungbinhcong($number);

?>