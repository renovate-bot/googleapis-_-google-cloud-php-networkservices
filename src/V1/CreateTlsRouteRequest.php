<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/tls_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the TlsRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateTlsRouteRequest</code>
 */
class CreateTlsRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the TlsRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>string tls_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tls_route_id = '';
    /**
     * Required. TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute tls_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tls_route = null;

    /**
     * @param string                                    $parent     Required. The parent resource of the TlsRoute. Must be in the
     *                                                              format `projects/&#42;/locations/global`. Please see
     *                                                              {@see NetworkServicesClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\TlsRoute $tlsRoute   Required. TlsRoute resource to be created.
     * @param string                                    $tlsRouteId Required. Short name of the TlsRoute resource to be created.
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateTlsRouteRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\TlsRoute $tlsRoute, string $tlsRouteId): self
    {
        return (new self())
            ->setParent($parent)
            ->setTlsRoute($tlsRoute)
            ->setTlsRouteId($tlsRouteId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the TlsRoute. Must be in the
     *           format `projects/&#42;&#47;locations/global`.
     *     @type string $tls_route_id
     *           Required. Short name of the TlsRoute resource to be created.
     *     @type \Google\Cloud\NetworkServices\V1\TlsRoute $tls_route
     *           Required. TlsRoute resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\TlsRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the TlsRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the TlsRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
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
     * Required. Short name of the TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>string tls_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTlsRouteId()
    {
        return $this->tls_route_id;
    }

    /**
     * Required. Short name of the TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>string tls_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTlsRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tls_route_id = $var;

        return $this;
    }

    /**
     * Required. TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute tls_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\TlsRoute|null
     */
    public function getTlsRoute()
    {
        return $this->tls_route;
    }

    public function hasTlsRoute()
    {
        return isset($this->tls_route);
    }

    public function clearTlsRoute()
    {
        unset($this->tls_route);
    }

    /**
     * Required. TlsRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute tls_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\TlsRoute $var
     * @return $this
     */
    public function setTlsRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\TlsRoute::class);
        $this->tls_route = $var;

        return $this;
    }

}

