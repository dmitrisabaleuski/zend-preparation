<h3>Основы</h3>
<?php
echo '$name = \' Dima\'<br>';
$name = 'Dima';
echo $name;

echo '<br><br>$second_name = \' Sobolevski\'<br>';
$second_name = ' Sobolevski';
echo $second_name;

echo '<br><br>echo $name, $second_name<br>';
echo $name, $second_name;

echo '<br><br>echo $name + $second_name // такая запись не сработает';

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo '$var_link = &$name; //присваеваем значение переменной $name, новой переменной $var_link<br>';
$var_link = &$name;
echo $var_link;

echo '<br><br>$summ_var = "My name is $var_link"; // Суммируем переменные<br>';
$summ_var = "My name is $var_link";
echo $summ_var;

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo 'ВАЖНО!!! Присваивать по ссылке можно только имеованые значения!!!<br>
$name2 = \' Petya\';<br>
$summ_name2 = \' &$name2\'; // Такое написание будет работать.<br>
';
$name2 = 'Petya';
$summ_name2 = &$name2;
echo $summ_name2;

echo '<br><br>
$summ_name2 = $(24 + 7); // Такое написание не будет работать!!!<br>
';
