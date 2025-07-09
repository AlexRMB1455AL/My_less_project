<?php



require_once('../vendor/autoload.php');



$worker = new \App\Worker('victor', 42, ['olga', 'koly', 'zina']);
$turist = new \App\Turist('17', 42, 8, ['olga', 'koly', 'zina']);
// $turist->figaro();
$developer = new \App\Developer("gk", 6, [65, 11, 14]);
var_dump($developer->age);
print_r($turist->namet);
foreach ($turist as $tur){
print_r($tur);
}
// $worker->work();
// var_dump($worker);
 