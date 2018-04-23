<?php
/**
 * Assignment
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
 * Assignment Class Doc Comment
 *
 * @category Class
 * @description Assignment details
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Assignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Assignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'title' => 'string',
        'classroom' => 'string',
        'description' => 'string',
        'attachments' => '\Flat\APIClient\Model\MediaAttachment[]',
        'submissions' => '\Flat\APIClient\Model\AssignmentSubmission[]',
        'creator' => 'string',
        'creationDate' => '\DateTime',
        'scheduledDate' => '\DateTime',
        'dueDate' => '\DateTime',
        'googleClassroom' => '\Flat\APIClient\Model\GoogleClassroomCoursework'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state' => null,
        'title' => null,
        'classroom' => null,
        'description' => null,
        'attachments' => null,
        'submissions' => null,
        'creator' => null,
        'creationDate' => 'date-time',
        'scheduledDate' => 'date-time',
        'dueDate' => 'date-time',
        'googleClassroom' => null
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
        'state' => 'state',
        'title' => 'title',
        'classroom' => 'classroom',
        'description' => 'description',
        'attachments' => 'attachments',
        'submissions' => 'submissions',
        'creator' => 'creator',
        'creationDate' => 'creationDate',
        'scheduledDate' => 'scheduledDate',
        'dueDate' => 'dueDate',
        'googleClassroom' => 'googleClassroom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'title' => 'setTitle',
        'classroom' => 'setClassroom',
        'description' => 'setDescription',
        'attachments' => 'setAttachments',
        'submissions' => 'setSubmissions',
        'creator' => 'setCreator',
        'creationDate' => 'setCreationDate',
        'scheduledDate' => 'setScheduledDate',
        'dueDate' => 'setDueDate',
        'googleClassroom' => 'setGoogleClassroom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'title' => 'getTitle',
        'classroom' => 'getClassroom',
        'description' => 'getDescription',
        'attachments' => 'getAttachments',
        'submissions' => 'getSubmissions',
        'creator' => 'getCreator',
        'creationDate' => 'getCreationDate',
        'scheduledDate' => 'getScheduledDate',
        'dueDate' => 'getDueDate',
        'googleClassroom' => 'getGoogleClassroom'
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

    const STATE_DRAFT = 'draft';
    const STATE_ACTIVE = 'active';
    const STATE_ARCHIVED = 'archived';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_ACTIVE,
            self::STATE_ARCHIVED,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['classroom'] = isset($data['classroom']) ? $data['classroom'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['submissions'] = isset($data['submissions']) ? $data['submissions'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['scheduledDate'] = isset($data['scheduledDate']) ? $data['scheduledDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['googleClassroom'] = isset($data['googleClassroom']) ? $data['googleClassroom'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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

        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the assignment
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string $title Title of the assignment
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets classroom
     *
     * @return string
     */
    public function getClassroom()
    {
        return $this->container['classroom'];
    }

    /**
     * Sets classroom
     *
     * @param string $classroom The unique identifier of the class where this assignment was posted
     *
     * @return $this
     */
    public function setClassroom($classroom)
    {
        $this->container['classroom'] = $classroom;

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
     * @param string $description Description and content of the assignment
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Flat\APIClient\Model\MediaAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Flat\APIClient\Model\MediaAttachment[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets submissions
     *
     * @return \Flat\APIClient\Model\AssignmentSubmission[]
     */
    public function getSubmissions()
    {
        return $this->container['submissions'];
    }

    /**
     * Sets submissions
     *
     * @param \Flat\APIClient\Model\AssignmentSubmission[] $submissions submissions
     *
     * @return $this
     */
    public function setSubmissions($submissions)
    {
        $this->container['submissions'] = $submissions;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator The User unique identifier of the creator of this assignment
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate The creation date of this assignment
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets scheduledDate
     *
     * @return \DateTime
     */
    public function getScheduledDate()
    {
        return $this->container['scheduledDate'];
    }

    /**
     * Sets scheduledDate
     *
     * @param \DateTime $scheduledDate The publication (scheduled) date of the assignment. If this one is specified, the assignment will only be listed to the teachers of the class.
     *
     * @return $this
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->container['scheduledDate'] = $scheduledDate;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime $dueDate The due date of this assignment, late submissions will be marked as paste due.
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets googleClassroom
     *
     * @return \Flat\APIClient\Model\GoogleClassroomCoursework
     */
    public function getGoogleClassroom()
    {
        return $this->container['googleClassroom'];
    }

    /**
     * Sets googleClassroom
     *
     * @param \Flat\APIClient\Model\GoogleClassroomCoursework $googleClassroom googleClassroom
     *
     * @return $this
     */
    public function setGoogleClassroom($googleClassroom)
    {
        $this->container['googleClassroom'] = $googleClassroom;

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


