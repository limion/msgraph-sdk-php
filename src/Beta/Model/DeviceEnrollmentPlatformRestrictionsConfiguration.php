<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentPlatformRestrictionsConfiguration File
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
* DeviceEnrollmentPlatformRestrictionsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the iosRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The iosRestriction
    */
    public function getIosRestriction()
    {
        if (array_key_exists("iosRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["iosRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["iosRestriction"];
            } else {
                $this->_propDict["iosRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["iosRestriction"]);
                return $this->_propDict["iosRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iosRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The iosRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setIosRestriction($val)
    {
        $this->_propDict["iosRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The windowsRestriction
    */
    public function getWindowsRestriction()
    {
        if (array_key_exists("windowsRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["windowsRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["windowsRestriction"];
            } else {
                $this->_propDict["windowsRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["windowsRestriction"]);
                return $this->_propDict["windowsRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The windowsRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setWindowsRestriction($val)
    {
        $this->_propDict["windowsRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsMobileRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The windowsMobileRestriction
    */
    public function getWindowsMobileRestriction()
    {
        if (array_key_exists("windowsMobileRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["windowsMobileRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["windowsMobileRestriction"];
            } else {
                $this->_propDict["windowsMobileRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["windowsMobileRestriction"]);
                return $this->_propDict["windowsMobileRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsMobileRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The windowsMobileRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setWindowsMobileRestriction($val)
    {
        $this->_propDict["windowsMobileRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The androidRestriction
    */
    public function getAndroidRestriction()
    {
        if (array_key_exists("androidRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["androidRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["androidRestriction"];
            } else {
                $this->_propDict["androidRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["androidRestriction"]);
                return $this->_propDict["androidRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The androidRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setAndroidRestriction($val)
    {
        $this->_propDict["androidRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidForWorkRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The androidForWorkRestriction
    */
    public function getAndroidForWorkRestriction()
    {
        if (array_key_exists("androidForWorkRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["androidForWorkRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["androidForWorkRestriction"];
            } else {
                $this->_propDict["androidForWorkRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["androidForWorkRestriction"]);
                return $this->_propDict["androidForWorkRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidForWorkRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The androidForWorkRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setAndroidForWorkRestriction($val)
    {
        $this->_propDict["androidForWorkRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the macRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The macRestriction
    */
    public function getMacRestriction()
    {
        if (array_key_exists("macRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["macRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["macRestriction"];
            } else {
                $this->_propDict["macRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["macRestriction"]);
                return $this->_propDict["macRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the macRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The macRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setMacRestriction($val)
    {
        $this->_propDict["macRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the macOSRestriction
    *
    * @return DeviceEnrollmentPlatformRestriction The macOSRestriction
    */
    public function getMacOSRestriction()
    {
        if (array_key_exists("macOSRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["macOSRestriction"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["macOSRestriction"];
            } else {
                $this->_propDict["macOSRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["macOSRestriction"]);
                return $this->_propDict["macOSRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the macOSRestriction
    *
    * @param DeviceEnrollmentPlatformRestriction $val The macOSRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setMacOSRestriction($val)
    {
        $this->_propDict["macOSRestriction"] = $val;
        return $this;
    }
    
}