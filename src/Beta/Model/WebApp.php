<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WebApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WebApp extends MobileApp
{
    /**
    * Gets the appUrl
    *
    * @return string The appUrl
    */
    public function getAppUrl()
    {
        if (array_key_exists("appUrl", $this->_propDict)) {
            return $this->_propDict["appUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUrl
    *
    * @param string $val The appUrl
    *
    * @return WebApp
    */
    public function setAppUrl($val)
    {
        $this->_propDict["appUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the useManagedBrowser
    *
    * @return bool The useManagedBrowser
    */
    public function getUseManagedBrowser()
    {
        if (array_key_exists("useManagedBrowser", $this->_propDict)) {
            return $this->_propDict["useManagedBrowser"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useManagedBrowser
    *
    * @param bool $val The useManagedBrowser
    *
    * @return WebApp
    */
    public function setUseManagedBrowser($val)
    {
        $this->_propDict["useManagedBrowser"] = boolval($val);
        return $this;
    }
    
}