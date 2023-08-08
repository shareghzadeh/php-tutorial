<?php

require "function.php";

sayHi();

echo "<br />";

sayHiToMe("Hamid");

echo "<br />";

sum(4, 5);

echo "<br />";

// we need to echo this because we just return it in the function
echo(multi(6, 8));

echo "<br />";


// we can pass the function to a variable then echo it
$func = isTrue(true);
echo $func;



?>