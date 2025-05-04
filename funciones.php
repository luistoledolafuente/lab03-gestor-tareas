<?php
function debuguear($input){
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

function islog() : bool{
    $auth = $_SESSION['auth'] ?? false;
    return $auth;
}
?>
