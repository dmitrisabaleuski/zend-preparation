<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:43 AM
 */
echo "\$var_boolean = true; //Логический - true/false <br>";
$var_boolean = true;
echo gettype($var_boolean)." // выводит: boolean<br><br> ";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo "\$var_string = 'строка'; //Строчный - с одинарными кавычками<br>";
$var_string = 'строка';
echo gettype($var_string)." // выводит: string<br><br> ";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo "\$var_string2 = \"строка2\"; //Строчный - с двойными кавычками<br>";
$var_string2 = "строка2";
echo gettype($var_string2)."// выводит: string <br><br>";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo "\$var_intager = 123; //Целое число без строчки<br>";
$var_intager = 123;
echo gettype($var_intager)."<br><br>";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo "
// Если это целое, увеличить на четыре;<br>
if (is_int(\$var_intager)){<br>
    &nbsp&nbsp&nbsp&nbsp\$var_intager += 4; <br>
}<br>
";
if (is_int($var_intager)){
    $var_intager += 4;
    echo "\$var_intager =". $var_intager;
}
echo "<br><br>";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo "
// Если \$var_boolean - это строка, вывести ее<br>
// (ничего не выводит)<br>
if (is_string(\$var_booleanl)) {<br>
   &nbsp&nbsp&nbsp&nbsp echo \"Строка: \$var_boolean \";<br>
}<br>
";
if (is_string($var_booleanl)) {
    echo "Строка: $var_boolean ";
}
echo "\$var_boolean является логической, не выведеит ничего!<br><br>"
?>
<hr style="width:100%; height:1px;border:none;background: #000;">
