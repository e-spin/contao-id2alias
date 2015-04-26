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
 * Namespace
 */
namespace GenerateId2Alias;


/**
 * Class GenerateUrlFromId2Alias
 */
class GenerateUrlFromId2Alias extends \Frontend
{

  /**
   * @param array $arrFragments
   * @return array
   */
  public function changeUrlFromId2Alias($arrFragments)
  {
		// check if url-fragment numeric like /101.html
		if(is_numeric($arrFragments[0])) {
			if (($jumpTo = \PageModel::findByPk($arrFragments[0])) !== null) { 
			   $strUrl = $jumpTo->getFrontendUrl();
			   $this->redirect($strUrl);
			}	
		}
    return $arrFragments;
  }  
    
}
