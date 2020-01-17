<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListInspectTemplates.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListInspectTemplatesRequest</code>
 */
class ListInspectTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * Size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * Comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    protected $order_by = '';
    /**
     * The geographic location where inspection templates will be retrieved from.
     * Use `-` for all locations. Reserved for future extensions.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     */
    protected $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, for example projects/my-project-id or
     *           organizations/my-org-id.
     *     @type string $page_token
     *           Page token to continue retrieval. Comes from previous call
     *           to `ListInspectTemplates`.
     *     @type int $page_size
     *           Size of the page, can be limited by server. If zero server returns
     *           a page of max size 100.
     *     @type string $order_by
     *           Comma separated list of fields to order by,
     *           followed by `asc` or `desc` postfix. This list is case-insensitive,
     *           default sorting order is ascending, redundant space characters are
     *           insignificant.
     *           Example: `name asc,update_time, create_time desc`
     *           Supported fields are:
     *           - `create_time`: corresponds to time the template was created.
     *           - `update_time`: corresponds to time the template was last updated.
     *           - `name`: corresponds to template's name.
     *           - `display_name`: corresponds to template's display name.
     *     @type string $location_id
     *           The geographic location where inspection templates will be retrieved from.
     *           Use `-` for all locations. Reserved for future extensions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * The geographic location where inspection templates will be retrieved from.
     * Use `-` for all locations. Reserved for future extensions.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * The geographic location where inspection templates will be retrieved from.
     * Use `-` for all locations. Reserved for future extensions.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

