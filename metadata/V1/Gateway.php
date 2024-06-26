<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/gateway.proto

namespace GPBMetadata\Google\Cloud\Networkservices\V1;

class Gateway
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/networkservices/v1/gateway.protogoogle.cloud.networkservices.v1google/api/resource.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Gateway
name (	B�A
	self_link (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AI
labels (24.google.cloud.networkservices.v1.Gateway.LabelsEntryB�A
description (	B�A@
type (2-.google.cloud.networkservices.v1.Gateway.TypeB�A
ports (B�A
scope (	B�A�A
server_tls_policy	 (	B�A-
LabelsEntry
key (	
value (	:8"C
Type
TYPE_UNSPECIFIED 
	OPEN_MESH
SECURE_WEB_GATEWAY:g�Ad
&networkservices.googleapis.com/Gateway:projects/{project}/locations/{location}/gateways/{gateway}"|
ListGatewaysRequest>
parent (	B.�A�A(&networkservices.googleapis.com/Gateway
	page_size (

page_token (	"k
ListGatewaysResponse:
gateways (2(.google.cloud.networkservices.v1.Gateway
next_page_token (	"Q
GetGatewayRequest<
name (	B.�A�A(
&networkservices.googleapis.com/Gateway"�
CreateGatewayRequest>
parent (	B.�A�A(&networkservices.googleapis.com/Gateway

gateway_id (	B�A>
gateway (2(.google.cloud.networkservices.v1.GatewayB�A"�
UpdateGatewayRequest4
update_mask (2.google.protobuf.FieldMaskB�A>
gateway (2(.google.cloud.networkservices.v1.GatewayB�A"T
DeleteGatewayRequest<
name (	B.�A�A(
&networkservices.googleapis.com/GatewayB�
#com.google.cloud.networkservices.v1BGatewayProtoPZMcloud.google.com/go/networkservices/apiv1/networkservicespb;networkservicespb�Google.Cloud.NetworkServices.V1�Google\\Cloud\\NetworkServices\\V1�"Google::Cloud::NetworkServices::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

