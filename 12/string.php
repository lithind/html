<?php
    $a="good  evening";
    $b="good evening";
    echo var_dump($a)."<br>";
    echo substr($a,1)."<br>";
    if (strcmp($a,$b)==0){
        echo "two strings are equel"."<br>";
    }elseif(strcmp($a,$b)>0){
        echo "string1 is greater than string 2"."<br>";
    }elseif(strcmp($a,$b)<0){
        echo "strin2 is greater than string 1"."<br>";
    }
    echo strpos($a,"ing");

?>