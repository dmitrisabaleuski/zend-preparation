<?php

echo '
define("CONSTANT", "Hello World");<br>
echo CONSTANT;<br>

define("DIMA", "Dima Sobolevski");<br>
echo DIMA;<br>

const DIMA2 = "Hello";<br>
echo DIMA2;<br>
<br>
const DIMA_NUM1 = DIMA.\'. Yahoo!!!\';<br>
echo DIMA_NUM1;
<br>
const DIMARRAY = array(1,2,3);<br>
echo DIMARRAY[2];<br>
';

define("CONSTANT", "Hello World<br>");
echo CONSTANT;

define("DIMA", "Dima Sobolevski<br>");
echo DIMA;

const DIMA2 = "Hello<br>";
echo DIMA2;

const DIMA_NUM1 = DIMA.'. Yahoo!!!<br>';
echo DIMA_NUM1;

const DIMARRAY = array(1,2,3);
echo DIMARRAY[2];