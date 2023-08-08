<?php

    $cars = [
        ["BMW", "German"],
        ["Benz", "German"],
        ["Pride", "Iran"],
    ];

    echo $cars[1][0];
    echo "<br>";

    // Key Value Pairs
    $cars = [
        ["car" => "BMW", "Country"  => "German"],
        ["car" => "Benz", "Country" => "German"],
        ["car" => "Pride", "Country"=> "Iran"],
    ];

    echo $cars[2]["car"];

?>