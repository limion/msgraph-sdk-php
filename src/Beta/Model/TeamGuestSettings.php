<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamGuestSettings File
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
* TeamGuestSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamGuestSettings extends Entity
{
    /**
    * Gets the allowCreateUpdateChannels
    *
    * @return bool The allowCreateUpdateChannels
    */
    public function getAllowCreateUpdateChannels()
    {
        if (array_key_exists("allowCreateUpdateChannels", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateChannels
    *
    * @param bool $val The value of the allowCreateUpdateChannels
    *
    * @return TeamGuestSettings
    */
    public function setAllowCreateUpdateChannels($val)
    {
        $this->_propDict["allowCreateUpdateChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteChannels
    *
    * @return bool The allowDeleteChannels
    */
    public function getAllowDeleteChannels()
    {
        if (array_key_exists("allowDeleteChannels", $this->_propDict)) {
            return $this->_propDict["allowDeleteChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteChannels
    *
    * @param bool $val The value of the allowDeleteChannels
    *
    * @return TeamGuestSettings
    */
    public function setAllowDeleteChannels($val)
    {
        $this->_propDict["allowDeleteChannels"] = $val;
        return $this;
    }
}
