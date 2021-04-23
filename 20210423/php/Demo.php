<?php
require_once "Human.php";
require_once "Run.php";

$app = new Human("Peter");

$app->setRun(new class implements Runner{
    public function run(string $name){
        printf("%s is runner...",$name);
    }
});
$runner_name = $app->name;
$app->getRun()->run($runner_name);
?>