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

$GLOBALS['TL_HOOKS']['getPageIdFromUrl'][] = array('GenerateUrlFromId2Alias', 'changeUrlFromId2Alias');
