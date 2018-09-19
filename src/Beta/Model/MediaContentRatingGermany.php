<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingGermany File
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
* MediaContentRatingGermany class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MediaContentRatingGermany extends Entity
{

    /**
    * Gets the movieRating
    *
    * @return RatingGermanyMoviesType The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "Microsoft\Graph\Beta\Model\RatingGermanyMoviesType")) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingGermanyMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    *
    * @param RatingGermanyMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingGermany The MediaContentRatingGermany
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    *
    * @return RatingGermanyTelevisionType The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "Microsoft\Graph\Beta\Model\RatingGermanyTelevisionType")) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingGermanyTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    *
    * @param RatingGermanyTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingGermany The MediaContentRatingGermany
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
