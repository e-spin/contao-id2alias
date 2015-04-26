<?php

/**
 * e-spin_id2alias extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 e-spin
 *
 * @package   e-spin_id2alias
 * @author 		e-spin <http://e-spin.de>
 * @author  	Ingolf Steinhardt <contao@e-spin.de> 
 * @license 	CC by-nc-sa 
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'GenerateId2Alias',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'GenerateId2Alias\GenerateUrlFromId2Alias' => 'system/modules/e-spin_id2alias/classes/GenerateUrlFromId2Alias.php',
));
