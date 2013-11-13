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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['new']                = array('New redirection', 'Creates a new redirection.');
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['expert_legend']      = 'Config';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['target_legend']      = 'Target';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['redirect_legend']    = 'Redirect settings';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['geolocation_legend'] = 'Geolocation settings';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['priority'][0]   = "Priority";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['priority'][1]   = "Choose priority for this rule. Smaller values are prefered.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['published'][0]  = "Active";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['published'][1]  = "Here you can enable the redirection.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['url'][0]        = "URL";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['url'][1]        = "The URL of the redirect without domain. e.g.: oldpage/index.html";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['host'][0]       = "Host";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['host'][1]       = "The redirect matches only for the given host (dns).";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['rgxp'][0]       = "regular expression";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['rgxp'][1]       = "Use URL as REGEXP. You can use parameters like $1 in the target url.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToType'][0] = "Targettype";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToType'][1] = "Choose between an internal or external redirection.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['type'][0]       = "Redirecttype";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['type'][1]       = "Choose between an permanent or temporaray redirection.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpTo'][0]     = "Redirect-target";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpTo'][1]     = "The request redirects to this website.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToUrl'][0]  = "URL";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToUrl'][1]  = "The URL of the target-website. You can enter one without an domain.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['countries'][0]  = 'Countries';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['countries'][1]  = 'Please select one or more countries.';

/**
 * Values
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['everyHost']                                   = 'every host';
$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpTo']    = 'Internal redirection';
$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpToUrl'] = 'External redirection';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['typeOptions']                                 = array(
    '301' => 'Permanent (301)',
    '307' => 'Temporary (307)',
);