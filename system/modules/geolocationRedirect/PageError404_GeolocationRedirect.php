<?php 

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014
 * @package    geolocationRedirect
 * @license    GNU/LGPL 
 * @filesource
 */

class PageError404_GeolocationRedirect extends PageError404
{

    public function __construct()
    {
        parent::__construct();

        $this->import('Environment');
        $this->import('Database');

        $this->geolocationRedirect();
    }

    /**
     * Check for redirects.
     * 
     * @return void
     */
    public function geolocationRedirect()
    {
        // Load current url.
        $strUrl = $this->getCurrentUrl();

        // Seach for an entry in the database.
        $strSQL = 'SELECT *
                    FROM tl_geolocation_redirect
                    WHERE published=?
                        AND ( (rgxp="" AND url=?) OR (rgxp="1" AND ? REGEXP url) )
                        AND ( host=? OR CONCAT("www.",host)=? OR host="" )
                    ORDER BY priority, url';

        $objTarget = Database::getInstance()
                ->prepare($strSQL)
                ->limit(1)
                ->execute('1', $strUrl, $strUrl, $this->Environment->host, $this->Environment->host);

        // Check if we have some values.
        if ($objTarget->numRows == 0)
        {
            $this->log(vsprintf('Could not found a match for: %s', $strUrl), __CLASS__ . ' | ' . __FUNCTION__, TL_GENERAL);
            return;
        }

        // Chose a jump to method. Direct per page id or pattern url.
        if ($objTarget->jumpToType == 'jumpToUrl')
        {
            $targetURL = $objTarget->jumpToUrl;

            // replace regex-params
            if ($objTarget->rgxp == '1' && preg_match("~{$objTarget->url}~i", $strUrl))
            {
                preg_match("~{$objTarget->url}~i", $strUrl, $arrErg);

                foreach ($arrErg as $i => $param)
                {
                    $targetURL = str_replace('$' . $i, $param, $targetURL);
                }
            }

            // TL knows only "303: see other", no "307: temporary"
            $type = ($objTarget->type == '301') ? '301' : '303';

            // Get all countries.
            $arrCountries = deserialize($objTarget->countries, true);
            Geolocation::getInstance()->setUserGeolocationByShortCountries($arrCountries);

            // Redirect to page
            $this->redirect($targetURL, $type);
        }
        else if ($objTarget->jumpToType == 'jumpTo')
        {
            // Search for the jumpTo page.
            $objJumpTo = Database::getInstance()
                    ->prepare("SELECT id, alias FROM tl_page WHERE id=?")
                    ->limit(1)
                    ->execute($objTarget->jumpTo);

            // Check if we have a jumpTo page.
            if ($objJumpTo->numRows == 0)
            {
                $this->log(vsprintf('Could not found the jump to page for: "%s" with ID: %s ', $strUrl, $objTarget->jumpTo), __CLASS__ . ' | ' . __FUNCTION__, TL_ERROR);
                return;
            }

            // TL knows only "303: see other", no "307: temporary".
            $type = ($objTarget->type == '301') ? '301' : '303';

            // set objPage cause we need the rootLanguage there for generateFrontendUrl
            $GLOBALS['objPage'] = $this->getPageDetails($objJumpTo->id);

            // Get all countries.
            $arrCountries = deserialize($objTarget->countries, true);
            Geolocation::getInstance()->setUserGeolocationByShortCountries($arrCountries);

            // Redirect.
            $this->redirect($this->generateFrontendUrl($objJumpTo->row()), $type);
        }
    }

    ////////////////////////////////////////////////////////////////////////////
    // Helper functions
    ////////////////////////////////////////////////////////////////////////////

    /**
     * Get the curren url and clear it.
     * 
     * @return string Current url.
     */
    protected function getCurrentUrl()
    {
        // Get the current url.
        $strUrl = $this->Environment->request;

        // Kill querystring.
        if (isset($GLOBALS['TL_CONFIG']['geolocationRedirectKillQueryStr']) && $GLOBALS['TL_CONFIG']['geolocationRedirectKillQueryStr'] == true)
        {
            $strUrl = (strpos($strUrl, '?') === false) ? $strUrl : substr($strUrl, 0, strpos($strUrl, '?'));
        }

        // Kill trailing /.
        if (substr($strUrl, -1) == '/')
        {
            $strUrl = substr($strUrl, 0, -1);
        }

        // decode url
        $strUrl = urldecode($strUrl);

        return $strUrl;
    }

}