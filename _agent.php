<?php
require 'vendor/autoload.php';
use Nrwtaylor\StackAgentThing;

$argument_array = $argv;
$thing = new \Nrwtaylor\StackAgentThing\Thing(null); // State contains uuid
$agent = new \Nrwtaylor\StackAgentThing\Meta($thing,implode(" ", $argument_array));

var_dump($argument_array);
var_dump(isset($argv));

var_dump($agent->to);
var_dump($agent->from);
var_dump($agent->subject);

// Need to figure out recursive array iterator in Chocie.php

$thing->Create($agent->to, $agent->from, $agent->subject);

$smsgraph = new \Nrwtaylor\StackAgentThing\Agent($thing);
exit();

?>

