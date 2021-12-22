<?php
// var_dump($_POST);
function a($str){
    return $_POST[$str];
}
$result1 = a("zero") + a("1st") + a("2nd") + a("5th") + a("6th") + a("10th")+ a("11th");
$result2 = a("zero") + a("1st") + a("3rd") + a("4th") + a("5th") + a("6th") + a("10th")+ a("11th");
$result3 = a("zero") + a("1st") + a("3rd") + a("7th") + a("9th") + a("10th")+ a("11th");
$result4 = a("zero") + a("1st") + a("3rd") + a("8th") + a("9th") + a("10th")+ a("11th");
echo "Критический путь:";
echo max($result1, $result2, $result3, $result4);