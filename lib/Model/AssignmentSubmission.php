<?php
/**
 * AssignmentSubmission
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
 * AssignmentSubmission Class Doc Comment
 *
 * @category Class
 * @description Assignment Submission
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssignmentSubmission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssignmentSubmission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'classroom' => 'string',
        'assignment' => 'string',
        'creator' => 'string',
        'creationDate' => 'string',
        'attachments' => '\Flat\APIClient\Model\MediaAttachment[]',
        'submissionDate' => 'string',
        'studentComment' => 'string',
        'returnDate' => 'string',
        'returnFeedback' => 'string',
        'returnCreator' => 'string',
        'googleClassroom' => '\Flat\APIClient\Model\GoogleClassroomSubmission'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'classroom' => null,
        'assignment' => null,
        'creator' => null,
        'creationDate' => null,
        'attachments' => null,
        'submissionDate' => null,
        'studentComment' => null,
        'returnDate' => null,
        'returnFeedback' => null,
        'returnCreator' => null,
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
        'id' => 'id',
        'classroom' => 'classroom',
        'assignment' => 'assignment',
        'creator' => 'creator',
        'creationDate' => 'creationDate',
        'attachments' => 'attachments',
        'submissionDate' => 'submissionDate',
        'studentComment' => 'studentComment',
        'returnDate' => 'returnDate',
        'returnFeedback' => 'returnFeedback',
        'returnCreator' => 'returnCreator',
        'googleClassroom' => 'googleClassroom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'classroom' => 'setClassroom',
        'assignment' => 'setAssignment',
        'creator' => 'setCreator',
        'creationDate' => 'setCreationDate',
        'attachments' => 'setAttachments',
        'submissionDate' => 'setSubmissionDate',
        'studentComment' => 'setStudentComment',
        'returnDate' => 'setReturnDate',
        'returnFeedback' => 'setReturnFeedback',
        'returnCreator' => 'setReturnCreator',
        'googleClassroom' => 'setGoogleClassroom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'classroom' => 'getClassroom',
        'assignment' => 'getAssignment',
        'creator' => 'getCreator',
        'creationDate' => 'getCreationDate',
        'attachments' => 'getAttachments',
        'submissionDate' => 'getSubmissionDate',
        'studentComment' => 'getStudentComment',
        'returnDate' => 'getReturnDate',
        'returnFeedback' => 'getReturnFeedback',
        'returnCreator' => 'getReturnCreator',
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
        $this->container['classroom'] = isset($data['classroom']) ? $data['classroom'] : null;
        $this->container['assignment'] = isset($data['assignment']) ? $data['assignment'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['submissionDate'] = isset($data['submissionDate']) ? $data['submissionDate'] : null;
        $this->container['studentComment'] = isset($data['studentComment']) ? $data['studentComment'] : null;
        $this->container['returnDate'] = isset($data['returnDate']) ? $data['returnDate'] : null;
        $this->container['returnFeedback'] = isset($data['returnFeedback']) ? $data['returnFeedback'] : null;
        $this->container['returnCreator'] = isset($data['returnCreator']) ? $data['returnCreator'] : null;
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
     * @param string $id Unique identifier of the submission
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $classroom Unique identifier of the classroom where the assignment was posted
     *
     * @return $this
     */
    public function setClassroom($classroom)
    {
        $this->container['classroom'] = $classroom;

        return $this;
    }

    /**
     * Gets assignment
     *
     * @return string
     */
    public function getAssignment()
    {
        return $this->container['assignment'];
    }

    /**
     * Sets assignment
     *
     * @param string $assignment Unique identifier of the assignment
     *
     * @return $this
     */
    public function setAssignment($assignment)
    {
        $this->container['assignment'] = $assignment;

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
     * @param string $creator The User identifier of the student who created the submission
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
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string $creationDate The date when the submission was created
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

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
     * Gets submissionDate
     *
     * @return string
     */
    public function getSubmissionDate()
    {
        return $this->container['submissionDate'];
    }

    /**
     * Sets submissionDate
     *
     * @param string $submissionDate The date when the student submitted his work
     *
     * @return $this
     */
    public function setSubmissionDate($submissionDate)
    {
        $this->container['submissionDate'] = $submissionDate;

        return $this;
    }

    /**
     * Gets studentComment
     *
     * @return string
     */
    public function getStudentComment()
    {
        return $this->container['studentComment'];
    }

    /**
     * Sets studentComment
     *
     * @param string $studentComment An optionnal comment sent by the student when submitting his work
     *
     * @return $this
     */
    public function setStudentComment($studentComment)
    {
        $this->container['studentComment'] = $studentComment;

        return $this;
    }

    /**
     * Gets returnDate
     *
     * @return string
     */
    public function getReturnDate()
    {
        return $this->container['returnDate'];
    }

    /**
     * Sets returnDate
     *
     * @param string $returnDate The date when the teacher returned the work
     *
     * @return $this
     */
    public function setReturnDate($returnDate)
    {
        $this->container['returnDate'] = $returnDate;

        return $this;
    }

    /**
     * Gets returnFeedback
     *
     * @return string
     */
    public function getReturnFeedback()
    {
        return $this->container['returnFeedback'];
    }

    /**
     * Sets returnFeedback
     *
     * @param string $returnFeedback The feedback associated with the return
     *
     * @return $this
     */
    public function setReturnFeedback($returnFeedback)
    {
        $this->container['returnFeedback'] = $returnFeedback;

        return $this;
    }

    /**
     * Gets returnCreator
     *
     * @return string
     */
    public function getReturnCreator()
    {
        return $this->container['returnCreator'];
    }

    /**
     * Sets returnCreator
     *
     * @param string $returnCreator The User unique identifier of the teacher who returned the submission
     *
     * @return $this
     */
    public function setReturnCreator($returnCreator)
    {
        $this->container['returnCreator'] = $returnCreator;

        return $this;
    }

    /**
     * Gets googleClassroom
     *
     * @return \Flat\APIClient\Model\GoogleClassroomSubmission
     */
    public function getGoogleClassroom()
    {
        return $this->container['googleClassroom'];
    }

    /**
     * Sets googleClassroom
     *
     * @param \Flat\APIClient\Model\GoogleClassroomSubmission $googleClassroom googleClassroom
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


