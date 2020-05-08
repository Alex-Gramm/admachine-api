<?php
/**
 * Resource
 *
 * PHP version 7.1
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
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * Resource Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Resource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Resource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'organizations' => '\OpenAPI\Client\Model\OrganizaionR[]',
        'agencies' => '\OpenAPI\Client\Model\AgencyR[]',
        'advertisers' => '\OpenAPI\Client\Model\AdvertiserR[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'organizations' => null,
        'agencies' => null,
        'advertisers' => null
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
        'organizations' => 'organizations',
        'agencies' => 'agencies',
        'advertisers' => 'advertisers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organizations' => 'setOrganizations',
        'agencies' => 'setAgencies',
        'advertisers' => 'setAdvertisers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organizations' => 'getOrganizations',
        'agencies' => 'getAgencies',
        'advertisers' => 'getAdvertisers'
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
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
        $this->container['agencies'] = isset($data['agencies']) ? $data['agencies'] : null;
        $this->container['advertisers'] = isset($data['advertisers']) ? $data['advertisers'] : null;
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
     * Gets organizations
     *
     * @return \OpenAPI\Client\Model\OrganizaionR[]|null
     */
    public function getOrganizations()
    {
        return $this->container['organizations'];
    }

    /**
     * Sets organizations
     *
     * @param \OpenAPI\Client\Model\OrganizaionR[]|null $organizations organizations
     *
     * @return $this
     */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;

        return $this;
    }

    /**
     * Gets agencies
     *
     * @return \OpenAPI\Client\Model\AgencyR[]|null
     */
    public function getAgencies()
    {
        return $this->container['agencies'];
    }

    /**
     * Sets agencies
     *
     * @param \OpenAPI\Client\Model\AgencyR[]|null $agencies agencies
     *
     * @return $this
     */
    public function setAgencies($agencies)
    {
        $this->container['agencies'] = $agencies;

        return $this;
    }

    /**
     * Gets advertisers
     *
     * @return \OpenAPI\Client\Model\AdvertiserR[]|null
     */
    public function getAdvertisers()
    {
        return $this->container['advertisers'];
    }

    /**
     * Sets advertisers
     *
     * @param \OpenAPI\Client\Model\AdvertiserR[]|null $advertisers advertisers
     *
     * @return $this
     */
    public function setAdvertisers($advertisers)
    {
        $this->container['advertisers'] = $advertisers;

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


