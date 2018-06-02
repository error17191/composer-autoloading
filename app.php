<?php

require_once 'vendor/autoload.php';
use Some\Nested\NameSpaceName\MyClass;

$object = new MyClass();

var_dump($object instanceof MyClass);
var_dump($object instanceof BaseClass);
var_dump($object instanceof SomeInterface);
