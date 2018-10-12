<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetAddonsConfigRequest sets the addons associated with the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.SetAddonsConfigRequest</code>
 */
class SetAddonsConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The desired configurations for the various addons available to run in the
     * cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.AddonsConfig addons_config = 4;</code>
     */
    private $addons_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *     @type string $zone
     *           The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *     @type string $cluster_id
     *           The name of the cluster to upgrade.
     *     @type \Google\Cloud\Container\V1\AddonsConfig $addons_config
     *           The desired configurations for the various addons available to run in the
     *           cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The name of the cluster to upgrade.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The desired configurations for the various addons available to run in the
     * cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.AddonsConfig addons_config = 4;</code>
     * @return \Google\Cloud\Container\V1\AddonsConfig
     */
    public function getAddonsConfig()
    {
        return $this->addons_config;
    }

    /**
     * The desired configurations for the various addons available to run in the
     * cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.AddonsConfig addons_config = 4;</code>
     * @param \Google\Cloud\Container\V1\AddonsConfig $var
     * @return $this
     */
    public function setAddonsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\AddonsConfig::class);
        $this->addons_config = $var;

        return $this;
    }

}

