<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditActor File
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
* AuditActor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AuditActor extends Entity
{
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return AuditActor
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the permissions
    *
    * @return string The permissions
    */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict)) {
            return $this->_propDict["permissions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissions
    *
    * @param string $val The value of the permissions
    *
    * @return AuditActor
    */
    public function setPermissions($val)
    {
        $this->_propDict["permissions"] = $val;
        return $this;
    }
    /**
    * Gets the userPermissions
    *
    * @return string The userPermissions
    */
    public function getUserPermissions()
    {
        if (array_key_exists("userPermissions", $this->_propDict)) {
            return $this->_propDict["userPermissions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPermissions
    *
    * @param string $val The value of the userPermissions
    *
    * @return AuditActor
    */
    public function setUserPermissions($val)
    {
        $this->_propDict["userPermissions"] = $val;
        return $this;
    }
    /**
    * Gets the applicationId
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationId
    *
    * @param string $val The value of the applicationId
    *
    * @return AuditActor
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    /**
    * Gets the applicationDisplayName
    *
    * @return string The applicationDisplayName
    */
    public function getApplicationDisplayName()
    {
        if (array_key_exists("applicationDisplayName", $this->_propDict)) {
            return $this->_propDict["applicationDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationDisplayName
    *
    * @param string $val The value of the applicationDisplayName
    *
    * @return AuditActor
    */
    public function setApplicationDisplayName($val)
    {
        $this->_propDict["applicationDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return AuditActor
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalName
    *
    * @return string The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalName
    *
    * @param string $val The value of the servicePrincipalName
    *
    * @return AuditActor
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    *
    * @param string $val The value of the ipAddress
    *
    * @return AuditActor
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return AuditActor
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
