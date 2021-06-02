<?php declare(strict_types=1);
defined('_JEXEC') or die;

static $__FileFabrik_monolog;
if (!class_exists('Monolog\Logger', false) && !$__FileFabrik_monolog)
{
	/** @var \Composer\Autoload\ClassLoader $__FileFabrik_monolog */
	$__FileFabrik_monolog = require JPATH_LIBRARIES . '/vendor/autoload.php';
	if ($__FileFabrik_monolog instanceof \Composer\Autoload\ClassLoader)
	{
		$__FileFabrik_monolog->addPsr4('Monolog\\', __DIR__ . '/Monolog/');

		// load again
		return class_exists('Monolog\Logger');
	}

	return false;
}

return true;