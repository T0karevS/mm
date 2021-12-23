<?php
// var_dump($_POST);
function a($str){
    return $_POST[$str];
}
$result1 = a("zero") + a("1st") + a("2nd") + a("5th") + a("6th") + a("10th")+ a("11th");
$result2 = a("zero") + a("1st") + a("3rd") + a("4th") + a("5th") + a("6th") + a("10th")+ a("11th");
$result3 = a("zero") + a("1st") + a("3rd") + a("7th") + a("9th") + a("10th")+ a("11th");
$result4 = a("zero") + a("1st") + a("3rd") + a("8th") + a("9th") + a("10th")+ a("11th");
$R=max($result1, $result2, $result3, $result4);
echo "Критический путь:";
echo "<br>";
echo $R;
echo "<br>";
echo "L критический:";
echo "<br>";
if( $R==$result1)
{
    echo "0-1-2-4-6-8-9-10";
    echo "<br>";
}
elseif( $R==$result2)
{
    echo "0-1-2-3-4-6-8-9-10";
    echo "<br>";
}
elseif($R==$result3)
{
    echo "0-1-2-3-7-8-9-10";
    echo "<br>";
}
elseif($R==$result4)
{
    echo "0-1-2-3-5-7-8-9-10";
    echo "<br>";
}