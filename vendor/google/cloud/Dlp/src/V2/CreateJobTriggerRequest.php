<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateJobTrigger.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateJobTriggerRequest</code>
 */
class CreateJobTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The JobTrigger to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger job_trigger = 2;</code>
     */
    private $job_trigger = null;
    /**
     * The trigger id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string trigger_id = 3;</code>
     */
    private $trigger_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name, for example projects/my-project-id.
     *     @type \Google\Cloud\Dlp\V2\JobTrigger $job_trigger
     *           The JobTrigger to create.
     *     @type string $trigger_id
     *           The trigger id can contain uppercase and lowercase letters,
     *           numbers, and hyphens; that is, it must match the regular
     *           expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     *           characters. Can be empty to allow the system to generate one.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name, for example projects/my-project-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The JobTrigger to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger job_trigger = 2;</code>
     * @return \Google\Cloud\Dlp\V2\JobTrigger
     */
    public function getJobTrigger()
    {
        return $this->job_trigger;
    }

    /**
     * The JobTrigger to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.JobTrigger job_trigger = 2;</code>
     * @param \Google\Cloud\Dlp\V2\JobTrigger $var
     * @return $this
     */
    public function setJobTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\JobTrigger::class);
        $this->job_trigger = $var;

        return $this;
    }

    /**
     * The trigger id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string trigger_id = 3;</code>
     * @return string
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * The trigger id can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string trigger_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger_id = $var;

        return $this;
    }

}

