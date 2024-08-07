<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START networkservices_v1_generated_NetworkServices_GetTcpRoute_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\NetworkServices\V1\Client\NetworkServicesClient;
use Google\Cloud\NetworkServices\V1\GetTcpRouteRequest;
use Google\Cloud\NetworkServices\V1\TcpRoute;

/**
 * Gets details of a single TcpRoute.
 *
 * @param string $formattedName A name of the TcpRoute to get. Must be in the format
 *                              `projects/&#42;/locations/global/tcpRoutes/*`. Please see
 *                              {@see NetworkServicesClient::tcpRouteName()} for help formatting this field.
 */
function get_tcp_route_sample(string $formattedName): void
{
    // Create a client.
    $networkServicesClient = new NetworkServicesClient();

    // Prepare the request message.
    $request = (new GetTcpRouteRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var TcpRoute $response */
        $response = $networkServicesClient->getTcpRoute($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = NetworkServicesClient::tcpRouteName('[PROJECT]', '[LOCATION]', '[TCP_ROUTE]');

    get_tcp_route_sample($formattedName);
}
// [END networkservices_v1_generated_NetworkServices_GetTcpRoute_sync]
