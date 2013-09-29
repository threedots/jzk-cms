<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * Define the extension folders
 */
define('EXT_DIR', realpath(__DIR__ . '/../ext'));
define('THEME_DIR', realpath(__DIR__ . '/../ext/themes'));
define('BUNDLE_DIR', realpath(__DIR__ . '/../ext/bundles'));

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('', BUNDLE_DIR);

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
