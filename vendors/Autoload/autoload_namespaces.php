<?php
$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);
$libDir = $baseDir . '/library';
return array(
    //'Zend' => $vendorDir . '/ZF2/', // uncomment when Webserver do not have ZF2 library. Using ZF2 in library/ZF2
    //'Doctrine\\ORM' => $vendorDir . '/Doctrine2/',
    //'Doctrine\\DBAL\\Migrations' => $vendorDir . '/Doctrine2/',
    //'Doctrine\\DBAL' => $vendorDir . '/Doctrine2/',
    //'Doctrine\\Common\\DataFixtures' => $vendorDir . '/Doctrine2/',
    //'Doctrine\\Common' => $vendorDir . '/Doctrine2/',
    'ZG' => $libDir,
    'DoctrineORMModule' => $vendorDir . '/DoctrineORMModule/src/',
    'Elastica' => $vendorDir . '/ElasticaSearch/',
    'DoctrineModule' => $vendorDir . '/DoctrineModule/src/',
    'ZendDeveloperTools' => $vendorDir . '/ZendDeveloperTools/src/',
);
