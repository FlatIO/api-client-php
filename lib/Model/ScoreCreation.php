<?php
/**
 * ScoreCreation
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
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * ScoreCreation Class Doc Comment
 *
 * @category Class
 * @description A new created score
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScoreCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScoreCreation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'privacy' => '\Flat\APIClient\Model\ScorePrivacy',
        'data' => '\Flat\APIClient\Model\ScoreData',
        'dataEncoding' => '\Flat\APIClient\Model\ScoreDataEncoding',
        'source' => '\Flat\APIClient\Model\ScoreSource',
        'collection' => 'string',
        'googleDriveFolder' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'privacy' => null,
        'data' => null,
        'dataEncoding' => null,
        'source' => null,
        'collection' => null,
        'googleDriveFolder' => null
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
        'title' => 'title',
        'privacy' => 'privacy',
        'data' => 'data',
        'dataEncoding' => 'dataEncoding',
        'source' => 'source',
        'collection' => 'collection',
        'googleDriveFolder' => 'googleDriveFolder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'privacy' => 'setPrivacy',
        'data' => 'setData',
        'dataEncoding' => 'setDataEncoding',
        'source' => 'setSource',
        'collection' => 'setCollection',
        'googleDriveFolder' => 'setGoogleDriveFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'privacy' => 'getPrivacy',
        'data' => 'getData',
        'dataEncoding' => 'getDataEncoding',
        'source' => 'getSource',
        'collection' => 'getCollection',
        'googleDriveFolder' => 'getGoogleDriveFolder'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['dataEncoding'] = isset($data['dataEncoding']) ? $data['dataEncoding'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['googleDriveFolder'] = isset($data['googleDriveFolder']) ? $data['googleDriveFolder'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['privacy'] === null) {
            $invalidProperties[] = "'privacy' can't be null";
        }
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the new score. If the title is too long, the API may trim this one.  If this title is not specified, the API will try to (in this order):   - Use the name of the file for files from a specified `source` (e.g. Google Drive)   - Use the title contained in the file (e.g. [`movement-title`](https://usermanuals.musicxml.com/MusicXML/Content/EL-MusicXML-movement-title.htm) or [`credit-words`](https://usermanuals.musicxml.com/MusicXML/Content/EL-MusicXML-credit-words.htm) for [MusicXML](http://www.musicxml.com/) files).   - Set a default title (e.g. \"New Music Score\")
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets privacy
     *
     * @return \Flat\APIClient\Model\ScorePrivacy
     */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
     * Sets privacy
     *
     * @param \Flat\APIClient\Model\ScorePrivacy $privacy privacy
     *
     * @return $this
     */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Flat\APIClient\Model\ScoreData
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Flat\APIClient\Model\ScoreData $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets dataEncoding
     *
     * @return \Flat\APIClient\Model\ScoreDataEncoding
     */
    public function getDataEncoding()
    {
        return $this->container['dataEncoding'];
    }

    /**
     * Sets dataEncoding
     *
     * @param \Flat\APIClient\Model\ScoreDataEncoding $dataEncoding dataEncoding
     *
     * @return $this
     */
    public function setDataEncoding($dataEncoding)
    {
        $this->container['dataEncoding'] = $dataEncoding;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Flat\APIClient\Model\ScoreSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Flat\APIClient\Model\ScoreSource $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets collection
     *
     * @return string
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param string $collection Unique identifier of a collection where the score will be created. If no collection identifier is provided, the score will be stored in the `root` directory.
     *
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets googleDriveFolder
     *
     * @return string
     */
    public function getGoogleDriveFolder()
    {
        return $this->container['googleDriveFolder'];
    }

    /**
     * Sets googleDriveFolder
     *
     * @param string $googleDriveFolder If the user uses Google Drive and this properties is specified, the file will be created in this directory. The currently user creating the file must be granted to write in this directory.
     *
     * @return $this
     */
    public function setGoogleDriveFolder($googleDriveFolder)
    {
        $this->container['googleDriveFolder'] = $googleDriveFolder;

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


