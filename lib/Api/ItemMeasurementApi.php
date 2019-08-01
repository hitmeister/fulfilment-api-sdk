<?php
/**
 * ItemMeasurementApi
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.9.3
 * Contact: sms.tech@real-digital.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Api;

use \SMS\Suppliers\ApiClient;
use \SMS\Suppliers\ApiException;
use \SMS\Suppliers\Configuration;
use \SMS\Suppliers\ObjectSerializer;

/**
 * ItemMeasurementApi Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemMeasurementApi
{
    /**
     * API Client
     *
     * @var \SMS\Suppliers\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SMS\Suppliers\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SMS\Suppliers\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SMS\Suppliers\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SMS\Suppliers\ApiClient $apiClient set the API client
     *
     * @return ItemMeasurementApi
     */
    public function setApiClient(\SMS\Suppliers\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getItemMeasurement
     *
     * Find item-measurement by gtin
     *
     * @param string $gtin gtin of item to request its measurement data (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\ItemMeasurementResponse
     */
    public function getItemMeasurement($gtin)
    {
        list($response) = $this->getItemMeasurementWithHttpInfo($gtin);
        return $response;
    }

    /**
     * Operation getItemMeasurementWithHttpInfo
     *
     * Find item-measurement by gtin
     *
     * @param string $gtin gtin of item to request its measurement data (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\ItemMeasurementResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemMeasurementWithHttpInfo($gtin)
    {
        // verify the required parameter 'gtin' is set
        if ($gtin === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gtin when calling getItemMeasurement');
        }
        // parse inputs
        $resourcePath = "/item-measurements/{gtin}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($gtin !== null) {
            $resourcePath = str_replace(
                "{" . "gtin" . "}",
                $this->apiClient->getSerializer()->toPathValue($gtin),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\ItemMeasurementResponse',
                '/item-measurements/{gtin}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\ItemMeasurementResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\ItemMeasurementResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
