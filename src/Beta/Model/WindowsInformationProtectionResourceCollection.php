<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionResourceCollection File
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
* WindowsInformationProtectionResourceCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionResourceCollection extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionResourceCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the resources
    *
    * @return string The resources
    */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
            return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    *
    * @param string $val The value of the resources
    *
    * @return WindowsInformationProtectionResourceCollection
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }
}
