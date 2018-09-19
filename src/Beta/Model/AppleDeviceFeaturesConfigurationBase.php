<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleDeviceFeaturesConfigurationBase File
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
* AppleDeviceFeaturesConfigurationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration
{

     /** 
     * Gets the airPrintDestinations
     *
     * @return array The airPrintDestinations
     */
    public function getAirPrintDestinations()
    {
        if (array_key_exists("airPrintDestinations", $this->_propDict)) {
           return $this->_propDict["airPrintDestinations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the airPrintDestinations
    *
    * @param AirPrintDestination $val The airPrintDestinations
    *
    * @return AppleDeviceFeaturesConfigurationBase
    */
    public function setAirPrintDestinations($val)
    {
		$this->_propDict["airPrintDestinations"] = $val;
        return $this;
    }
    
}