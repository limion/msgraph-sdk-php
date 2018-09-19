<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSWiFiConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* MacOSWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSWiFiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the networkName
    *
    * @return string The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkName
    *
    * @param string $val The networkName
    *
    * @return MacOSWiFiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ssid
    *
    * @return string The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ssid
    *
    * @param string $val The ssid
    *
    * @return MacOSWiFiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectAutomatically
    *
    * @return bool The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectAutomatically
    *
    * @param bool $val The connectAutomatically
    *
    * @return MacOSWiFiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectWhenNetworkNameIsHidden
    *
    * @return bool The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectWhenNetworkNameIsHidden
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return MacOSWiFiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiSecurityType
    *
    * @return WiFiSecurityType The wiFiSecurityType
    */
    public function getWiFiSecurityType()
    {
        if (array_key_exists("wiFiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wiFiSecurityType"], "Microsoft\Graph\Beta\Model\WiFiSecurityType")) {
                return $this->_propDict["wiFiSecurityType"];
            } else {
                $this->_propDict["wiFiSecurityType"] = new WiFiSecurityType($this->_propDict["wiFiSecurityType"]);
                return $this->_propDict["wiFiSecurityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wiFiSecurityType
    *
    * @param WiFiSecurityType $val The wiFiSecurityType
    *
    * @return MacOSWiFiConfiguration
    */
    public function setWiFiSecurityType($val)
    {
        $this->_propDict["wiFiSecurityType"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxySettings
    *
    * @return WiFiProxySetting The proxySettings
    */
    public function getProxySettings()
    {
        if (array_key_exists("proxySettings", $this->_propDict)) {
            if (is_a($this->_propDict["proxySettings"], "Microsoft\Graph\Beta\Model\WiFiProxySetting")) {
                return $this->_propDict["proxySettings"];
            } else {
                $this->_propDict["proxySettings"] = new WiFiProxySetting($this->_propDict["proxySettings"]);
                return $this->_propDict["proxySettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxySettings
    *
    * @param WiFiProxySetting $val The proxySettings
    *
    * @return MacOSWiFiConfiguration
    */
    public function setProxySettings($val)
    {
        $this->_propDict["proxySettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualAddress
    *
    * @return string The proxyManualAddress
    */
    public function getProxyManualAddress()
    {
        if (array_key_exists("proxyManualAddress", $this->_propDict)) {
            return $this->_propDict["proxyManualAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualAddress
    *
    * @param string $val The proxyManualAddress
    *
    * @return MacOSWiFiConfiguration
    */
    public function setProxyManualAddress($val)
    {
        $this->_propDict["proxyManualAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualPort
    *
    * @return int The proxyManualPort
    */
    public function getProxyManualPort()
    {
        if (array_key_exists("proxyManualPort", $this->_propDict)) {
            return $this->_propDict["proxyManualPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualPort
    *
    * @param int $val The proxyManualPort
    *
    * @return MacOSWiFiConfiguration
    */
    public function setProxyManualPort($val)
    {
        $this->_propDict["proxyManualPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the proxyAutomaticConfigurationUrl
    *
    * @return string The proxyAutomaticConfigurationUrl
    */
    public function getProxyAutomaticConfigurationUrl()
    {
        if (array_key_exists("proxyAutomaticConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["proxyAutomaticConfigurationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAutomaticConfigurationUrl
    *
    * @param string $val The proxyAutomaticConfigurationUrl
    *
    * @return MacOSWiFiConfiguration
    */
    public function setProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["proxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the preSharedKey
    *
    * @return string The preSharedKey
    */
    public function getPreSharedKey()
    {
        if (array_key_exists("preSharedKey", $this->_propDict)) {
            return $this->_propDict["preSharedKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preSharedKey
    *
    * @param string $val The preSharedKey
    *
    * @return MacOSWiFiConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }
    
}