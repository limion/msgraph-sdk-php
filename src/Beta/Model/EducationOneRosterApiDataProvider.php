<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOneRosterApiDataProvider File
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
* EducationOneRosterApiDataProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationOneRosterApiDataProvider extends EducationSynchronizationDataProvider
{
    /**
    * Gets the connectionUrl
    *
    * @return string The connectionUrl
    */
    public function getConnectionUrl()
    {
        if (array_key_exists("connectionUrl", $this->_propDict)) {
            return $this->_propDict["connectionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionUrl
    *
    * @param string $val The value of the connectionUrl
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setConnectionUrl($val)
    {
        $this->_propDict["connectionUrl"] = $val;
        return $this;
    }

    /**
    * Gets the connectionSettings
    *
    * @return EducationSynchronizationConnectionSettings The connectionSettings
    */
    public function getConnectionSettings()
    {
        if (array_key_exists("connectionSettings", $this->_propDict)) {
            if (is_a($this->_propDict["connectionSettings"], "Microsoft\Graph\Beta\Model\EducationSynchronizationConnectionSettings")) {
                return $this->_propDict["connectionSettings"];
            } else {
                $this->_propDict["connectionSettings"] = new EducationSynchronizationConnectionSettings($this->_propDict["connectionSettings"]);
                return $this->_propDict["connectionSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionSettings
    *
    * @param EducationSynchronizationConnectionSettings $val The value to assign to the connectionSettings
    *
    * @return EducationOneRosterApiDataProvider The EducationOneRosterApiDataProvider
    */
    public function setConnectionSettings($val)
    {
        $this->_propDict["connectionSettings"] = $val;
         return $this;
    }
    /**
    * Gets the schoolsIds
    *
    * @return string The schoolsIds
    */
    public function getSchoolsIds()
    {
        if (array_key_exists("schoolsIds", $this->_propDict)) {
            return $this->_propDict["schoolsIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolsIds
    *
    * @param string $val The value of the schoolsIds
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setSchoolsIds($val)
    {
        $this->_propDict["schoolsIds"] = $val;
        return $this;
    }
    /**
    * Gets the providerName
    *
    * @return string The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerName
    *
    * @param string $val The value of the providerName
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }

    /**
    * Gets the customizations
    *
    * @return EducationSynchronizationCustomizations The customizations
    */
    public function getCustomizations()
    {
        if (array_key_exists("customizations", $this->_propDict)) {
            if (is_a($this->_propDict["customizations"], "Microsoft\Graph\Beta\Model\EducationSynchronizationCustomizations")) {
                return $this->_propDict["customizations"];
            } else {
                $this->_propDict["customizations"] = new EducationSynchronizationCustomizations($this->_propDict["customizations"]);
                return $this->_propDict["customizations"];
            }
        }
        return null;
    }

    /**
    * Sets the customizations
    *
    * @param EducationSynchronizationCustomizations $val The value to assign to the customizations
    *
    * @return EducationOneRosterApiDataProvider The EducationOneRosterApiDataProvider
    */
    public function setCustomizations($val)
    {
        $this->_propDict["customizations"] = $val;
         return $this;
    }
}
