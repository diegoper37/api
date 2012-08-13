<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
use Doctrine\Common\Annotations\SimpleAnnotationReader;

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
realpath('../library'),
get_include_path(),
)));
require_once 'Doctrine/Common/ClassLoader.php';
//require_once 'addendum/annotations.php';

$classLoader = new \Doctrine\Common\ClassLoader('Api');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

use Restapi;
use Doctrine\Common\Annotations;
$diego = new Api\Diego();
$reflaction = new SimpleAnnotationReader();
$class = new \ReflectionClass($diego);
/**
 * @Annotation
 * @Target("CLASS")
 */
final class Table
{
    public $name;
}

$ok = $reflaction->getClassAnnotation($class,'Table');
print_r($ok);
//echo $reflection->getAnnotation('Table')->value;
//var_dump($docs);