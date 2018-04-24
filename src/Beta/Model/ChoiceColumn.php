<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChoiceColumn File
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
* ChoiceColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ChoiceColumn extends Entity
{
    /**
    * Gets the allowTextEntry
    *
    * @return bool The allowTextEntry
    */
    public function getAllowTextEntry()
    {
        if (array_key_exists("allowTextEntry", $this->_propDict)) {
            return $this->_propDict["allowTextEntry"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTextEntry
    *
    * @param bool $val The value of the allowTextEntry
    *
    * @return ChoiceColumn
    */
    public function setAllowTextEntry($val)
    {
        $this->_propDict["allowTextEntry"] = $val;
        return $this;
    }
    /**
    * Gets the choices
    *
    * @return string The choices
    */
    public function getChoices()
    {
        if (array_key_exists("choices", $this->_propDict)) {
            return $this->_propDict["choices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the choices
    *
    * @param string $val The value of the choices
    *
    * @return ChoiceColumn
    */
    public function setChoices($val)
    {
        $this->_propDict["choices"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    *
    * @param string $val The value of the displayAs
    *
    * @return ChoiceColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
}
