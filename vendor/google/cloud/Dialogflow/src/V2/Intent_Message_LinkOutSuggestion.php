<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The suggestion chip message that allows the user to jump out to the app
 * or website associated with this agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.LinkOutSuggestion</code>
 */
class Intent_Message_LinkOutSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the app or site this chip is linking to.
     *
     * Generated from protobuf field <code>string destination_name = 1;</code>
     */
    private $destination_name = '';
    /**
     * Required. The URI of the app or site to open when the user taps the
     * suggestion chip.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    private $uri = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the app or site this chip is linking to.
     *
     * Generated from protobuf field <code>string destination_name = 1;</code>
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destination_name;
    }

    /**
     * Required. The name of the app or site this chip is linking to.
     *
     * Generated from protobuf field <code>string destination_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_name = $var;

        return $this;
    }

    /**
     * Required. The URI of the app or site to open when the user taps the
     * suggestion chip.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI of the app or site to open when the user taps the
     * suggestion chip.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}

