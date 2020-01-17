<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For use with `Date`, `Timestamp`, and `TimeOfDay`, extract or preserve a
 * portion of the value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TimePartConfig</code>
 */
class TimePartConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The part of the time to keep.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TimePartConfig.TimePart part_to_extract = 1;</code>
     */
    protected $part_to_extract = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $part_to_extract
     *           The part of the time to keep.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The part of the time to keep.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TimePartConfig.TimePart part_to_extract = 1;</code>
     * @return int
     */
    public function getPartToExtract()
    {
        return $this->part_to_extract;
    }

    /**
     * The part of the time to keep.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TimePartConfig.TimePart part_to_extract = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPartToExtract($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\TimePartConfig_TimePart::class);
        $this->part_to_extract = $var;

        return $this;
    }

}

