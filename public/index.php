<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
realpath('../library'),
get_include_path(),
)));
require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Api');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

$reflection = new Api\Annotation\ReflectionAnnotatedClass('Api\\Route\\Diego');
echo $reflection->getAnnotation('Api\\Mapping\\Route')->value;