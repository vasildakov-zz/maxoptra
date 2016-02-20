<?php
// http://doctrine-common.readthedocs.org/en/latest/reference/annotations.html
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

// standard composer install vendor autoload magic
require './vendor/autoload.php';

// Bootstrap the JMS custom annotations for Object to Json mapping
AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation', './vendor/jms/serializer/src'
);
