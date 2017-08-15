<h2 style="color:#a07878;">Синтаксис </h2>
<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:45 AM
 */
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color); /* это нужно для того, чтобы последующие записи в
$color не меняли последний элемент массива */

print_r($colors);

echo "<hr style=\"width:100%; height:1px;border:none;background: #000;\">";

echo strcmp(12345, '12345');