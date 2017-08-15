<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/11/2017
 * Time: 11:47 AM
 */
$func1 = function($a){
    return $a/2;
};

$char = range(2,6);

$equal = array_map($func1, $char);
print implode(',', $equal);