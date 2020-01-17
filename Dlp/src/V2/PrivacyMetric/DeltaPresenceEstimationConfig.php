<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\PrivacyMetric;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * δ-presence metric, used to estimate how likely it is for an attacker to
 * figure out that one given individual appears in a de-identified dataset.
 * Similarly to the k-map metric, we cannot compute δ-presence exactly without
 * knowing the attack dataset, so we use a statistical model instead.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.PrivacyMetric.DeltaPresenceEstimationConfig</code>
 */
class DeltaPresenceEstimationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fields considered to be quasi-identifiers. No two fields can have the
     * same tag.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.QuasiId quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $quasi_ids;
    /**
     * ISO 3166-1 alpha-2 region code to use in the statistical modeling.
     * Set if no column is tagged with a region-specific InfoType (like
     * US_ZIP_5) or a region code.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     */
    protected $region_code = '';
    /**
     * Several auxiliary tables can be used in the analysis. Each custom_tag
     * used to tag a quasi-identifiers field must appear in exactly one
     * field of one auxiliary table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.StatisticalTable auxiliary_tables = 3;</code>
     */
    private $auxiliary_tables;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\QuasiId[]|\Google\Protobuf\Internal\RepeatedField $quasi_ids
     *           Required. Fields considered to be quasi-identifiers. No two fields can have the
     *           same tag.
     *     @type string $region_code
     *           ISO 3166-1 alpha-2 region code to use in the statistical modeling.
     *           Set if no column is tagged with a region-specific InfoType (like
     *           US_ZIP_5) or a region code.
     *     @type \Google\Cloud\Dlp\V2\StatisticalTable[]|\Google\Protobuf\Internal\RepeatedField $auxiliary_tables
     *           Several auxiliary tables can be used in the analysis. Each custom_tag
     *           used to tag a quasi-identifiers field must appear in exactly one
     *           field of one auxiliary table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fields considered to be quasi-identifiers. No two fields can have the
     * same tag.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.QuasiId quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIds()
    {
        return $this->quasi_ids;
    }

    /**
     * Required. Fields considered to be quasi-identifiers. No two fields can have the
     * same tag.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.QuasiId quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\QuasiId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\QuasiId::class);
        $this->quasi_ids = $arr;

        return $this;
    }

    /**
     * ISO 3166-1 alpha-2 region code to use in the statistical modeling.
     * Set if no column is tagged with a region-specific InfoType (like
     * US_ZIP_5) or a region code.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * ISO 3166-1 alpha-2 region code to use in the statistical modeling.
     * Set if no column is tagged with a region-specific InfoType (like
     * US_ZIP_5) or a region code.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Several auxiliary tables can be used in the analysis. Each custom_tag
     * used to tag a quasi-identifiers field must appear in exactly one
     * field of one auxiliary table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.StatisticalTable auxiliary_tables = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuxiliaryTables()
    {
        return $this->auxiliary_tables;
    }

    /**
     * Several auxiliary tables can be used in the analysis. Each custom_tag
     * used to tag a quasi-identifiers field must appear in exactly one
     * field of one auxiliary table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.StatisticalTable auxiliary_tables = 3;</code>
     * @param \Google\Cloud\Dlp\V2\StatisticalTable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuxiliaryTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\StatisticalTable::class);
        $this->auxiliary_tables = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeltaPresenceEstimationConfig::class, \Google\Cloud\Dlp\V2\PrivacyMetric_DeltaPresenceEstimationConfig::class);

