<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecentNotebookLinks File
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
* RecentNotebookLinks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RecentNotebookLinks extends Entity
{

    /**
    * Gets the oneNoteClientUrl
    *
    * @return ExternalLink The oneNoteClientUrl
    */
    public function getOneNoteClientUrl()
    {
        if (array_key_exists("oneNoteClientUrl", $this->_propDict)) {
            if (is_a($this->_propDict["oneNoteClientUrl"], "Microsoft\Graph\Beta\Model\ExternalLink")) {
                return $this->_propDict["oneNoteClientUrl"];
            } else {
                $this->_propDict["oneNoteClientUrl"] = new ExternalLink($this->_propDict["oneNoteClientUrl"]);
                return $this->_propDict["oneNoteClientUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the oneNoteClientUrl
    *
    * @param ExternalLink $val The value to assign to the oneNoteClientUrl
    *
    * @return RecentNotebookLinks The RecentNotebookLinks
    */
    public function setOneNoteClientUrl($val)
    {
        $this->_propDict["oneNoteClientUrl"] = $val;
         return $this;
    }

    /**
    * Gets the oneNoteWebUrl
    *
    * @return ExternalLink The oneNoteWebUrl
    */
    public function getOneNoteWebUrl()
    {
        if (array_key_exists("oneNoteWebUrl", $this->_propDict)) {
            if (is_a($this->_propDict["oneNoteWebUrl"], "Microsoft\Graph\Beta\Model\ExternalLink")) {
                return $this->_propDict["oneNoteWebUrl"];
            } else {
                $this->_propDict["oneNoteWebUrl"] = new ExternalLink($this->_propDict["oneNoteWebUrl"]);
                return $this->_propDict["oneNoteWebUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the oneNoteWebUrl
    *
    * @param ExternalLink $val The value to assign to the oneNoteWebUrl
    *
    * @return RecentNotebookLinks The RecentNotebookLinks
    */
    public function setOneNoteWebUrl($val)
    {
        $this->_propDict["oneNoteWebUrl"] = $val;
         return $this;
    }
}
