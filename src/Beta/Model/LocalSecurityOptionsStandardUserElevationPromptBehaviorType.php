<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsStandardUserElevationPromptBehaviorType File
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
* LocalSecurityOptionsStandardUserElevationPromptBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocalSecurityOptionsStandardUserElevationPromptBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsStandardUserElevationPromptBehaviorType
    */
    const NOT_CONFIGURED = "notConfigured";
    const AUTOMATICALLY_DENY_ELEVATION_REQUESTS = "automaticallyDenyElevationRequests";
    const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
}