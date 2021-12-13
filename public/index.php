<?php

use CowSay\Cow;

require __DIR__ . '/../vendor/autoload.php  ';

$auroch = new Cow('Oh la vache!');

$output = $auroch->say();
echo $output;