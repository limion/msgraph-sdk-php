<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingCanada File
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
* MediaContentRatingCanada class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MediaContentRatingCanada extends Entity
{

    /**
    * Gets the movieRating
    *
    * @return RatingCanadaMoviesType The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "Microsoft\Graph\Beta\Model\RatingCanadaMoviesType")) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingCanadaMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    *
    * @param RatingCanadaMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingCanada The MediaContentRatingCanada
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    *
    * @return RatingCanadaTelevisionType The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "Microsoft\Graph\Beta\Model\RatingCanadaTelevisionType")) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingCanadaTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    *
    * @param RatingCanadaTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingCanada The MediaContentRatingCanada
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
