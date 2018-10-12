<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the feeling associated with the entire text or entities in
 * the text.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.Sentiment</code>
 */
class Sentiment extends \Google\Protobuf\Internal\Message
{
    /**
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     *
     * Generated from protobuf field <code>float magnitude = 2;</code>
     */
    private $magnitude = 0.0;
    /**
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     *
     * Generated from protobuf field <code>float score = 3;</code>
     */
    private $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $magnitude
     *           A non-negative number in the [0, +inf) range, which represents
     *           the absolute magnitude of sentiment regardless of score (positive or
     *           negative).
     *     @type float $score
     *           Sentiment score between -1.0 (negative sentiment) and 1.0
     *           (positive sentiment).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     *
     * Generated from protobuf field <code>float magnitude = 2;</code>
     * @return float
     */
    public function getMagnitude()
    {
        return $this->magnitude;
    }

    /**
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     *
     * Generated from protobuf field <code>float magnitude = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMagnitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->magnitude = $var;

        return $this;
    }

    /**
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     *
     * Generated from protobuf field <code>float score = 3;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     *
     * Generated from protobuf field <code>float score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

