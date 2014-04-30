<?php 

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014
 * @package    geolocationRedirect
 * @license    GNU/LGPL 
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{geolocationRedirect_legend:hide},geolocationRedirectKillQueryStr';

$GLOBALS['TL_DCA']['tl_settings']['fields']['geolocationRedirectKillQueryStr'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['geolocationRedirectKillQueryStr'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12 w50')
);