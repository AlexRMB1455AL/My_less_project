<?php

// $repo = 123;

// $repo += 456;

// echo"$repo";
$goter = "hello, World!";
// echo $goter; 
// var_dump($repo);

function hello($check) {
echo "getra";

return 8 + $check;
}

require_once('../app/Worker.php');

//echo hello(286);
echo pow(3,8), ucfirst($goter);

$worker = new Worker();
$worker->work();
