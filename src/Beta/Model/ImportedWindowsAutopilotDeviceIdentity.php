<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentity File
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
* ImportedWindowsAutopilotDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ImportedWindowsAutopilotDeviceIdentity extends Entity
{
    /**
    * Gets the orderIdentifier
    *
    * @return string The orderIdentifier
    */
    public function getOrderIdentifier()
    {
        if (array_key_exists("orderIdentifier", $this->_propDict)) {
            return $this->_propDict["orderIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderIdentifier
    *
    * @param string $val The orderIdentifier
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setOrderIdentifier($val)
    {
        $this->_propDict["orderIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    *
    * @param string $val The serialNumber
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    *
    * @return string The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productKey
    *
    * @param string $val The productKey
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the hardwareIdentifier
    *
    * @return \GuzzleHttp\Psr7\Stream The hardwareIdentifier
    */
    public function getHardwareIdentifier()
    {
        if (array_key_exists("hardwareIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareIdentifier"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["hardwareIdentifier"];
            } else {
                $this->_propDict["hardwareIdentifier"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["hardwareIdentifier"]);
                return $this->_propDict["hardwareIdentifier"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hardwareIdentifier
    *
    * @param \GuzzleHttp\Psr7\Stream $val The hardwareIdentifier
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setHardwareIdentifier($val)
    {
        $this->_propDict["hardwareIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\ImportedWindowsAutopilotDeviceIdentityState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ImportedWindowsAutopilotDeviceIdentityState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param ImportedWindowsAutopilotDeviceIdentityState $val The state
    *
    * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}