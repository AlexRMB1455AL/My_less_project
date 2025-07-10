<?php



require_once('../vendor/autoload.php');



$worker = new \App\Worker('victor', 42, ['olga', 'koly', 'zina'], 4);
$turist = new \App\Turist('17', 42, 8, ['olga', 'koly', 'zina']);
// $turist->figaro();
// $developer = new \App\Developer("gko", 6, [65, 11, 14], 4);
// var_dump($developer->age);
// print_r($turist->namet);
// foreach ($turist as $tur){
// print_r($tur);
// }
// $gnumik = new \App\Dely2('colins', 19, [2, 3], 222);
// $gomkol = $gnumik->name;
// $gnumik->work();
// $worker->work();
// var_dump($worker);
//  $developer->setPosition('developer');
//  $developer->rest();

  var_dump(\App\Call::calK(5, 6));
//  var_dump(Call->getCountCal());
\App\Call :: $counCall += 120;
var_dump(\App\Call::$countCall);