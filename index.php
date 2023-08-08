<?php


    foreach(glob('*') as $filename) {
        if ($filename == "index.php"){
            break;
        }
        echo "<ul><li><a href=$filename>$filename</li></ul>";
    }


?>