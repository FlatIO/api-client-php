<?php
/**
 * ScoreComment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swaagger Codegen team
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

namespace Flat\APIClient\Model;

use \ArrayAccess;

/**
 * ScoreComment Class Doc Comment
 *
 * @category    Class
 * @description Comment added on a sheet music
 * @package     Flat\APIClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScoreComment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScoreComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'user' => 'string',
        'score' => 'string',
        'revision' => 'string',
        'replyTo' => 'string',
        'date' => '\DateTime',
        'modificationDate' => '\DateTime',
        'comment' => 'string',
        'rawComment' => 'string',
        'context' => '\Flat\APIClient\Model\ScoreCommentContext',
        'mentions' => 'string[]',
        'resolved' => 'bool',
        'resolvedBy' => 'string',
        'spam' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'user' => 'user',
        'score' => 'score',
        'revision' => 'revision',
        'replyTo' => 'replyTo',
        'date' => 'date',
        'modificationDate' => 'modificationDate',
        'comment' => 'comment',
        'rawComment' => 'rawComment',
        'context' => 'context',
        'mentions' => 'mentions',
        'resolved' => 'resolved',
        'resolvedBy' => 'resolvedBy',
        'spam' => 'spam'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'user' => 'setUser',
        'score' => 'setScore',
        'revision' => 'setRevision',
        'replyTo' => 'setReplyTo',
        'date' => 'setDate',
        'modificationDate' => 'setModificationDate',
        'comment' => 'setComment',
        'rawComment' => 'setRawComment',
        'context' => 'setContext',
        'mentions' => 'setMentions',
        'resolved' => 'setResolved',
        'resolvedBy' => 'setResolvedBy',
        'spam' => 'setSpam'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'user' => 'getUser',
        'score' => 'getScore',
        'revision' => 'getRevision',
        'replyTo' => 'getReplyTo',
        'date' => 'getDate',
        'modificationDate' => 'getModificationDate',
        'comment' => 'getComment',
        'rawComment' => 'getRawComment',
        'context' => 'getContext',
        'mentions' => 'getMentions',
        'resolved' => 'getResolved',
        'resolvedBy' => 'getResolvedBy',
        'spam' => 'getSpam'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_DOCUMENT = 'document';
    const TYPE_INLINE = 'inline';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DOCUMENT,
            self::TYPE_INLINE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['modificationDate'] = isset($data['modificationDate']) ? $data['modificationDate'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['rawComment'] = isset($data['rawComment']) ? $data['rawComment'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['mentions'] = isset($data['mentions']) ? $data['mentions'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['resolvedBy'] = isset($data['resolvedBy']) ? $data['resolvedBy'] : null;
        $this->container['spam'] = isset($data['spam']) ? $data['spam'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["document", "inline"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'document', 'inline'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["document", "inline"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The comment unique identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of the comment
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('document', 'inline');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'document', 'inline'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user The author unique identifier
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets score
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param string $score The unique identifier of the score where the comment was posted
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets revision
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     * @param string $revision The unique identifier of revision the comment was posted
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets replyTo
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     * @param string $replyTo When the comment is a reply to another comment, the unique identifier of the parent comment
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date The date when the comment was posted
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets modificationDate
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->container['modificationDate'];
    }

    /**
     * Sets modificationDate
     * @param \DateTime $modificationDate The date of the last comment modification
     * @return $this
     */
    public function setModificationDate($modificationDate)
    {
        $this->container['modificationDate'] = $modificationDate;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment The comment text that can includes mentions using the following format: `@[id:username]`.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets rawComment
     * @return string
     */
    public function getRawComment()
    {
        return $this->container['rawComment'];
    }

    /**
     * Sets rawComment
     * @param string $rawComment A raw version of the comment, that can be displayed without parsing the mentions.
     * @return $this
     */
    public function setRawComment($rawComment)
    {
        $this->container['rawComment'] = $rawComment;

        return $this;
    }

    /**
     * Gets context
     * @return \Flat\APIClient\Model\ScoreCommentContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param \Flat\APIClient\Model\ScoreCommentContext $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets mentions
     * @return string[]
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     * @param string[] $mentions The list of user identifier mentioned on the score
     * @return $this
     */
    public function setMentions($mentions)
    {
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets resolved
     * @return bool
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Sets resolved
     * @param bool $resolved For inline comments, the comment can be marked as resolved and will be hidden in the future responses
     * @return $this
     */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;

        return $this;
    }

    /**
     * Gets resolvedBy
     * @return string
     */
    public function getResolvedBy()
    {
        return $this->container['resolvedBy'];
    }

    /**
     * Sets resolvedBy
     * @param string $resolvedBy If the user is marked as resolved, this will contain the unique identifier of the User who marked this comment as resolved
     * @return $this
     */
    public function setResolvedBy($resolvedBy)
    {
        $this->container['resolvedBy'] = $resolvedBy;

        return $this;
    }

    /**
     * Gets spam
     * @return bool
     */
    public function getSpam()
    {
        return $this->container['spam'];
    }

    /**
     * Sets spam
     * @param bool $spam `true  if the message has been detected as spam and hidden from other users
     * @return $this
     */
    public function setSpam($spam)
    {
        $this->container['spam'] = $spam;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Flat\APIClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Flat\APIClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


