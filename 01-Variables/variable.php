<?php


/*
    ### Mutable VS Immutable ###
    
    - Mutable variables: are changeable. means
    that you can assign new value to the
    already defiend and assigned variable

    - Immutable variables: are not changeable. means
    that you can't assign new value to the
    already defined and assigned variable

*/

/*
    for creating simple variable just use "$"
    then put your prefer variable name

    "$variabel"                  --> is the name of our variable
    "This is a simple variable"  --> is the value of our variable

*/

/*
    You are allowed to assign new value to the variable(Mutable)

    $variable = "$variable Changed";
*/

    $variable = "This is a simple variable";
    echo $variable;

    echo "<br />";
    $variable = '$variable Changed';
    echo $variable;

?>