<?php
/**
 * Collection
 *
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
 * The Flat API allows you to easily extend the abilities of the [Flat Platform](https://flat.io), with a wide range of use cases including the following:  * Creating and importing new music scores using MusicXML or MIDI files * Browsing, updating, copying, exporting the user's scores (for example in MP3, WAV or MIDI) * Managing educational resources with Flat for Education: creating & updating the organization accounts, the classes, rosters and assignments.  The Flat API is built on HTTP. Our API is RESTful It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. The [schema](/swagger.yaml) of this API follows the [OpenAPI Initiative (OAI) specification](https://www.openapis.org/), you can use and work with [compatible Swagger tools](http://swagger.io/open-source-integrations/). This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/).  You can use your favorite HTTP/REST library for your programming language to use Flat's API. This specification and reference is [available on Github](https://github.com/FlatIO/api-reference).  Getting Started and learn more:  * [API Overview and interoduction](https://flat.io/developers/docs/api/) * [Authentication (Personal Access Tokens or OAuth2)](https://flat.io/developers/docs/api/authentication.html) * [SDKs](https://flat.io/developers/docs/api/sdks.html) * [Rate Limits](https://flat.io/developers/docs/api/rate-limits.html) * [Changelog](https://flat.io/developers/docs/api/changelog.html)
 *
 * OpenAPI spec version: 2.6.0
 * Contact: developers@flat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flat\APIClient\Model;

use \ArrayAccess;
use \Flat\APIClient\ObjectSerializer;

/**
 * Collection Class Doc Comment
 *
 * @category Class
 * @description Collection of scores
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Collection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'title' => '\Flat\APIClient\Model\CollectionTitle',
        'htmlUrl' => 'string',
        'type' => '\Flat\APIClient\Model\CollectionType',
        'privacy' => '\Flat\APIClient\Model\CollectionPrivacy',
        'sharingKey' => 'string',
        'app' => 'string',
        'user' => '\Flat\APIClient\Model\UserPublicSummary',
        'rights' => '\Flat\APIClient\Model\ResourceRights',
        'collaborators' => '\Flat\APIClient\Model\ResourceCollaborator[]',
        'capabilities' => '\Flat\APIClient\Model\CollectionCapabilities'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'htmlUrl' => 'url',
        'type' => null,
        'privacy' => null,
        'sharingKey' => null,
        'app' => null,
        'user' => null,
        'rights' => null,
        'collaborators' => null,
        'capabilities' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'htmlUrl' => 'htmlUrl',
        'type' => 'type',
        'privacy' => 'privacy',
        'sharingKey' => 'sharingKey',
        'app' => 'app',
        'user' => 'user',
        'rights' => 'rights',
        'collaborators' => 'collaborators',
        'capabilities' => 'capabilities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'htmlUrl' => 'setHtmlUrl',
        'type' => 'setType',
        'privacy' => 'setPrivacy',
        'sharingKey' => 'setSharingKey',
        'app' => 'setApp',
        'user' => 'setUser',
        'rights' => 'setRights',
        'collaborators' => 'setCollaborators',
        'capabilities' => 'setCapabilities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'htmlUrl' => 'getHtmlUrl',
        'type' => 'getType',
        'privacy' => 'getPrivacy',
        'sharingKey' => 'getSharingKey',
        'app' => 'getApp',
        'user' => 'getUser',
        'rights' => 'getRights',
        'collaborators' => 'getCollaborators',
        'capabilities' => 'getCapabilities'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
        $this->container['sharingKey'] = isset($data['sharingKey']) ? $data['sharingKey'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['rights'] = isset($data['rights']) ? $data['rights'] : null;
        $this->container['collaborators'] = isset($data['collaborators']) ? $data['collaborators'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier of the collection
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \Flat\APIClient\Model\CollectionTitle
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Flat\APIClient\Model\CollectionTitle $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets htmlUrl
     *
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     *
     * @param string $htmlUrl The url where the collection can be viewed in a web browser
     *
     * @return $this
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Flat\APIClient\Model\CollectionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Flat\APIClient\Model\CollectionType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets privacy
     *
     * @return \Flat\APIClient\Model\CollectionPrivacy
     */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
     * Sets privacy
     *
     * @param \Flat\APIClient\Model\CollectionPrivacy $privacy privacy
     *
     * @return $this
     */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;

        return $this;
    }

    /**
     * Gets sharingKey
     *
     * @return string
     */
    public function getSharingKey()
    {
        return $this->container['sharingKey'];
    }

    /**
     * Sets sharingKey
     *
     * @param string $sharingKey The private sharing key of the collection (available when the `privacy` mode is set to `privateLink`)
     *
     * @return $this
     */
    public function setSharingKey($sharingKey)
    {
        $this->container['sharingKey'] = $sharingKey;

        return $this;
    }

    /**
     * Gets app
     *
     * @return string
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param string $app If this directory is dedicated to an app, the unique idenfier of this app
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Flat\APIClient\Model\UserPublicSummary
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Flat\APIClient\Model\UserPublicSummary $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets rights
     *
     * @return \Flat\APIClient\Model\ResourceRights
     */
    public function getRights()
    {
        return $this->container['rights'];
    }

    /**
     * Sets rights
     *
     * @param \Flat\APIClient\Model\ResourceRights $rights rights
     *
     * @return $this
     */
    public function setRights($rights)
    {
        $this->container['rights'] = $rights;

        return $this;
    }

    /**
     * Gets collaborators
     *
     * @return \Flat\APIClient\Model\ResourceCollaborator[]
     */
    public function getCollaborators()
    {
        return $this->container['collaborators'];
    }

    /**
     * Sets collaborators
     *
     * @param \Flat\APIClient\Model\ResourceCollaborator[] $collaborators The list of the collaborators of the collection
     *
     * @return $this
     */
    public function setCollaborators($collaborators)
    {
        $this->container['collaborators'] = $collaborators;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return \Flat\APIClient\Model\CollectionCapabilities
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \Flat\APIClient\Model\CollectionCapabilities $capabilities capabilities
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

