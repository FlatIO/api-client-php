<?php
/**
 * ScoreApi
 * PHP version 5
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flat API
 *
 * # Introduction The Flat API allows you to easily extend the abilities of the [Flat Platform](https://flat.io), with a wide range of use cases including the following:     - Creating and importing new music scores using MusicXML or MIDI files    - Browsing, updating, copying, exporting the user's scores (for example in MP3, WAV or MIDI)    - Managing educational resources with Flat for Education: creating & updating the organization accounts, the classes, rosters and assignments.  The Flat API is built on HTTP. Our API is RESTful It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. The [schema](/swagger.yaml) of this API follows the [OpenAPI Initiative (OAI) specification](https://www.openapis.org/), you can use and work with [compatible Swagger tools](http://swagger.io/open-source-integrations/).  You can use your favorite HTTP/REST library for your programming language to use Flat's API. This specification and reference is [available on Github](https://github.com/FlatIO/api-reference).  # Beta Please note that this public API is currently in beta and subject to change.  Our whole platform and apps are based on this API, however not all the endpoints are available publicly yet. Feel free to [contact us](mailto:developers@flat.io) if you have any questions, feedback or features requests.  We don't offer any guarantees during this beta period. By using this API, you agree to update your app in a timely fashion in response to any beta-period changes that are rolled out.  By using this API, and especially on the behalf of a user account, you must accept, respect and enforce our [Terms of Service and Privacy Policy](https://flat.io/legal).  # SDKs  Our team maintains the following SDKs:   - [Python](https://github.com/FlatIO/api-client-python)   - [JavaScript (Node.js and Browser)](https://github.com/FlatIO/api-client-js)   - [PHP](https://github.com/FlatIO/api-client-php)  # Authentication The Flat API supports OAuth2, you can request API credentials [on our website](https://flat.io/developers). We provide two types of credentials:    - **Account Access Tokens**: Simple access tokens that allow to try and use this API **with your own account**. This is a great solution to create private apps.   - **OAuth2 Credentials**: If you plan to use the Flat API **on the behalf of mutliple users** or make this app public, request OAuth2 Credentials.  <!-- ReDoc-Inject: <security-definitions> -->  ### OAuth2 Authorization page  The Authorization page (`https://flat.io/auth/oauth`) supports all the standard parameters from the **Authorization Code** flow ([RFC6749/4.1.1](https://tools.ietf.org/html/rfc6749#section-4.1.1)) and the **Implicit** flow ([RFC6749/4.2.1](https://tools.ietf.org/html/rfc6749#section-4.2.1)). Here is a summary of the parameters available, including non-standard and optional parameters. All of them can be passed as query string when redirecting the end-user to the authorization page.  Property name  | Required | Values and Description ---------------|----------|----------------------- `client_id`    | Required | The client id (aka key) from the couple key/secret provided by Flat `response_type`| Required | We support `code` (**Authorization Code** flow, [RFC6749/4.1.1](https://tools.ietf.org/html/rfc6749#section-4.1.1)) and `token`, [RFC6749/4.2.1](https://tools.ietf.org/html/rfc6749#section-4.2.1)). It is strongly advised to use the Authorization Code flow for any server-side usage and the Implicit flow for any client-side (e.g. JavaScript) usage. `scope`        | Required | You must provide a list of scopes listed above and granted for your app, separated with a space. `redirect_uri` | Required | Determines where the response is sent. The value of this parameter must exactly match the value specified in your App Credentials settings. `state`        | Optional | An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI #fragment in the Implicit flow. `access_type`  | Optional, only available for the Authorization Code flow | The acceptable values are `online` and `offline`. When specifying `offline`, the API will return a refresh token during the access token exchange.  ### OAuth2 tokens revocation  This OAuth2 API supports token revocation ([RFC 7009](http://tools.ietf.org/html/rfc7009)) at the following endpoint: `https://api.flat.io/oauth/invalidate_token`.  # CORS This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/). And that allows cross-domain communication from the browser. All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.  # Rate Limiting For authenticated requests, you can make up to 5,000 requests per hour. For unauthenticated requests, the rate limit allows you to make up to 500 requests per hour. Unauthenticated requests are associated with your IP address, and not the user or app making requests. You can contact us if you need [extra quota](https://flat.io/developers). To protect our quality of service, additional rate limits may apply to some API calls or actions.  You can check the returned HTTP headers of any API request to see your current rate limit status: ```bash curl -i https://api.flat.io/v2/me HTTP/1.1 200 OK Date: Sat, 25 Mar 2017 17:06:20 GMT X-RateLimit-Limit: 5000 X-RateLimit-Remaining: 4999 X-RateLimit-Reset: 1490465178 ```  The headers tell you everything you need to know about your current rate limit status:  Header name | Description ------------|------------ `X-RateLimit-Limit` | The maximum number of requests that the consumer is permitted to make per hour. `X-RateLimit-Remaining` | The number of requests remaining in the current rate limit window. This value can be negative if you try to go over the allowed quota. `X-RateLimit-Reset` | The time at which the current rate limit window resets in [UTC epoch seconds](http://en.wikipedia.org/wiki/Unix_time).  If you need the time in a different format, any modern programming language can get the job done. For example, if you open up the console on your web browser, you can easily get the reset time as a JavaScript Date object.  ```javascript new Date(1490465178 * 1000).toString() 'Sat Mar 25 2017 19:06:18 GMT+0100 (CET)' ```  Once you go over the rate limit you will receive an error response: ```bash curl -i https://api.flat.io/v2/me HTTP/1.1 403 Forbidden X-RateLimit-Limit: 5000 X-RateLimit-Remaining: 0 X-RateLimit-Reset: 1490465829  {   \"message\": \"API rate limit exceeded for xx.xxx.xxx.xx\",   \"code\": \"API_RATE_LIMIT_EXCEEDED\" } ```
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developers@flat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flat\APIClient\Api;

use \Flat\APIClient\ApiClient;
use \Flat\APIClient\ApiException;
use \Flat\APIClient\Configuration;
use \Flat\APIClient\ObjectSerializer;

/**
 * ScoreApi Class Doc Comment
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScoreApi
{
    /**
     * API Client
     *
     * @var \Flat\APIClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Flat\APIClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Flat\APIClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Flat\APIClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Flat\APIClient\ApiClient $apiClient set the API client
     *
     * @return ScoreApi
     */
    public function setApiClient(\Flat\APIClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addScoreCollaborator
     *
     * Add a new collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreCollaboratorCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreCollaborator
     */
    public function addScoreCollaborator($score, $body)
    {
        list($response) = $this->addScoreCollaboratorWithHttpInfo($score, $body);
        return $response;
    }

    /**
     * Operation addScoreCollaboratorWithHttpInfo
     *
     * Add a new collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreCollaboratorCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreCollaborator, HTTP status code, HTTP response headers (array of strings)
     */
    public function addScoreCollaboratorWithHttpInfo($score, $body)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling addScoreCollaborator');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addScoreCollaborator');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/collaborators";
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
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreCollaborator',
                '/scores/{score}/collaborators'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreCollaborator', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreCollaborator', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createScore
     *
     * Create a new score
     *
     * @param \Flat\APIClient\Model\ScoreCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails
     */
    public function createScore($body)
    {
        list($response) = $this->createScoreWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createScoreWithHttpInfo
     *
     * Create a new score
     *
     * @param \Flat\APIClient\Model\ScoreCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function createScoreWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createScore');
        }
        // parse inputs
        $resourcePath = "/scores";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails',
                '/scores'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createScoreRevision
     *
     * Create a new revision
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreRevisionCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreRevision
     */
    public function createScoreRevision($score, $body)
    {
        list($response) = $this->createScoreRevisionWithHttpInfo($score, $body);
        return $response;
    }

    /**
     * Operation createScoreRevisionWithHttpInfo
     *
     * Create a new revision
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreRevisionCreation $body  (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreRevision, HTTP status code, HTTP response headers (array of strings)
     */
    public function createScoreRevisionWithHttpInfo($score, $body)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling createScoreRevision');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createScoreRevision');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/revisions";
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
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreRevision',
                '/scores/{score}/revisions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreRevision', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreRevision', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteScore
     *
     * Delete a score
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return void
     */
    public function deleteScore($score)
    {
        list($response) = $this->deleteScoreWithHttpInfo($score);
        return $response;
    }

    /**
     * Operation deleteScoreWithHttpInfo
     *
     * Delete a score
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteScoreWithHttpInfo($score)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling deleteScore');
        }
        // parse inputs
        $resourcePath = "/scores/{score}";
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
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/scores/{score}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteScoreComment
     *
     * Delete a comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return void
     */
    public function deleteScoreComment($score, $comment, $sharingKey = null)
    {
        list($response) = $this->deleteScoreCommentWithHttpInfo($score, $comment, $sharingKey);
        return $response;
    }

    /**
     * Operation deleteScoreCommentWithHttpInfo
     *
     * Delete a comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteScoreCommentWithHttpInfo($score, $comment, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling deleteScoreComment');
        }
        // verify the required parameter 'comment' is set
        if ($comment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $comment when calling deleteScoreComment');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments/{comment}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($comment !== null) {
            $resourcePath = str_replace(
                "{" . "comment" . "}",
                $this->apiClient->getSerializer()->toPathValue($comment),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/scores/{score}/comments/{comment}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation editScore
     *
     * Edit a score's metadata
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreModification $body  (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails
     */
    public function editScore($score, $body = null)
    {
        list($response) = $this->editScoreWithHttpInfo($score, $body);
        return $response;
    }

    /**
     * Operation editScoreWithHttpInfo
     *
     * Edit a score's metadata
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreModification $body  (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function editScoreWithHttpInfo($score, $body = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling editScore');
        }
        // parse inputs
        $resourcePath = "/scores/{score}";
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
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails',
                '/scores/{score}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation forkScore
     *
     * Fork a score
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreFork $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails
     */
    public function forkScore($score, $body, $sharingKey = null)
    {
        list($response) = $this->forkScoreWithHttpInfo($score, $body, $sharingKey);
        return $response;
    }

    /**
     * Operation forkScoreWithHttpInfo
     *
     * Fork a score
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreFork $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function forkScoreWithHttpInfo($score, $body, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling forkScore');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling forkScore');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/fork";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails',
                '/scores/{score}/fork'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation gerUserLikes
     *
     * List liked scores
     *
     * @param string $user Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. (required)
     * @param bool $ids Return only the identifiers of the scores (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails[]
     */
    public function gerUserLikes($user, $ids = null)
    {
        list($response) = $this->gerUserLikesWithHttpInfo($user, $ids);
        return $response;
    }

    /**
     * Operation gerUserLikesWithHttpInfo
     *
     * List liked scores
     *
     * @param string $user Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. (required)
     * @param bool $ids Return only the identifiers of the scores (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails[], HTTP status code, HTTP response headers (array of strings)
     */
    public function gerUserLikesWithHttpInfo($user, $ids = null)
    {
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling gerUserLikes');
        }
        // parse inputs
        $resourcePath = "/users/{user}/likes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($ids !== null) {
            $queryParams['ids'] = $this->apiClient->getSerializer()->toQueryValue($ids);
        }
        // path params
        if ($user !== null) {
            $resourcePath = str_replace(
                "{" . "user" . "}",
                $this->apiClient->getSerializer()->toPathValue($user),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails[]',
                '/users/{user}/likes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getGroupScores
     *
     * List group's scores
     *
     * @param string $group Unique identifier of the group (required)
     * @param string $parent Filter the score forked from the score id &#x60;parent&#x60; (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails[]
     */
    public function getGroupScores($group, $parent = null)
    {
        list($response) = $this->getGroupScoresWithHttpInfo($group, $parent);
        return $response;
    }

    /**
     * Operation getGroupScoresWithHttpInfo
     *
     * List group's scores
     *
     * @param string $group Unique identifier of the group (required)
     * @param string $parent Filter the score forked from the score id &#x60;parent&#x60; (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupScoresWithHttpInfo($group, $parent = null)
    {
        // verify the required parameter 'group' is set
        if ($group === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group when calling getGroupScores');
        }
        // parse inputs
        $resourcePath = "/groups/{group}/scores";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($parent !== null) {
            $queryParams['parent'] = $this->apiClient->getSerializer()->toQueryValue($parent);
        }
        // path params
        if ($group !== null) {
            $resourcePath = str_replace(
                "{" . "group" . "}",
                $this->apiClient->getSerializer()->toPathValue($group),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails[]',
                '/groups/{group}/scores'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScore
     *
     * Get a score's metadata
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails
     */
    public function getScore($score, $sharingKey = null)
    {
        list($response) = $this->getScoreWithHttpInfo($score, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreWithHttpInfo
     *
     * Get a score's metadata
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreWithHttpInfo($score, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScore');
        }
        // parse inputs
        $resourcePath = "/scores/{score}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails',
                '/scores/{score}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreCollaborator
     *
     * Get a collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $collaborator Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreCollaborator
     */
    public function getScoreCollaborator($score, $collaborator, $sharingKey = null)
    {
        list($response) = $this->getScoreCollaboratorWithHttpInfo($score, $collaborator, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreCollaboratorWithHttpInfo
     *
     * Get a collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $collaborator Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreCollaborator, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreCollaboratorWithHttpInfo($score, $collaborator, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreCollaborator');
        }
        // verify the required parameter 'collaborator' is set
        if ($collaborator === null) {
            throw new \InvalidArgumentException('Missing the required parameter $collaborator when calling getScoreCollaborator');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/collaborators/{collaborator}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($collaborator !== null) {
            $resourcePath = str_replace(
                "{" . "collaborator" . "}",
                $this->apiClient->getSerializer()->toPathValue($collaborator),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreCollaborator',
                '/scores/{score}/collaborators/{collaborator}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreCollaborator', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreCollaborator', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreCollaborators
     *
     * List the collaborators
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreCollaborator[]
     */
    public function getScoreCollaborators($score, $sharingKey = null)
    {
        list($response) = $this->getScoreCollaboratorsWithHttpInfo($score, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreCollaboratorsWithHttpInfo
     *
     * List the collaborators
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreCollaborator[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreCollaboratorsWithHttpInfo($score, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreCollaborators');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/collaborators";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreCollaborator[]',
                '/scores/{score}/collaborators'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreCollaborator[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreCollaborator[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreComments
     *
     * List comments
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreComment[]
     */
    public function getScoreComments($score, $sharingKey = null)
    {
        list($response) = $this->getScoreCommentsWithHttpInfo($score, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreCommentsWithHttpInfo
     *
     * List comments
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreComment[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreCommentsWithHttpInfo($score, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreComments');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreComment[]',
                '/scores/{score}/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreComment[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreComment[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreRevision
     *
     * Get a score revision
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $revision Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreRevision
     */
    public function getScoreRevision($score, $revision, $sharingKey = null)
    {
        list($response) = $this->getScoreRevisionWithHttpInfo($score, $revision, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreRevisionWithHttpInfo
     *
     * Get a score revision
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $revision Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreRevision, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreRevisionWithHttpInfo($score, $revision, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreRevision');
        }
        // verify the required parameter 'revision' is set
        if ($revision === null) {
            throw new \InvalidArgumentException('Missing the required parameter $revision when calling getScoreRevision');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/revisions/{revision}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($revision !== null) {
            $resourcePath = str_replace(
                "{" . "revision" . "}",
                $this->apiClient->getSerializer()->toPathValue($revision),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreRevision',
                '/scores/{score}/revisions/{revision}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreRevision', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreRevision', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreRevisionData
     *
     * Get a score revision data
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $revision Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. (required)
     * @param string $format The format of the file you will retrieve (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @param bool $onlyCached Only return files already generated and cached in Flat&#39;s production cache. If the file is not availabe, a 404 will be returned (optional)
     * @param string $parts An optional a set of parts to be exported. This parameter must be specified with a list of integers. For example \&quot;1,2,5\&quot;. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return string
     */
    public function getScoreRevisionData($score, $revision, $format, $sharingKey = null, $onlyCached = null, $parts = null)
    {
        list($response) = $this->getScoreRevisionDataWithHttpInfo($score, $revision, $format, $sharingKey, $onlyCached, $parts);
        return $response;
    }

    /**
     * Operation getScoreRevisionDataWithHttpInfo
     *
     * Get a score revision data
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $revision Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. (required)
     * @param string $format The format of the file you will retrieve (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @param bool $onlyCached Only return files already generated and cached in Flat&#39;s production cache. If the file is not availabe, a 404 will be returned (optional)
     * @param string $parts An optional a set of parts to be exported. This parameter must be specified with a list of integers. For example \&quot;1,2,5\&quot;. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreRevisionDataWithHttpInfo($score, $revision, $format, $sharingKey = null, $onlyCached = null, $parts = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreRevisionData');
        }
        // verify the required parameter 'revision' is set
        if ($revision === null) {
            throw new \InvalidArgumentException('Missing the required parameter $revision when calling getScoreRevisionData');
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getScoreRevisionData');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/revisions/{revision}/{format}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/vnd.recordare.musicxml+xml', 'application/vnd.recordare.musicxml', 'audio/mp3', 'audio/wav', 'audio/midi', 'image/png']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // query params
        if ($onlyCached !== null) {
            $queryParams['onlyCached'] = $this->apiClient->getSerializer()->toQueryValue($onlyCached);
        }
        // query params
        if ($parts !== null) {
            $queryParams['parts'] = $this->apiClient->getSerializer()->toQueryValue($parts);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($revision !== null) {
            $resourcePath = str_replace(
                "{" . "revision" . "}",
                $this->apiClient->getSerializer()->toPathValue($revision),
                $resourcePath
            );
        }
        // path params
        if ($format !== null) {
            $resourcePath = str_replace(
                "{" . "format" . "}",
                $this->apiClient->getSerializer()->toPathValue($format),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/scores/{score}/revisions/{revision}/{format}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getScoreRevisions
     *
     * List the revisions
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreRevision[]
     */
    public function getScoreRevisions($score, $sharingKey = null)
    {
        list($response) = $this->getScoreRevisionsWithHttpInfo($score, $sharingKey);
        return $response;
    }

    /**
     * Operation getScoreRevisionsWithHttpInfo
     *
     * List the revisions
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreRevision[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getScoreRevisionsWithHttpInfo($score, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling getScoreRevisions');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/revisions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreRevision[]',
                '/scores/{score}/revisions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreRevision[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreRevision[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUserScores
     *
     * List user's scores
     *
     * @param string $user Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. (required)
     * @param string $parent Filter the score forked from the score id &#x60;parent&#x60; (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreDetails[]
     */
    public function getUserScores($user, $parent = null)
    {
        list($response) = $this->getUserScoresWithHttpInfo($user, $parent);
        return $response;
    }

    /**
     * Operation getUserScoresWithHttpInfo
     *
     * List user's scores
     *
     * @param string $user Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. (required)
     * @param string $parent Filter the score forked from the score id &#x60;parent&#x60; (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreDetails[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserScoresWithHttpInfo($user, $parent = null)
    {
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling getUserScores');
        }
        // parse inputs
        $resourcePath = "/users/{user}/scores";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($parent !== null) {
            $queryParams['parent'] = $this->apiClient->getSerializer()->toQueryValue($parent);
        }
        // path params
        if ($user !== null) {
            $resourcePath = str_replace(
                "{" . "user" . "}",
                $this->apiClient->getSerializer()->toPathValue($user),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreDetails[]',
                '/users/{user}/scores'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreDetails[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation markScoreCommentResolved
     *
     * Mark the comment as resolved
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return void
     */
    public function markScoreCommentResolved($score, $comment, $sharingKey = null)
    {
        list($response) = $this->markScoreCommentResolvedWithHttpInfo($score, $comment, $sharingKey);
        return $response;
    }

    /**
     * Operation markScoreCommentResolvedWithHttpInfo
     *
     * Mark the comment as resolved
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function markScoreCommentResolvedWithHttpInfo($score, $comment, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling markScoreCommentResolved');
        }
        // verify the required parameter 'comment' is set
        if ($comment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $comment when calling markScoreCommentResolved');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments/{comment}/resolved";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($comment !== null) {
            $resourcePath = str_replace(
                "{" . "comment" . "}",
                $this->apiClient->getSerializer()->toPathValue($comment),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/scores/{score}/comments/{comment}/resolved'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation markScoreCommentUnresolved
     *
     * Mark the comment as unresolved
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return void
     */
    public function markScoreCommentUnresolved($score, $comment, $sharingKey = null)
    {
        list($response) = $this->markScoreCommentUnresolvedWithHttpInfo($score, $comment, $sharingKey);
        return $response;
    }

    /**
     * Operation markScoreCommentUnresolvedWithHttpInfo
     *
     * Mark the comment as unresolved
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function markScoreCommentUnresolvedWithHttpInfo($score, $comment, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling markScoreCommentUnresolved');
        }
        // verify the required parameter 'comment' is set
        if ($comment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $comment when calling markScoreCommentUnresolved');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments/{comment}/resolved";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($comment !== null) {
            $resourcePath = str_replace(
                "{" . "comment" . "}",
                $this->apiClient->getSerializer()->toPathValue($comment),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/scores/{score}/comments/{comment}/resolved'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postScoreComment
     *
     * Post a new comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreCommentCreation $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreComment
     */
    public function postScoreComment($score, $body, $sharingKey = null)
    {
        list($response) = $this->postScoreCommentWithHttpInfo($score, $body, $sharingKey);
        return $response;
    }

    /**
     * Operation postScoreCommentWithHttpInfo
     *
     * Post a new comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param \Flat\APIClient\Model\ScoreCommentCreation $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreComment, HTTP status code, HTTP response headers (array of strings)
     */
    public function postScoreCommentWithHttpInfo($score, $body, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling postScoreComment');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postScoreComment');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreComment',
                '/scores/{score}/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreComment', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreComment', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removeScoreCollaborator
     *
     * Delete a collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $collaborator Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return void
     */
    public function removeScoreCollaborator($score, $collaborator)
    {
        list($response) = $this->removeScoreCollaboratorWithHttpInfo($score, $collaborator);
        return $response;
    }

    /**
     * Operation removeScoreCollaboratorWithHttpInfo
     *
     * Delete a collaborator
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $collaborator Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** (required)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeScoreCollaboratorWithHttpInfo($score, $collaborator)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling removeScoreCollaborator');
        }
        // verify the required parameter 'collaborator' is set
        if ($collaborator === null) {
            throw new \InvalidArgumentException('Missing the required parameter $collaborator when calling removeScoreCollaborator');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/collaborators/{collaborator}";
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
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($collaborator !== null) {
            $resourcePath = str_replace(
                "{" . "collaborator" . "}",
                $this->apiClient->getSerializer()->toPathValue($collaborator),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/scores/{score}/collaborators/{collaborator}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateScoreComment
     *
     * Update an existing comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param \Flat\APIClient\Model\ScoreCommentUpdate $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return \Flat\APIClient\Model\ScoreComment
     */
    public function updateScoreComment($score, $comment, $body, $sharingKey = null)
    {
        list($response) = $this->updateScoreCommentWithHttpInfo($score, $comment, $body, $sharingKey);
        return $response;
    }

    /**
     * Operation updateScoreCommentWithHttpInfo
     *
     * Update an existing comment
     *
     * @param string $score Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). (required)
     * @param string $comment Unique identifier of a sheet music comment (required)
     * @param \Flat\APIClient\Model\ScoreCommentUpdate $body  (required)
     * @param string $sharingKey This sharing key must be specified to access to a score with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. (optional)
     * @throws \Flat\APIClient\ApiException on non-2xx response
     * @return array of \Flat\APIClient\Model\ScoreComment, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateScoreCommentWithHttpInfo($score, $comment, $body, $sharingKey = null)
    {
        // verify the required parameter 'score' is set
        if ($score === null) {
            throw new \InvalidArgumentException('Missing the required parameter $score when calling updateScoreComment');
        }
        // verify the required parameter 'comment' is set
        if ($comment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $comment when calling updateScoreComment');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateScoreComment');
        }
        // parse inputs
        $resourcePath = "/scores/{score}/comments/{comment}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($sharingKey !== null) {
            $queryParams['sharingKey'] = $this->apiClient->getSerializer()->toQueryValue($sharingKey);
        }
        // path params
        if ($score !== null) {
            $resourcePath = str_replace(
                "{" . "score" . "}",
                $this->apiClient->getSerializer()->toPathValue($score),
                $resourcePath
            );
        }
        // path params
        if ($comment !== null) {
            $resourcePath = str_replace(
                "{" . "comment" . "}",
                $this->apiClient->getSerializer()->toPathValue($comment),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Flat\APIClient\Model\ScoreComment',
                '/scores/{score}/comments/{comment}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Flat\APIClient\Model\ScoreComment', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\ScoreComment', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Flat\APIClient\Model\FlatErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
