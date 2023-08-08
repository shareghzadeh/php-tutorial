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
    "define" is keyword for
    creating constant variables(Immutable).

    "VARIABLE"              --> is the name of our variable
    "This is a 'CONSTANT'"  --> is the value of our variable

*/

/*
    If you try to assign new value to
    the constant you will get error


    VARIABLE = "Change it please";

*/


    define("VARIABLE", "This is a 'CONSTANT'");
    echo VARIABLE


?>