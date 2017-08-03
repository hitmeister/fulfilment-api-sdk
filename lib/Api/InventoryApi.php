<?php
/**
 * InventoryApi
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API SDK
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.0.0
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
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryApi
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
     * @return InventoryApi
     */
    public function setApiClient(\SMS\Suppliers\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createImportRequest
     *
     * Create new inventory import
     *
     * @param string $id ID of inventory (required)
     * @param \SMS\Suppliers\Model\CreateImportRequest $body Inventory import request which stores all the necessary info (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function createImportRequest($id, $body)
    {
        list($response) = $this->createImportRequestWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation createImportRequestWithHttpInfo
     *
     * Create new inventory import
     *
     * @param string $id ID of inventory (required)
     * @param \SMS\Suppliers\Model\CreateImportRequest $body Inventory import request which stores all the necessary info (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createImportRequestWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling createImportRequest');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createImportRequest');
        }
        // parse inputs
        $resourcePath = "/inventories/{id}/import-requests";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/inventories/{id}/import-requests'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createInventoryUnit
     *
     * Create new inventory unit
     *
     * @param string $id ID of inventory (required)
     * @param \SMS\Suppliers\Model\CreateInventoryUnitRequest $body Inventory unit object that needs to be added to the inventory (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\CreateInventoryUnitResponse
     */
    public function createInventoryUnit($id, $body)
    {
        list($response) = $this->createInventoryUnitWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation createInventoryUnitWithHttpInfo
     *
     * Create new inventory unit
     *
     * @param string $id ID of inventory (required)
     * @param \SMS\Suppliers\Model\CreateInventoryUnitRequest $body Inventory unit object that needs to be added to the inventory (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\CreateInventoryUnitResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInventoryUnitWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling createInventoryUnit');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createInventoryUnit');
        }
        // parse inputs
        $resourcePath = "/inventories/{id}/units";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SMS\Suppliers\Model\CreateInventoryUnitResponse',
                '/inventories/{id}/units'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\CreateInventoryUnitResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\CreateInventoryUnitResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getInventory
     *
     * Find inventory by ID
     *
     * @param string $id ID of inventory to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\GetInventoryResponse
     */
    public function getInventory($id)
    {
        list($response) = $this->getInventoryWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getInventoryWithHttpInfo
     *
     * Find inventory by ID
     *
     * @param string $id ID of inventory to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\GetInventoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventoryWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getInventory');
        }
        // parse inputs
        $resourcePath = "/inventories/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\SMS\Suppliers\Model\GetInventoryResponse',
                '/inventories/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\GetInventoryResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\GetInventoryResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getInventoryUnits
     *
     * Find all inventory units by inventory ID
     *
     * @param string $id ID of inventory (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function getInventoryUnits($id)
    {
        list($response) = $this->getInventoryUnitsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getInventoryUnitsWithHttpInfo
     *
     * Find all inventory units by inventory ID
     *
     * @param string $id ID of inventory (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventoryUnitsWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getInventoryUnits');
        }
        // parse inputs
        $resourcePath = "/inventories/{id}/units";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                null,
                '/inventories/{id}/units'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
