<?php

echo "
\$var_boolean = true; // присвоить \$var_boolean значение TRUE<br>
echo \$var_boolean = 
";
$var_boolean = true;
echo $var_boolean." // выведет 1<br><br>";
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";


echo "
// == это оператор, который проверяет <br>
// эквивалентность и возвращает boolean <br>
if (\$bool_demonstrate == \"Some_string\"){<br>
    echo \"Выведет 1 или true\";<br>
}<br>
//не выведет ничего, как как является строкой (string)<br><br>
";
if ($bool_demonstrate == "Some_string"){
    echo "Выведет 1 или true";
}
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>
<h2 style="color:#a07878;">Преобразование в булев тип </h2>

<?php

echo "
var_dump((bool) \"\");        // bool(false)<br>
var_dump((bool) 1);         // bool(true)<br>
var_dump((bool) -2);        // bool(true)<br>
var_dump((bool) \"foo\");     // bool(true)<br>
var_dump((bool) 2.3e5);     // bool(true)<br>
var_dump((bool) array(12)); // bool(true)<br>
var_dump((bool) array());   // bool(false)<br>
var_dump((bool) \"false\");   // bool(true)<br><br>
";
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>