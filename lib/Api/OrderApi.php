<?php
/**
 * OrderApi
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
 * OpenAPI spec version: 1.9.0
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
 * OrderApi Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApi
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
     * @return OrderApi
     */
    public function setApiClient(\SMS\Suppliers\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation confirmOrder
     *
     * Confirm order
     *
     * @param string $id ID of order to confirm (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return void
     */
    public function confirmOrder($id)
    {
        list($response) = $this->confirmOrderWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation confirmOrderWithHttpInfo
     *
     * Confirm order
     *
     * @param string $id ID of order to confirm (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmOrderWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling confirmOrder');
        }
        // parse inputs
        $resourcePath = "/orders/{id}/confirm";
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
                '/orders/{id}/confirm'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getOrder
     *
     * Find order by ID
     *
     * @param string $id ID of order to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\GetFulfilmentOrderResponse
     */
    public function getOrder($id)
    {
        list($response) = $this->getOrderWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * Find order by ID
     *
     * @param string $id ID of order to return (required)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\GetFulfilmentOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOrder');
        }
        // parse inputs
        $resourcePath = "/orders/{id}";
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
                '\SMS\Suppliers\Model\GetFulfilmentOrderResponse',
                '/orders/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\GetFulfilmentOrderResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\GetFulfilmentOrderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrders
     *
     * Find all orders by given parameters
     *
     * @param string $created_at Creation date of order (optional)
     * @param string $open Order is not sent or canceled (values example: yes|true|1) (optional)
     * @param int $limit Results per page (optional, default to 100)
     * @param int $page Page number applied to the result set (optional, default to 1)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return \SMS\Suppliers\Model\GetFulfilmentOrdersResponse
     */
    public function getOrders($created_at = null, $open = null, $limit = '100', $page = '1')
    {
        list($response) = $this->getOrdersWithHttpInfo($created_at, $open, $limit, $page);
        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo
     *
     * Find all orders by given parameters
     *
     * @param string $created_at Creation date of order (optional)
     * @param string $open Order is not sent or canceled (values example: yes|true|1) (optional)
     * @param int $limit Results per page (optional, default to 100)
     * @param int $page Page number applied to the result set (optional, default to 1)
     * @throws \SMS\Suppliers\ApiException on non-2xx response
     * @return array of \SMS\Suppliers\Model\GetFulfilmentOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($created_at = null, $open = null, $limit = '100', $page = '1')
    {
        // parse inputs
        $resourcePath = "/orders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($open !== null) {
            $queryParams['open'] = $this->apiClient->getSerializer()->toQueryValue($open);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
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
                '\SMS\Suppliers\Model\GetFulfilmentOrdersResponse',
                '/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SMS\Suppliers\Model\GetFulfilmentOrdersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SMS\Suppliers\Model\GetFulfilmentOrdersResponse', $e->getResponseHeaders());
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
}
