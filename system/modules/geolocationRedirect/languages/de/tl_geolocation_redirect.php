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

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['new']                = array('Neue Weiterleitung', 'Erstellt eine neue Weiterleitung.');
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['expert_legend']      = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['target_legend']      = 'Ziel';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['redirect_legend']    = 'Weiterleitungs Einstellungen';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['geolocation_legend'] = 'Standort Einstellungen';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['priority'][0]   = "Priorität";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['priority'][1]   = "Wählen Sie die Priorität für diese Weiterleitung. Niedrigere Werte werden in der Reihenfolge bevorzugt.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['published'][0]  = "Aktiviert";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['published'][1]  = "Hier können Sie die Weiterleitung aktivieren.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['url'][0]        = "URL";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['url'][1]        = "Die URL ohne Domail. Zum Beispiel: alte_seite/index.html";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['host'][0]       = "Host";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['host'][1]       = "Die Weiterleitung wirkt nur für den angegebenen Host (dns).";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['rgxp'][0]       = "Regulärer Ausdruck";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['rgxp'][1]       = "Nutze eine REGEXP statt einer URL. Parameter wie $1 können in der Ziel-Url verwendet werden.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToType'][0] = "Ziel-Typ";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToType'][1] = "Wählen sie zwischen externer und interner Weiterleitung.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['type'][0]       = "Weiterleitungs-Typ";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['type'][1]       = "Wählen Sie zwischen permanenter und temporärer Weiterleitung.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpTo'][0]     = "Weiterleitungs-Ziel";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpTo'][1]     = "Die Anfrage wird an diese URL weitergeleitet.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToUrl'][0]  = "URL";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToUrl'][1]  = "Die URL der Zielseite. Sie können diese ohne die Domain angeben.";
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['countries'][0]  = 'Länder';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['countries'][1]  = 'Bitte wählen Sie eines oder mehrere Länder.';

/**
 * Values
 */
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['everyHost']                                   = 'jeder Host';
$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpTo']    = 'Interne Weiterleitung';
$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpToUrl'] = 'Externe Weiterleitung';
$GLOBALS['TL_LANG']['tl_geolocation_redirect']['typeOptions']                                 = array(
    '301' => 'Permanent (301)',
    '307' => 'Temporär (307)',
);
