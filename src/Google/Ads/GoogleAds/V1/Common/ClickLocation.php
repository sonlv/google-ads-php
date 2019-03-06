<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/click_location.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location criteria associated with a click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ClickLocation</code>
 */
class ClickLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     */
    private $city = null;
    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     */
    private $country = null;
    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     */
    private $metro = null;
    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     */
    private $most_specific = null;
    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     */
    private $region = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $city
     *           The city location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $country
     *           The country location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $metro
     *           The metro location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $most_specific
     *           The most specific location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $region
     *           The region location criterion associated with the impression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\ClickLocation::initOnce();
        parent::__construct($data);
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city = $var;

        return $this;
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country = $var;

        return $this;
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMetro($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->metro = $var;

        return $this;
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMostSpecific()
    {
        return $this->most_specific;
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMostSpecific($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->most_specific = $var;

        return $this;
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->region = $var;

        return $this;
    }

}
