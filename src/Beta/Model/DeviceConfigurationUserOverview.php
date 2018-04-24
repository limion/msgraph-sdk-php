<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationUserOverview File
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
* DeviceConfigurationUserOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationUserOverview extends Entity
{
    /**
    * Gets the pendingCount
    *
    * @return int The pendingCount
    */
    public function getPendingCount()
    {
        if (array_key_exists("pendingCount", $this->_propDict)) {
            return $this->_propDict["pendingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pendingCount
    *
    * @param int $val The pendingCount
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setPendingCount($val)
    {
        $this->_propDict["pendingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableCount
    *
    * @return int The notApplicableCount
    */
    public function getNotApplicableCount()
    {
        if (array_key_exists("notApplicableCount", $this->_propDict)) {
            return $this->_propDict["notApplicableCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableCount
    *
    * @param int $val The notApplicableCount
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successCount
    *
    * @return int The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successCount
    *
    * @param int $val The successCount
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorCount
    *
    * @return int The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCount
    *
    * @param int $val The errorCount
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedCount
    *
    * @return int The failedCount
    */
    public function getFailedCount()
    {
        if (array_key_exists("failedCount", $this->_propDict)) {
            return $this->_propDict["failedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedCount
    *
    * @param int $val The failedCount
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastUpdateDateTime
    *
    * @return \DateTime The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdateDateTime
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationVersion
    *
    * @return int The configurationVersion
    */
    public function getConfigurationVersion()
    {
        if (array_key_exists("configurationVersion", $this->_propDict)) {
            return $this->_propDict["configurationVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationVersion
    *
    * @param int $val The configurationVersion
    *
    * @return DeviceConfigurationUserOverview
    */
    public function setConfigurationVersion($val)
    {
        $this->_propDict["configurationVersion"] = intval($val);
        return $this;
    }
    
}