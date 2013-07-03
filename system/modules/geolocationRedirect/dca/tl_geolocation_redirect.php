<?php

if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

/**
 * Geolocation Redirect
 * 
 * @copyright 	MEN AT WORK 2013
 * @author      Stefan Heimes <cms@men-at-work.de>
 * @license    	LGPL
 * @package 	GeolocationRedirect
 * @filesource
 */
$GLOBALS['TL_DCA']['tl_geolocation_redirect'] = array
    (
    // Config
    'config'   => array
        (
        'dataContainer'    => 'Table',
        'enableVersioning' => false,
    ),
    // List
    'list'     => array
        (
        'sorting'           => array
            (
            'mode'        => 1,
            'fields'      => array('priority', 'url'),
            'flag'        => 11,
            'panelLayout' => 'filter;search,limit',
        ),
        'label'             => array
            (
            'fields'         => array('url', 'type', 'host'),
            'label_callback' => array('tl_geolocation_redirect', 'label'),
            'format'         => '%s'
        ),
        'global_operations' => array
            (
            'all' => array
                (
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();"'
            )
        ),
        'operations'        => array
            (
            'edit'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif'
            ),
            'copy'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif'
            ),
            'delete' => array
                (
                'label'      => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif'
            )
        )
    ),
    // Palettes
    'palettes' => array
        (
        '__selector__' => array('jumpToType'),
        'default'      => '{expert_legend},priority,published;{target_legend},url,host,rgxp;{redirect_legend},jumpToType;{geolocation_legend},countries;',
        'jumpTo'       => '{expert_legend},priority,published;{target_legend},url,host,rgxp;{redirect_legend},jumpToType,type,jumpTo;{geolocation_legend},countries;',
        'jumpToUrl'    => '{expert_legend},priority,published;{target_legend},url,host,rgxp;{redirect_legend},jumpToType,type,jumpToUrl;{geolocation_legend},countries;',
    ),
    // Fields
    'fields'   => array
        (
        'url'        => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['url'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array('mandatory'      => true, 'maxlength'      => 255, 'tl_class'       => 'long', 'decodeEntities' => true)
        ),
        'host'       => array
            (
            'label'            => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['host'],
            'exclude'          => true,
            'filter'           => true,
            'inputType'        => 'select',
            'default'          => '-',
            'options_callback' => array('tl_geolocation_redirect', 'getHosts'),
            'eval'             => array('maxlength' => 255, 'tl_class'  => 'w50')
        ),
        'rgxp'       => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['rgxp'],
            'exclude'   => true,
            'default'   => '0',
            'inputType' => 'checkbox',
            'eval'      => array('tl_class' => 'w50 m12')
        ),
        'jumpToType' => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToType'],
            'exclude'   => true,
            'inputType' => 'radio',
            'filter'    => true,
            'default'   => 'Intern',
            'options'   => array(
                'jumpTo'    => &$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpTo'],
                'jumpToUrl' => &$GLOBALS['TL_LANG']['tl_content']['tl_geolocation_redirect']['tl_redirectTypes']['jumpToUrl'],
            ),
            'eval'      => array(
                'mandatory'      => true,
                'submitOnChange' => true,
                'tl_class'       => 'w50 m12'
            )
        ),
        'type'       => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['type'],
            'default'   => '301',
            'exclude'   => true,
            'filter'    => true,
            'inputType' => 'radio',
            'reference' => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['typeOptions'],
            'options'   => array('301', '307'),
            'eval'      => array(
                'tl_class'  => 'w50 m12',
                'mandatory' => true
            )
        ),
        'jumpTo'     => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpTo'],
            'exclude'   => true,
            'inputType' => 'pageTree',
            'eval'      => array(
                'fieldType' => 'radio',
                'mandatory' => true,
                'tl_class'  => 'clr'
            )
        ),
        'jumpToUrl'  => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['jumpToUrl'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory'      => true,
                'maxlength'      => 255,
                'tl_class'       => 'clr long',
                'decodeEntities' => true
            )
        ),
        'priority'   => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['priority'],
            'default'   => 10,
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => true, 'rgxp'      => 'digit', 'maxlength' => 10, 'tl_class'  => 'w50')
        ),
        'published'  => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['published'],
            'exclude'   => true,
            'default'   => '1',
            'inputType' => 'checkbox',
            'eval'      => array('tl_class' => 'w50 m12')
        ),
        'countries'  => array
            (
            'label'            => &$GLOBALS['TL_LANG']['tl_geolocation_redirect']['countries'],
            'exclude'          => true,
            'inputType'        => 'checkbox',
            'options_callback' => array('tl_geolocation_redirect', 'getCountriesByContinent'),
            'eval'             => array('multiple'  => true, 'size'      => 8, 'mandatory' => true)
        )
    )
);

class tl_geolocation_redirect extends Controller
{

    /**
     * @var Htaccess
     */
    protected $Htaccess;

    public function __construct()
    {
        parent::__construct();
        $this->import('Database');
    }

