<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/endpoint_policy.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used with the GetEndpointPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GetEndpointPolicyRequest</code>
 */
class GetEndpointPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the EndpointPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/global/endpointPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. A name of the EndpointPolicy to get. Must be in the format
     *                     `projects/&#42;/locations/global/endpointPolicies/*`. Please see
     *                     {@see NetworkServicesClient::endpointPolicyName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetworkServices\V1\GetEndpointPolicyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A name of the EndpointPolicy to get. Must be in the format
     *           `projects/&#42;&#47;locations/global/endpointPolicies/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\EndpointPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the EndpointPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/global/endpointPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the EndpointPolicy to get. Must be in the format
     * `projects/&#42;&#47;locations/global/endpointPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

