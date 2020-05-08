<?php
/**
 * InlineResponse2006Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API PLATFORM.IO
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineResponse2006Data Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2006Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_6_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'name' => 'string',
        'user_id' => 'float',
        'active' => 'float',
        'image_attachment' => 'string',
        'image_attachment_logo' => 'string',
        'headline' => 'string',
        'description' => 'string',
        'destination_url' => 'string',
        'macros_custom_data' => 'string',
        'username' => 'string',
        'approvals' => '\OpenAPI\Client\Model\InlineResponse2005Approvals[]',
        'created' => 'int',
        'updated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'user_id' => null,
        'active' => null,
        'image_attachment' => null,
        'image_attachment_logo' => null,
        'headline' => null,
        'description' => null,
        'destination_url' => null,
        'macros_custom_data' => null,
        'username' => null,
        'approvals' => null,
        'created' => null,
        'updated' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'user_id' => 'user_id',
        'active' => 'active',
        'image_attachment' => 'image_attachment',
        'image_attachment_logo' => 'image_attachment_logo',
        'headline' => 'headline',
        'description' => 'description',
        'destination_url' => 'destination_url',
        'macros_custom_data' => 'macros_custom_data',
        'username' => 'username',
        'approvals' => 'approvals',
        'created' => 'created',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'user_id' => 'setUserId',
        'active' => 'setActive',
        'image_attachment' => 'setImageAttachment',
        'image_attachment_logo' => 'setImageAttachmentLogo',
        'headline' => 'setHeadline',
        'description' => 'setDescription',
        'destination_url' => 'setDestinationUrl',
        'macros_custom_data' => 'setMacrosCustomData',
        'username' => 'setUsername',
        'approvals' => 'setApprovals',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'user_id' => 'getUserId',
        'active' => 'getActive',
        'image_attachment' => 'getImageAttachment',
        'image_attachment_logo' => 'getImageAttachmentLogo',
        'headline' => 'getHeadline',
        'description' => 'getDescription',
        'destination_url' => 'getDestinationUrl',
        'macros_custom_data' => 'getMacrosCustomData',
        'username' => 'getUsername',
        'approvals' => 'getApprovals',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
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
        return self::$openAPIModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['image_attachment'] = isset($data['image_attachment']) ? $data['image_attachment'] : null;
        $this->container['image_attachment_logo'] = isset($data['image_attachment_logo']) ? $data['image_attachment_logo'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destination_url'] = isset($data['destination_url']) ? $data['destination_url'] : null;
        $this->container['macros_custom_data'] = isset($data['macros_custom_data']) ? $data['macros_custom_data'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['approvals'] = isset($data['approvals']) ? $data['approvals'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['macros_custom_data']) && (mb_strlen($this->container['macros_custom_data']) > 500)) {
            $invalidProperties[] = "invalid value for 'macros_custom_data', the character length must be smaller than or equal to 500.";
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id Creative ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Creative Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float|null $user_id User ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets active
     *
     * @return float|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param float|null $active Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter `statuses` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets image_attachment
     *
     * @return string|null
     */
    public function getImageAttachment()
    {
        return $this->container['image_attachment'];
    }

    /**
     * Sets image_attachment
     *
     * @param string|null $image_attachment Image to upload. Only '.png, .jpg, .jpeg' is allowed.
     *
     * @return $this
     */
    public function setImageAttachment($image_attachment)
    {
        $this->container['image_attachment'] = $image_attachment;

        return $this;
    }

    /**
     * Gets image_attachment_logo
     *
     * @return string|null
     */
    public function getImageAttachmentLogo()
    {
        return $this->container['image_attachment_logo'];
    }

    /**
     * Sets image_attachment_logo
     *
     * @param string|null $image_attachment_logo Logo Image to upload. Only '.png, .jpg, .jpeg' is allowed.
     *
     * @return $this
     */
    public function setImageAttachmentLogo($image_attachment_logo)
    {
        $this->container['image_attachment_logo'] = $image_attachment_logo;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline Headline.
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination_url
     *
     * @return string|null
     */
    public function getDestinationUrl()
    {
        return $this->container['destination_url'];
    }

    /**
     * Sets destination_url
     *
     * @param string|null $destination_url Click-through URL. For example http://example.com.
     *
     * @return $this
     */
    public function setDestinationUrl($destination_url)
    {
        $this->container['destination_url'] = $destination_url;

        return $this;
    }

    /**
     * Gets macros_custom_data
     *
     * @return string|null
     */
    public function getMacrosCustomData()
    {
        return $this->container['macros_custom_data'];
    }

    /**
     * Sets macros_custom_data
     *
     * @param string|null $macros_custom_data You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro.
     *
     * @return $this
     */
    public function setMacrosCustomData($macros_custom_data)
    {
        if (!is_null($macros_custom_data) && (mb_strlen($macros_custom_data) > 500)) {
            throw new \InvalidArgumentException('invalid length for $macros_custom_data when calling InlineResponse2006Data., must be smaller than or equal to 500.');
        }

        $this->container['macros_custom_data'] = $macros_custom_data;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username User name
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets approvals
     *
     * @return \OpenAPI\Client\Model\InlineResponse2005Approvals[]|null
     */
    public function getApprovals()
    {
        return $this->container['approvals'];
    }

    /**
     * Sets approvals
     *
     * @param \OpenAPI\Client\Model\InlineResponse2005Approvals[]|null $approvals approvals
     *
     * @return $this
     */
    public function setApprovals($approvals)
    {
        $this->container['approvals'] = $approvals;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int|null $created Created timestamp
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int|null $updated Updated timestamp
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