    ////////////////////////////////////////////////////////////////////////////
    // Geolocation
    ////////////////////////////////////////////////////////////////////////////

    /**
     * Get an array with all countries.
     * 
     * @return array
     */
    public function getCountriesByContinent()
    {
        $return    = array();
        $countries = array();
        $arrAux    = array();
        $arrTmp    = array();

        $this->loadLanguageFile('countries');
        $this->loadLanguageFile('continents');
        include(TL_ROOT . '/system/config/countries.php');
        include(TL_ROOT . '/system/config/countriesByContinent.php');

        foreach ($countriesByContinent as $strConKey => $arrCountries)
        {
            $strConKeyTranslated = strlen($GLOBALS['TL_LANG']['CONTINENT'][$strConKey]) ? utf8_romanize($GLOBALS['TL_LANG']['CONTINENT'][$strConKey]) : $strConKey;
            $arrAux[$strConKey]  = $strConKeyTranslated;
            foreach ($arrCountries as $key => $strCounntry)
            {
                $arrTmp[$strConKeyTranslated][$key] = strlen($GLOBALS['TL_LANG']['CNT'][$key]) ? utf8_romanize($GLOBALS['TL_LANG']['CNT'][$key]) : $countries[$key];
            }
        }

        ksort($arrTmp);

        foreach ($arrTmp as $strConKey => $arrCountries)
        {
            asort($arrCountries);
            //get original continent key
            $strOrgKey           = array_search($strConKey, $arrAux);
            $strConKeyTranslated = strlen($GLOBALS['TL_LANG']['CONTINENT'][$strOrgKey]) ? ($GLOBALS['TL_LANG']['CONTINENT'][$strOrgKey]) : $strConKey;
            foreach ($arrCountries as $strKey => $strCountry)
            {
                $return[$strConKeyTranslated][$strKey] = strlen($GLOBALS['TL_LANG']['CNT'][$strKey]) ? $GLOBALS['TL_LANG']['CNT'][$strKey] : $countries[$strKey];
            }
        }

        $return[$GLOBALS['TL_LANG']['CONTINENT']['other']]['xx'] = strlen($GLOBALS['TL_LANG']['CNT']['xx']) ? $GLOBALS['TL_LANG']['CNT']['xx'] : 'No Country';

        return $return;
    }

    /**
     * Create lable.
     * 
     * @param type $row
     * @param type $label
     * @param DataContainer $dc
     * 
     * @return type
     */
    public function label($row, $label, DataContainer $dc = null)
    {
        $strTestUrl = $this->Environment->ssl ? 'https://' : 'http://';

        if ($row['host'])
        {
            $strTestUrl .= $row['host'];
        }
        else
        {
            $strTestUrl .= $this->Environment->host;
        }

        $strTestUrl .= '/' . $row['url'];

        $strTestIcon = '<a href="' . $strTestUrl . '" target="_blank">' . $this->generateImage('system/themes/default/images/root.gif', '') . '</a>';

        $strUrl = '';
        if ($row['host'])
        {
            $strUrl .= ($this->Environment->ssl ? 'https://' : 'http://') . $row['host'] . '/';
        }
        $strUrl .= $row['url'];

        $strTarget = '';
        switch ($row['jumpToType'])
        {
            // ...for internal redirects
            case 'jumpTo':
                $objPage = $this->Database
                        ->prepare('SELECT * FROM tl_page WHERE id=?')
                        ->execute($row['jumpTo']);

                if (!$objPage->next())
                {
                    $strTarget = 'unknown page!';
                }
                else
                {
                    $strTarget = $this->generateFrontendUrl($objPage->row());
                }

                break;

            // ...for external redirects
            case 'jumpToUrl':
                $strTarget = $row['jumpToUrl'];
                break;

            // ...or continue with next
            default:
                $strTarget = 'invalid target!';
        }

        $rgxp      = (strlen($row['rgxp'])) ? '; REGEX' : '';
        $countrier = deserialize($row['countries'], true);

        return sprintf('%s %s &rarr; %s <span style="color:#b3b3b3; padding-left:3px;">[%s%s]</span><span style="color:#b3b3b3; padding-left:3px;">[Countries: %s]</span>', 
                $strTestIcon, 
                $strUrl,
                $strTarget, 
                $GLOBALS['TL_LANG']['tl_geolocation_redirect']['typeOptions'][$row['type']], 
                $rgxp, 
                implode(', ', $countrier)
        );
    }

    /**
     * Get all host from this page.
     * 
     * @return array.
     */
    public function getHosts()
    {
        $erg = $this->Database->execute('SELECT DISTINCT(dns) FROM tl_page WHERE type="root"');
        $arr = array('' => $GLOBALS['TL_LANG']['tl_geolocation_redirect']['everyHost']);
        while ($erg->next())
        {
            if (!strlen($erg->dns))
                continue;
            $dns       = preg_replace('/^www\./i', '', $erg->dns);
            $arr[$dns] = $dns;
        }
        return $arr;
    }

}

?>
