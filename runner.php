<?php
require_once __DIR__ . '/vendor/autoload.php';

if ($argc < 3 && $argc > 4) {
    echo getHelp($argv);
    die();
}

$day = $argv[1];
$puzzle = $argv[2];
$year = isset($argv[3]) ? $argv[3] : null;

$day = ucfirst(strtolower($day));
$puzzle = ucfirst(strtolower($puzzle));

$class = "VFDev\\AdventOfCode";
if ($year !== null) {
    $class .= "$year";
}
$class .= "\\$day\\$puzzle";

$runner = new $class();
$runner();

function getHelp($argv)
{
    $progName = $argv[0];
    return <<<EOHELP

php $progName DayN PuzzleN {Year=Optional if it is 2015}


EOHELP;

}