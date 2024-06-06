<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/dep.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a `LbRouteExtension` resource.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.UpdateLbRouteExtensionRequest</code>
 */
class UpdateLbRouteExtensionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Used to specify the fields to be overwritten in the
     * `LbRouteExtension` resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not specify a mask, then all fields are overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. `LbRouteExtension` resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbRouteExtension lb_route_extension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lb_route_extension = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Used to specify the fields to be overwritten in the
     *           `LbRouteExtension` resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field is overwritten if it is in the mask. If the
     *           user does not specify a mask, then all fields are overwritten.
     *     @type \Google\Cloud\NetworkServices\V1\LbRouteExtension $lb_route_extension
     *           Required. `LbRouteExtension` resource being updated.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server can ignore
     *           the request if it has already been completed. The server guarantees
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, ignores the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Dep::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Used to specify the fields to be overwritten in the
     * `LbRouteExtension` resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not specify a mask, then all fields are overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Used to specify the fields to be overwritten in the
     * `LbRouteExtension` resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not specify a mask, then all fields are overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. `LbRouteExtension` resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbRouteExtension lb_route_extension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\LbRouteExtension|null
     */
    public function getLbRouteExtension()
    {
        return $this->lb_route_extension;
    }

    public function hasLbRouteExtension()
    {
        return isset($this->lb_route_extension);
    }

    public function clearLbRouteExtension()
    {
        unset($this->lb_route_extension);
    }

    /**
     * Required. `LbRouteExtension` resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbRouteExtension lb_route_extension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\LbRouteExtension $var
     * @return $this
     */
    public function setLbRouteExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\LbRouteExtension::class);
        $this->lb_route_extension = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
