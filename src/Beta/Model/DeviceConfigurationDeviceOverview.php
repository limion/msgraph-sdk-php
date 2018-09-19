<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationDeviceOverview File
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
* DeviceConfigurationDeviceOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationDeviceOverview extends Entity
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
    * @return DeviceConfigurationDeviceOverview
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
    * @return DeviceConfigurationDeviceOverview
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicablePlatformCount
    *
    * @return int The notApplicablePlatformCount
    */
    public function getNotApplicablePlatformCount()
    {
        if (array_key_exists("notApplicablePlatformCount", $this->_propDict)) {
            return $this->_propDict["notApplicablePlatformCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicablePlatformCount
    *
    * @param int $val The notApplicablePlatformCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setNotApplicablePlatformCount($val)
    {
        $this->_propDict["notApplicablePlatformCount"] = intval($val);
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
    * @return DeviceConfigurationDeviceOverview
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
    * @return DeviceConfigurationDeviceOverview
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
    * @return DeviceConfigurationDeviceOverview
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictCount
    *
    * @return int The conflictCount
    */
    public function getConflictCount()
    {
        if (array_key_exists("conflictCount", $this->_propDict)) {
            return $this->_propDict["conflictCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictCount
    *
    * @param int $val The conflictCount
    *
    * @return DeviceConfigurationDeviceOverview
    */
    public function setConflictCount($val)
    {
        $this->_propDict["conflictCount"] = intval($val);
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
    * @return DeviceConfigurationDeviceOverview
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
    * @return DeviceConfigurationDeviceOverview
    */
    public function setConfigurationVersion($val)
    {
        $this->_propDict["configurationVersion"] = intval($val);
        return $this;
    }
    
}