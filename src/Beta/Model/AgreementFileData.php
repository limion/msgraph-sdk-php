<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFileData File
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
* AgreementFileData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AgreementFileData extends Entity
{

    /**
    * Gets the data
    *
    * @return \GuzzleHttp\Psr7\Stream The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            if (is_a($this->_propDict["data"], "Microsoft\Graph\Beta\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["data"];
            } else {
                $this->_propDict["data"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["data"]);
                return $this->_propDict["data"];
            }
        }
        return null;
    }

    /**
    * Sets the data
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the data
    *
    * @return AgreementFileData The AgreementFileData
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
         return $this;
    }
}
