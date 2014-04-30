<?php 

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014
 * @package    geolocationRedirect
 * @license    GNU/LGPL 
 * @filesource
 */

/**
 * Menue
 */
array_insert($GLOBALS['BE_MOD']['system'], 2, array
(
    'geolocation_redirect' => array
    (
        'tables' => array('tl_geolocation_redirect'),
        'icon'   => 'system/modules/geolocationRedirect/html/icon.png'
    )
));

/**
 * Hooks
 */
$GLOBALS['TL_PTY']['error_404'] = 'PageError404_GeolocationRedirect';
