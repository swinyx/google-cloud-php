<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Version of a StoredInfoType, including the configuration used to build it,
 * create timestamp, and current state.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.StoredInfoTypeVersion</code>
 */
class StoredInfoTypeVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * StoredInfoType configuration.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 1;</code>
     */
    protected $config = null;
    /**
     * Create timestamp of the version. Read-only, determined by the system
     * when the version is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    protected $create_time = null;
    /**
     * Stored info type version state. Read-only, updated by the system
     * during dictionary creation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeState state = 3;</code>
     */
    protected $state = 0;
    /**
     * Errors that occurred when creating this storedInfoType version, or
     * anomalies detected in the storedInfoType data that render it unusable. Only
     * the five most recent errors will be displayed, with the most recent error
     * appearing first.
     * For example, some of the data for stored custom dictionaries is put in
     * the user's Google Cloud Storage bucket, and if this data is modified or
     * deleted by the user or another system, the dictionary becomes invalid.
     * If any errors occur, fix the problem indicated by the error message and
     * use the UpdateStoredInfoType API method to create another version of the
     * storedInfoType to continue using it, reusing the same `config` if it was
     * not the source of the error.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 4;</code>
     */
    private $errors;
    /**
     * Statistics about this storedInfoType version.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeStats stats = 5;</code>
     */
    protected $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config
     *           StoredInfoType configuration.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Create timestamp of the version. Read-only, determined by the system
     *           when the version is created.
     *     @type int $state
     *           Stored info type version state. Read-only, updated by the system
     *           during dictionary creation.
     *     @type \Google\Cloud\Dlp\V2\Error[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           Errors that occurred when creating this storedInfoType version, or
     *           anomalies detected in the storedInfoType data that render it unusable. Only
     *           the five most recent errors will be displayed, with the most recent error
     *           appearing first.
     *           For example, some of the data for stored custom dictionaries is put in
     *           the user's Google Cloud Storage bucket, and if this data is modified or
     *           deleted by the user or another system, the dictionary becomes invalid.
     *           If any errors occur, fix the problem indicated by the error message and
     *           use the UpdateStoredInfoType API method to create another version of the
     *           storedInfoType to continue using it, reusing the same `config` if it was
     *           not the source of the error.
     *     @type \Google\Cloud\Dlp\V2\StoredInfoTypeStats $stats
     *           Statistics about this storedInfoType version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * StoredInfoType configuration.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 1;</code>
     * @return \Google\Cloud\Dlp\V2\StoredInfoTypeConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * StoredInfoType configuration.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 1;</code>
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredInfoTypeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Create timestamp of the version. Read-only, determined by the system
     * when the version is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Create timestamp of the version. Read-only, determined by the system
     * when the version is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Stored info type version state. Read-only, updated by the system
     * during dictionary creation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Stored info type version state. Read-only, updated by the system
     * during dictionary creation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\StoredInfoTypeState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Errors that occurred when creating this storedInfoType version, or
     * anomalies detected in the storedInfoType data that render it unusable. Only
     * the five most recent errors will be displayed, with the most recent error
     * appearing first.
     * For example, some of the data for stored custom dictionaries is put in
     * the user's Google Cloud Storage bucket, and if this data is modified or
     * deleted by the user or another system, the dictionary becomes invalid.
     * If any errors occur, fix the problem indicated by the error message and
     * use the UpdateStoredInfoType API method to create another version of the
     * storedInfoType to continue using it, reusing the same `config` if it was
     * not the source of the error.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Errors that occurred when creating this storedInfoType version, or
     * anomalies detected in the storedInfoType data that render it unusable. Only
     * the five most recent errors will be displayed, with the most recent error
     * appearing first.
     * For example, some of the data for stored custom dictionaries is put in
     * the user's Google Cloud Storage bucket, and if this data is modified or
     * deleted by the user or another system, the dictionary becomes invalid.
     * If any errors occur, fix the problem indicated by the error message and
     * use the UpdateStoredInfoType API method to create another version of the
     * storedInfoType to continue using it, reusing the same `config` if it was
     * not the source of the error.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 4;</code>
     * @param \Google\Cloud\Dlp\V2\Error[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Error::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Statistics about this storedInfoType version.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeStats stats = 5;</code>
     * @return \Google\Cloud\Dlp\V2\StoredInfoTypeStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Statistics about this storedInfoType version.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeStats stats = 5;</code>
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeStats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredInfoTypeStats::class);
        $this->stats = $var;

        return $this;
    }

}

