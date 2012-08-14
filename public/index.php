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

use Doctrine\Common\Annotations,
	Doctrine\ORM\Mapping;

$diego = new Api\Diego();
$class = new \ReflectionClass($diego);
/**
 * @Annotation
 * @Target("CLASS")
 */
final class Table
{
    public $name;
}

$factory = new Doctrine\ORM\Mapping\ClassMetadataFactory;
$factory->getMetadataFor('Api\Diego');
/* $reflaction = new Doctrine\Common\Annotations\AnnotationReader();
$all = $reflaction->getClassAnnotation($class, 'Table');
print_r($all); */
//echo $reflection->getAnnotation('Table')->value;
//var_dump($docs);