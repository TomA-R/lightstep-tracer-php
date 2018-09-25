<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: collector.proto

namespace Lightstep\Collector;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lightstep.collector.Command</code>
 */
class Command extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool disable = 1;</code>
     */
    private $disable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Collector::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool disable = 1;</code>
     * @return bool
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Generated from protobuf field <code>bool disable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisable($var)
    {
        GPBUtil::checkBool($var);
        $this->disable = $var;

        return $this;
    }

}

