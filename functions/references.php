<?php

$person = "Jhon";

$client = &$person;

var_dump($person, $client);

$client = "Hari";

var_dump($person, $client);

$person ="Divya";

var_dump($person, $client);

$original = 5;

var_dump($original);

