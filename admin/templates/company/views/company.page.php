<?php

if ( empty($_COOKIE["has_visited"]["incredible"])) {
    echo "What is happening?. This thing is not empty";

    print_r($_COOKIE);
}
else {
    echo "Definitely, I am know what I am asking for.";
}
echo "<hr />";
echo $requested;