<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:44 AM
 */
error_reporting('E_ALL');
echo "
\$a = 1234; // десятичное число<br>
\$b = -123; // отрицательное число<br>
\$c = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)<br>
\$d = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)<br>
\$e = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)<br>
";
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

?>
<h2 style="color:#a07878;">Переполнение целых чисел </h2>

<p><b>Пример #2 Переполнение целых на 32-битных системах</b></p>
<?php
echo "
\$big_num = 9425378894; // int(9425378894)<br>
\$big_num2 = 9425378895; // float(9425378895)<br>
\$thusend = 1000;<br>
\$big_num3 = 50000000 * \$thusend;<br>
var_dump(\$big_num3);<br>
";

$big_num = 9425378894;
$big_num2 = 9425378895;
$thusend = 1000;
$big_num3 = 50000000 * $thusend;
var_dump($big_num3);
echo "// float(50000000000) <br><br>";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>

<p><b>Пример #3 Переполнение целых на 64-битных системах</b></p>

<?php

echo "
\$so_big_num = 9223372036854775807; // int(9223372036854775807)<br>
\$so_big_num2 = 9223372036854775808; // float(9.2233720368548E+18)<br>
\$thusend2 = 1000;<br>
\$so_big_num3 = 5000000000000000 * \$thusend;<br>
var_dump(\$so_big_num3);<br>
";

$so_big_num = 9223372036854775807;
$so_big_num2 = 9223372036854775808;
$thusend2 = 100000;
$so_big_num3 = 50000000000000000  * $thusend;
var_dump($so_big_num3);
echo "// float(5.0E+19) <br><br>";

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>

<h2 style="color:#a07878;">Преобразование в целое</h2>

<?php
echo "<p><b>Из булевого типа</b></p>";
echo "
\$var_bool = true = &nbsp
";
$var_bool = true;
echo $var_bool;

echo "<br>
\$var_bool2 = false = &nbsp 0 - не выводит
";
$var_bool2 = false;
echo $var_bool2;

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>
<p><b>Из строк</b></p>

<?php

echo "
\$var1 = 1 + \"10.5\";<br>
\$var2 = 1 + \"-1.3e3\";<br>
\$var3 = 1 + \"bob-1.3e3\";<br>
\$var4 = 1 + \"bob3\";<br>
\$var5 = 1 + \"10 Small Pigs\";<br>
\$var6 = 4 + \"10.2 Little Piggies\";<br>
\$var7 = \"10.0 pigs \" + 1;<br>
\$var8 = \"10.0 pigs \" + 1.0;<br>
";

$var1 = 1 + "10.5";
$var2 = 1 + "-1.3e3";
$var3 = 1 + "bob-1.3e3";
$var4 = 1 + "bob3";
$var5 = 1 + "10 Small Pigs";
$var6 = 4 + "10.2 Little Piggies";
$var7 = "10.0 pigs " + 1;
$var8 = "10.0 pigs " + 1.0;

echo $var1."<br>";
echo $var2."<br>";
echo $var3."<br>";
echo $var4."<br>";
echo $var5."<br>";
echo $var6."<br>";
echo $var7."<br>";
echo $var8;

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>
