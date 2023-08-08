<?php
    // Indexed arrays

    $peopleOne = ["hamid", "ali", "hossein"];
    $peopleTwo = array("hassan", "bahram");

    // echo the first index in the array
    echo $peopleOne[0];
 
    echo "<br />";

    // add value to our array
    $peopleOne[3] = "John";

    // push value to the array
    array_push($peopleOne, "Monica");

    // print all the array
    print_r($peopleOne);

    echo "<br />";

    // add more that one value to the array
    $stuff = ["Jeen", 8, true];
    $stuff[] = 3.14;
    print_r($stuff);

    echo "<br />";

    // Merge to array together
    $merge = array_merge($peopleOne, $peopleTwo, $stuff);
    print_r($merge);

    echo "<br />";

    // remove the last element in the array
    array_pop($stuff);
    print_r($stuff);

    echo "<br />";

    // get the length of the array
    echo count($peopleTwo);
?>