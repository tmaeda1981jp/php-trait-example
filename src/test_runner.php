<?php

require('Accessor.php');
require('AccessorExample.php');

$example = new AccessorExample();
$example->setName('Takashi');
$example->setAge(34);

print_r($example->getName());
print_r($example->getAge());