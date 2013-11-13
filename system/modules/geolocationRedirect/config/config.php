<?php

/**
 * Geolocation Redirect
 * 
 * @copyright 	MEN AT WORK 2013
 * @author      Stefan Heimes <cms@men-at-work.de>
 * @license    	LGPL
 * @package 	GeolocationRedirect
 * @filesource
 */

/**
 * Menue
 */
array_insert($GLOBALS['BE_MOD']['system'], 2, array(
    'geolocation_redirect' => array(
        'tables' => array('tl_geolocation_redirect'),
        'icon'   => 'system/modules/geolocationRedirect/html/icon.png'
    )
));

/**
 * Hooks
 */
$GLOBALS['TL_PTY']['error_404'] = 'PageError404_GeolocationRedirect';
