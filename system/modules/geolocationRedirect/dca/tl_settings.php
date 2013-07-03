<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Geolocation Redirect
 * 
 * @copyright 	MEN AT WORK 2013
 * @author      Stefan Heimes <cms@men-at-work.de>
 * @license    	LGPL
 * @package 	GeolocationRedirect
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{geolocationRedirect_legend:hide},geolocationRedirectKillQueryStr';

$GLOBALS['TL_DCA']['tl_settings']['fields']['geolocationRedirectKillQueryStr'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['geolocationRedirectKillQueryStr'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12 w50')
);


?>
