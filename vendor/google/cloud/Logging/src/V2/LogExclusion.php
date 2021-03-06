<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a set of log entries that are not to be stored in Stackdriver
 * Logging. If your project receives a large volume of logs, you might be able
 * to use exclusions to reduce your chargeable logs. Exclusions are processed
 * after log sinks, so you can export log entries before they are excluded.
 * Audit log entries and log entries from Amazon Web Services are never
 * excluded.
 *
 * Generated from protobuf message <code>google.logging.v2.LogExclusion</code>
 */
class LogExclusion extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A client-assigned identifier, such as
     * `"load-balancer-exclusion"`. Identifiers are limited to 100 characters and
     * can include only letters, digits, underscores, hyphens, and periods.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. A description of this exclusion.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Required.
     * An [advanced logs filter](/logging/docs/view/advanced_filters)
     * that matches the log entries to be excluded. By using the
     * [sample function](/logging/docs/view/advanced_filters#sample),
     * you can exclude less than 100% of the matching log entries.
     * For example, the following filter matches 99% of low-severity log
     * entries from load balancers:
     * `"resource.type=http_load_balancer severity<ERROR sample(insertId, 0.99)"`
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * Optional. If set to True, then this exclusion is disabled and it does not
     * exclude any log entries. You can use
     * [exclusions.patch](/logging/docs/reference/v2/rest/v2/projects.exclusions/patch)
     * to change the value of this field.
     *
     * Generated from protobuf field <code>bool disabled = 4;</code>
     */
    private $disabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A client-assigned identifier, such as
     *           `"load-balancer-exclusion"`. Identifiers are limited to 100 characters and
     *           can include only letters, digits, underscores, hyphens, and periods.
     *     @type string $description
     *           Optional. A description of this exclusion.
     *     @type string $filter
     *           Required.
     *           An [advanced logs filter](/logging/docs/view/advanced_filters)
     *           that matches the log entries to be excluded. By using the
     *           [sample function](/logging/docs/view/advanced_filters#sample),
     *           you can exclude less than 100% of the matching log entries.
     *           For example, the following filter matches 99% of low-severity log
     *           entries from load balancers:
     *           `"resource.type=http_load_balancer severity<ERROR sample(insertId, 0.99)"`
     *     @type bool $disabled
     *           Optional. If set to True, then this exclusion is disabled and it does not
     *           exclude any log entries. You can use
     *           [exclusions.patch](/logging/docs/reference/v2/rest/v2/projects.exclusions/patch)
     *           to change the value of this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A client-assigned identifier, such as
     * `"load-balancer-exclusion"`. Identifiers are limited to 100 characters and
     * can include only letters, digits, underscores, hyphens, and periods.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A client-assigned identifier, such as
     * `"load-balancer-exclusion"`. Identifiers are limited to 100 characters and
     * can include only letters, digits, underscores, hyphens, and periods.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. A description of this exclusion.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A description of this exclusion.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required.
     * An [advanced logs filter](/logging/docs/view/advanced_filters)
     * that matches the log entries to be excluded. By using the
     * [sample function](/logging/docs/view/advanced_filters#sample),
     * you can exclude less than 100% of the matching log entries.
     * For example, the following filter matches 99% of low-severity log
     * entries from load balancers:
     * `"resource.type=http_load_balancer severity<ERROR sample(insertId, 0.99)"`
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required.
     * An [advanced logs filter](/logging/docs/view/advanced_filters)
     * that matches the log entries to be excluded. By using the
     * [sample function](/logging/docs/view/advanced_filters#sample),
     * you can exclude less than 100% of the matching log entries.
     * For example, the following filter matches 99% of low-severity log
     * entries from load balancers:
     * `"resource.type=http_load_balancer severity<ERROR sample(insertId, 0.99)"`
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. If set to True, then this exclusion is disabled and it does not
     * exclude any log entries. You can use
     * [exclusions.patch](/logging/docs/reference/v2/rest/v2/projects.exclusions/patch)
     * to change the value of this field.
     *
     * Generated from protobuf field <code>bool disabled = 4;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Optional. If set to True, then this exclusion is disabled and it does not
     * exclude any log entries. You can use
     * [exclusions.patch](/logging/docs/reference/v2/rest/v2/projects.exclusions/patch)
     * to change the value of this field.
     *
     * Generated from protobuf field <code>bool disabled = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

}

