<h2 style="color:#a07878;">Числа с плавающей точкой </h2>
<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:45 AM
 */

echo "
\$a = round((0.1+0.7)*10); //с функцией округления выведет -8, без, выведет -7<br>
\$b = 1.2e3;<br>
\$c = 7E-10;
<br>";

$a = round((0.1+0.7)*10);
$b = 1.2e3;
$c = 7E-10;

echo $a."<br>". $b."<br>". $c;

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

?>
<p><b>Сравнение чисел с плавающей точкой</b></p>

<?php

echo "
\$a и \$b равны до 5-ти знаков после запятой.<br>
\$a = 1.23456789;<br>
\$b = 1.23456780;<br>
\$epsilon = 0.00001;<br><br>

if(abs(\$a-\$b) < \$epsilon) {<br>
    echo \"true\";<br>
}<br>
";
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>
