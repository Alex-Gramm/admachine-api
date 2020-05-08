<?php
/**
 * EditCreativeVideo3pas
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
 * EditCreativeVideo3pas Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EditCreativeVideo3pas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'editCreative_Video_3pas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'active' => 'float',
        'macros_custom_data' => 'string',
        'video_api_framework' => 'float',
        'vast_type' => 'float',
        'html' => 'string',
        'secure_type' => 'float',
        'video_duration' => 'float',
        'video_mime' => 'string',
        'video_clickthrough' => 'string',
        'iab_attr' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'active' => null,
        'macros_custom_data' => null,
        'video_api_framework' => null,
        'vast_type' => null,
        'html' => null,
        'secure_type' => null,
        'video_duration' => null,
        'video_mime' => null,
        'video_clickthrough' => null,
        'iab_attr' => null
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
        'name' => 'name',
        'active' => 'active',
        'macros_custom_data' => 'macros_custom_data',
        'video_api_framework' => 'video_api_framework',
        'vast_type' => 'vast_type',
        'html' => 'html',
        'secure_type' => 'secure_type',
        'video_duration' => 'video_duration',
        'video_mime' => 'video_mime',
        'video_clickthrough' => 'video_clickthrough',
        'iab_attr' => 'iab_attr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'active' => 'setActive',
        'macros_custom_data' => 'setMacrosCustomData',
        'video_api_framework' => 'setVideoApiFramework',
        'vast_type' => 'setVastType',
        'html' => 'setHtml',
        'secure_type' => 'setSecureType',
        'video_duration' => 'setVideoDuration',
        'video_mime' => 'setVideoMime',
        'video_clickthrough' => 'setVideoClickthrough',
        'iab_attr' => 'setIabAttr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'active' => 'getActive',
        'macros_custom_data' => 'getMacrosCustomData',
        'video_api_framework' => 'getVideoApiFramework',
        'vast_type' => 'getVastType',
        'html' => 'getHtml',
        'secure_type' => 'getSecureType',
        'video_duration' => 'getVideoDuration',
        'video_mime' => 'getVideoMime',
        'video_clickthrough' => 'getVideoClickthrough',
        'iab_attr' => 'getIabAttr'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['macros_custom_data'] = isset($data['macros_custom_data']) ? $data['macros_custom_data'] : null;
        $this->container['video_api_framework'] = isset($data['video_api_framework']) ? $data['video_api_framework'] : null;
        $this->container['vast_type'] = isset($data['vast_type']) ? $data['vast_type'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['secure_type'] = isset($data['secure_type']) ? $data['secure_type'] : null;
        $this->container['video_duration'] = isset($data['video_duration']) ? $data['video_duration'] : null;
        $this->container['video_mime'] = isset($data['video_mime']) ? $data['video_mime'] : null;
        $this->container['video_clickthrough'] = isset($data['video_clickthrough']) ? $data['video_clickthrough'] : null;
        $this->container['iab_attr'] = isset($data['iab_attr']) ? $data['iab_attr'] : null;
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
            throw new \InvalidArgumentException('invalid length for $macros_custom_data when calling EditCreativeVideo3pas., must be smaller than or equal to 500.');
        }

        $this->container['macros_custom_data'] = $macros_custom_data;

        return $this;
    }

    /**
     * Gets video_api_framework
     *
     * @return float|null
     */
    public function getVideoApiFramework()
    {
        return $this->container['video_api_framework'];
    }

    /**
     * Sets video_api_framework
     *
     * @param float|null $video_api_framework API Framework.
     *
     * @return $this
     */
    public function setVideoApiFramework($video_api_framework)
    {
        $this->container['video_api_framework'] = $video_api_framework;

        return $this;
    }

    /**
     * Gets vast_type
     *
     * @return float|null
     */
    public function getVastType()
    {
        return $this->container['vast_type'];
    }

    /**
     * Sets vast_type
     *
     * @param float|null $vast_type 0 - VAST XML, 1 - VAST Wrapper
     *
     * @return $this
     */
    public function setVastType($vast_type)
    {
        $this->container['vast_type'] = $vast_type;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html Video Asset.
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets secure_type
     *
     * @return float|null
     */
    public function getSecureType()
    {
        return $this->container['secure_type'];
    }

    /**
     * Sets secure_type
     *
     * @param float|null $secure_type Security.
     *
     * @return $this
     */
    public function setSecureType($secure_type)
    {
        $this->container['secure_type'] = $secure_type;

        return $this;
    }

    /**
     * Gets video_duration
     *
     * @return float|null
     */
    public function getVideoDuration()
    {
        return $this->container['video_duration'];
    }

    /**
     * Sets video_duration
     *
     * @param float|null $video_duration The duration of the video in seconds.
     *
     * @return $this
     */
    public function setVideoDuration($video_duration)
    {
        $this->container['video_duration'] = $video_duration;

        return $this;
    }

    /**
     * Gets video_mime
     *
     * @return string|null
     */
    public function getVideoMime()
    {
        return $this->container['video_mime'];
    }

    /**
     * Sets video_mime
     *
     * @param string|null $video_mime MIME type.
     *
     * @return $this
     */
    public function setVideoMime($video_mime)
    {
        $this->container['video_mime'] = $video_mime;

        return $this;
    }

    /**
     * Gets video_clickthrough
     *
     * @return string|null
     */
    public function getVideoClickthrough()
    {
        return $this->container['video_clickthrough'];
    }

    /**
     * Sets video_clickthrough
     *
     * @param string|null $video_clickthrough Video Clickthrough
     *
     * @return $this
     */
    public function setVideoClickthrough($video_clickthrough)
    {
        $this->container['video_clickthrough'] = $video_clickthrough;

        return $this;
    }

    /**
     * Gets iab_attr
     *
     * @return float[]|null
     */
    public function getIabAttr()
    {
        return $this->container['iab_attr'];
    }

    /**
     * Sets iab_attr
     *
     * @param float[]|null $iab_attr iab_attr
     *
     * @return $this
     */
    public function setIabAttr($iab_attr)
    {
        $this->container['iab_attr'] = $iab_attr;

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


