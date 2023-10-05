<?php
function my_create_map(...$arrays) {
    $map = [];

    foreach ($arrays as $array) {
        if (count($array) >= 2) {
            $map[$array[0]] = $array[1];
        }   else {
        echo "The given arguments aren't valid.\n";
        return null;
        }
    }

    return $map;
}