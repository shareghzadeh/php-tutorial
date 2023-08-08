<?php
    // Function without any arguments
    function sayHi() {
        echo "Hello";
    }

    // Function with any arguments
    //NOTE: we can have type annotation for our arguments
    function sayHiToMe(string $name) {
        echo "Hello, $name";
    }

    function sum(int $a, int $b) {
        echo $a + $b;
    }

    // Our function can have a return type like "int"
    function multi(int $a, int $b): int {
        return $a * $b;
    }

    function isTrue(bool $TrueOrFalse): string {
        if($TrueOrFalse == true) {
            return "TRUE";
        } else {
            return "FALSE";
        }
    }

?>