<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInLocation File
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
* SignInLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SignInLocation extends Entity
{
    /**
    * Gets the city
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }

    /**
    * Sets the city
    *
    * @param string $val The value of the city
    *
    * @return SignInLocation
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return SignInLocation
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the countryOrRegion
    *
    * @return string The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegion
    *
    * @param string $val The value of the countryOrRegion
    *
    * @return SignInLocation
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }

    /**
    * Gets the geoCoordinates
    *
    * @return GeoCoordinates The geoCoordinates
    */
    public function getGeoCoordinates()
    {
        if (array_key_exists("geoCoordinates", $this->_propDict)) {
            if (is_a($this->_propDict["geoCoordinates"], "Microsoft\Graph\Beta\Model\GeoCoordinates")) {
                return $this->_propDict["geoCoordinates"];
            } else {
                $this->_propDict["geoCoordinates"] = new GeoCoordinates($this->_propDict["geoCoordinates"]);
                return $this->_propDict["geoCoordinates"];
            }
        }
        return null;
    }

    /**
    * Sets the geoCoordinates
    *
    * @param GeoCoordinates $val The value to assign to the geoCoordinates
    *
    * @return SignInLocation The SignInLocation
    */
    public function setGeoCoordinates($val)
    {
        $this->_propDict["geoCoordinates"] = $val;
         return $this;
    }
}
