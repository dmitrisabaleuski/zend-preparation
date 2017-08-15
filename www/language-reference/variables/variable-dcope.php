<?php
/**
 * Created by PhpStorm.
 * User: Dzmitry_Sabaleuski
 * Date: 8/14/2017
 * Time: 5:08 PM
 */
function test(){
    static $one = 0;
    $one++;
    echo $one;
    if($one<11){
        test();
    }

}
test();