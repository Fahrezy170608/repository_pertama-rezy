<?php

for($i=1899;$i<=2100;$i++){
    if($i%400==0 or $i%4==0){
        echo "$i <br>";
    }
}