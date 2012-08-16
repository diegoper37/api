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
echo '<pre>';
echo 'comentario na classe<br>';
print_r($reflection->getAnnotation('Api\Mapping\Route'));
echo '-----------------<br>';
echo 'comentario nos metodos<br>';
$props = $reflection->getProperties();
foreach ($props as $prop){
    if($prop->hasAnnotation('Api\Mapping\Route')){
        print_r($prop);
    }
}
echo '-----------------<br>';
echo 'comentario nos atributos<br>';
$meths = $reflection->getMethods();
foreach ($meths as $meth){
    if($meth->hasAnnotation('Api\Mapping\Route')){
        print_r($meth->getAnnotations());
    }
}

