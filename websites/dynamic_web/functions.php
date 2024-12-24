<?php
function dd($value)
{
    echo "<pre>";
    var_dump(value: $value);
    echo "</pre>";
    die();
}

function urLIs($value){
   return $_SERVER['REQUEST_URI'] === $value ;
}
