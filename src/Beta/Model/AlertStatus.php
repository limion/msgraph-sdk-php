<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertStatus File
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

use Microsoft\Graph\Core\Enum;

/**
* AlertStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AlertStatus extends Enum
{
    /**
    * The Enum AlertStatus
    */
    const UNKNOWN = "unknown";
    const NEW_ALERT = "newAlert";
    const IN_PROGRESS = "inProgress";
    const RESOLVED = "resolved";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}