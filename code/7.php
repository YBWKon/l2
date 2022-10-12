<?php

function printStringReturnNumber()
{
	echo "string", "\n<br>";
	return 1000;
}

$my_num = printStringReturnNumber();

echo $my_num;
