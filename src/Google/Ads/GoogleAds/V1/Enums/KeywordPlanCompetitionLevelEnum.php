<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/keyword_plan_competition_level.proto

namespace Google\Ads\GoogleAds\V1\Enums;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for enumeration of keyword competition levels. The competition
 * level indicates how competitive ad placement is for a keyword and
 * is determined by the number of advertisers bidding on that keyword relative
 * to all keywords across Google. The competition level can depend on the
 * location and Search Network targeting options you've selected.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.enums.KeywordPlanCompetitionLevelEnum</code>
 */
class KeywordPlanCompetitionLevelEnum extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\KeywordPlanCompetitionLevel::initOnce();
        parent::__construct($data);
    }

}
