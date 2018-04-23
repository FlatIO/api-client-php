<?php
/**
 * MediaAttachment
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
 * MediaAttachment Class Doc Comment
 *
 * @category Class
 * @description Media attachment. The API will automatically resolve the details, oEmbed, and media available if possible and return them in this object
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MediaAttachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'score' => 'string',
        'revision' => 'string',
        'correct' => 'bool',
        'sharingMode' => '\Flat\APIClient\Model\MediaScoreSharingMode',
        'title' => 'string',
        'description' => 'string',
        'html' => 'string',
        'htmlWidth' => 'string',
        'htmlHeight' => 'string',
        'url' => 'string',
        'thumbnailUrl' => 'string',
        'thumbnailWidth' => 'string',
        'thumbnailHeight' => 'string',
        'authorName' => 'string',
        'authorUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'score' => null,
        'revision' => null,
        'correct' => null,
        'sharingMode' => null,
        'title' => null,
        'description' => null,
        'html' => null,
        'htmlWidth' => null,
        'htmlHeight' => null,
        'url' => null,
        'thumbnailUrl' => null,
        'thumbnailWidth' => null,
        'thumbnailHeight' => null,
        'authorName' => null,
        'authorUrl' => null
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
        'type' => 'type',
        'score' => 'score',
        'revision' => 'revision',
        'correct' => 'correct',
        'sharingMode' => 'sharingMode',
        'title' => 'title',
        'description' => 'description',
        'html' => 'html',
        'htmlWidth' => 'htmlWidth',
        'htmlHeight' => 'htmlHeight',
        'url' => 'url',
        'thumbnailUrl' => 'thumbnailUrl',
        'thumbnailWidth' => 'thumbnailWidth',
        'thumbnailHeight' => 'thumbnailHeight',
        'authorName' => 'authorName',
        'authorUrl' => 'authorUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'score' => 'setScore',
        'revision' => 'setRevision',
        'correct' => 'setCorrect',
        'sharingMode' => 'setSharingMode',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'html' => 'setHtml',
        'htmlWidth' => 'setHtmlWidth',
        'htmlHeight' => 'setHtmlHeight',
        'url' => 'setUrl',
        'thumbnailUrl' => 'setThumbnailUrl',
        'thumbnailWidth' => 'setThumbnailWidth',
        'thumbnailHeight' => 'setThumbnailHeight',
        'authorName' => 'setAuthorName',
        'authorUrl' => 'setAuthorUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'score' => 'getScore',
        'revision' => 'getRevision',
        'correct' => 'getCorrect',
        'sharingMode' => 'getSharingMode',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'html' => 'getHtml',
        'htmlWidth' => 'getHtmlWidth',
        'htmlHeight' => 'getHtmlHeight',
        'url' => 'getUrl',
        'thumbnailUrl' => 'getThumbnailUrl',
        'thumbnailWidth' => 'getThumbnailWidth',
        'thumbnailHeight' => 'getThumbnailHeight',
        'authorName' => 'getAuthorName',
        'authorUrl' => 'getAuthorUrl'
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

    const TYPE_RICH = 'rich';
    const TYPE_PHOTO = 'photo';
    const TYPE_VIDEO = 'video';
    const TYPE_LINK = 'link';
    const TYPE_FLAT = 'flat';
    const TYPE_EXERCISE = 'exercise';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RICH,
            self::TYPE_PHOTO,
            self::TYPE_VIDEO,
            self::TYPE_LINK,
            self::TYPE_FLAT,
            self::TYPE_EXERCISE,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['correct'] = isset($data['correct']) ? $data['correct'] : null;
        $this->container['sharingMode'] = isset($data['sharingMode']) ? $data['sharingMode'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['htmlWidth'] = isset($data['htmlWidth']) ? $data['htmlWidth'] : null;
        $this->container['htmlHeight'] = isset($data['htmlHeight']) ? $data['htmlHeight'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['thumbnailUrl'] = isset($data['thumbnailUrl']) ? $data['thumbnailUrl'] : null;
        $this->container['thumbnailWidth'] = isset($data['thumbnailWidth']) ? $data['thumbnailWidth'] : null;
        $this->container['thumbnailHeight'] = isset($data['thumbnailHeight']) ? $data['thumbnailHeight'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['authorUrl'] = isset($data['authorUrl']) ? $data['authorUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the assignment resolved: * `rich`, `photo`, `video` are attachment types that are automatically resolved from a `link` attachment. * A `flat` attachment is a score document where the unique identifier will be specified in the `score` property. Its sharing mode will be provided in the `sharingMode` property.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string $score An unique Flat score identifier
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision An unique revision identifier of a score
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets correct
     *
     * @return bool
     */
    public function getCorrect()
    {
        return $this->container['correct'];
    }

    /**
     * Sets correct
     *
     * @param bool $correct If the attachment is an exercise question, this state will describe if it is correct or not.For exercise assignments only.
     *
     * @return $this
     */
    public function setCorrect($correct)
    {
        $this->container['correct'] = $correct;

        return $this;
    }

    /**
     * Gets sharingMode
     *
     * @return \Flat\APIClient\Model\MediaScoreSharingMode
     */
    public function getSharingMode()
    {
        return $this->container['sharingMode'];
    }

    /**
     * Sets sharingMode
     *
     * @param \Flat\APIClient\Model\MediaScoreSharingMode $sharingMode sharingMode
     *
     * @return $this
     */
    public function setSharingMode($sharingMode)
    {
        $this->container['sharingMode'] = $sharingMode;

        return $this;
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
     * @param string $title The resolved title of the attachment
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The resolved description of the attachment
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html If the attachment type is `rich` or `video`, the HTML code of the media to display
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets htmlWidth
     *
     * @return string
     */
    public function getHtmlWidth()
    {
        return $this->container['htmlWidth'];
    }

    /**
     * Sets htmlWidth
     *
     * @param string $htmlWidth If the `html` is available, the width of the widget
     *
     * @return $this
     */
    public function setHtmlWidth($htmlWidth)
    {
        $this->container['htmlWidth'] = $htmlWidth;

        return $this;
    }

    /**
     * Gets htmlHeight
     *
     * @return string
     */
    public function getHtmlHeight()
    {
        return $this->container['htmlHeight'];
    }

    /**
     * Sets htmlHeight
     *
     * @param string $htmlHeight If the `html` is available, the height of the widget
     *
     * @return $this
     */
    public function setHtmlHeight($htmlHeight)
    {
        $this->container['htmlHeight'] = $htmlHeight;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The url of the attachment
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets thumbnailUrl
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnailUrl'];
    }

    /**
     * Sets thumbnailUrl
     *
     * @param string $thumbnailUrl If the attachment type is `rich`, `video`, `photo` or `link`, a displayable thumbnail for this attachment
     *
     * @return $this
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->container['thumbnailUrl'] = $thumbnailUrl;

        return $this;
    }

    /**
     * Gets thumbnailWidth
     *
     * @return string
     */
    public function getThumbnailWidth()
    {
        return $this->container['thumbnailWidth'];
    }

    /**
     * Sets thumbnailWidth
     *
     * @param string $thumbnailWidth If the `thumbnailUrl` is available, the width of the thumbnail
     *
     * @return $this
     */
    public function setThumbnailWidth($thumbnailWidth)
    {
        $this->container['thumbnailWidth'] = $thumbnailWidth;

        return $this;
    }

    /**
     * Gets thumbnailHeight
     *
     * @return string
     */
    public function getThumbnailHeight()
    {
        return $this->container['thumbnailHeight'];
    }

    /**
     * Sets thumbnailHeight
     *
     * @param string $thumbnailHeight If the `thumbnailUrl` is available, the width of the thumbnail
     *
     * @return $this
     */
    public function setThumbnailHeight($thumbnailHeight)
    {
        $this->container['thumbnailHeight'] = $thumbnailHeight;

        return $this;
    }

    /**
     * Gets authorName
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
     * Sets authorName
     *
     * @param string $authorName The resolved author name of the attachment
     *
     * @return $this
     */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;

        return $this;
    }

    /**
     * Gets authorUrl
     *
     * @return string
     */
    public function getAuthorUrl()
    {
        return $this->container['authorUrl'];
    }

    /**
     * Sets authorUrl
     *
     * @param string $authorUrl The resolved author url of the attachment
     *
     * @return $this
     */
    public function setAuthorUrl($authorUrl)
    {
        $this->container['authorUrl'] = $authorUrl;

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


