<h2 style="color:#a07878;">Строки </h2>
<p><b>Синтаксис </b></p>
<p>Строка может быть определена четырьмя различными способами:</p>
<ul>
    <li>одинарными кавычками</li>
    <li>двойными кавычками</li>
    <li>heredoc-синтаксисом</li>
    <li>nowdoc-синтаксисом (начиная с версии PHP 5.3.0)</li>
</ul>

<p><b>Одинарные кавычки </b></p>
<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:45 AM
 */
echo "<b>echo 'это простая строка';</b><br>";
echo 'это простая строка <br><br>';

echo "<b>
echo 'Также вы можете вставлять в строки<br>
символ новой строки вот так,<br>
это нормально';<br>
</b> ";
echo 'Также вы можете вставлять в строки<br>
символ новой строки вот так,<br>
это нормально <br><br>';


echo "
// Выводит: Однажды Арнольд сказал: \"I'll be back\"<br>
<b>echo 'Однажды Арнольд сказал: \"I\'ll be back\"';</b><br>
";
echo 'Однажды Арнольд сказал: "I\'ll be back" <br><br>';

echo "
// Выводит: Вы удалили C:\*.*?<br>
<b>echo 'Вы удалили C:\\*.*?';</b><br>
";
echo 'Вы удалили C:\\*.*? <br><br>';

echo "
// Выводит: Вы удалили C:\*.*?<br>
<b>echo 'Вы удалили C:\*.*?';</b><br>
";
echo 'Вы удалили C:\*.*? <br><br>';


echo "
// Выводит: Это не будет развернуто: \n новая строка<br>
<b>echo 'Это не будет развернуто: \n новая строка';</b><br>
";


echo 'Это не будет развернуто: \n новая строка <br><br>';
echo "
// Выводит: Переменные \$expand также \$either не разворачиваются<br>
<b>echo 'Переменные \$expand также \$either не разворачиваются';</b><br>
";

echo 'Переменные $expand также $either не разворачиваются';
echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

?>

<p><b>Двойные кавычки</b></p>

<?php
echo "Переменные, заключенные в двойные ковычки, обрабатываются интерпритатором.<br>";

echo "
\$juice = \"apple\";<br>

echo \"He drank some \$juice juice.\";<br>
";
$juice = "apple";

echo "He drank some $juice juice.".PHP_EOL;


echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>

<p><b>Heredoc </b></p>

<?php

echo "<p>Пример #1 Пример неправильного синтаксиса</p>";
echo '
class foo {<br>
    public $bar = <<<EOT<br>
bar<br>
    EOT;<br>
// отступ перез закрывающим идентификатором недопустим<br>
}<br>
';

echo "<p>Пример #2 Пример правильного синтаксиса</p>";

echo '
class foo {<br>
    public $bar = <<<EOT<br>
bar<br>
EOT;<br>
}<br>
';

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";
?>

<p><b>Nowdoc</b></p>

<p>Nowdoc - это то же самое для строк в одинарных кавычках, что и heredoc для строк в двойных кавычках. Nowdoc похож на heredoc, но внутри него не осуществляется никаких подстановок. Эта конструкция идеальна для внедрения PHP-кода или других больших блоков текста без необходимости его экранирования. В этом он немного похож на SGML-конструкцию <![CDATA[ ]]> тем, что объявляет блок текста, не предназначенный для обработки.</p>
