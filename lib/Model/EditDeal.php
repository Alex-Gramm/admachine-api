<?php
/**
 * EditDeal
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
 * EditDeal Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EditDeal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'editDeal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'active' => 'float',
        'publisher_id' => 'float',
        'start_immediately' => 'float',
        'start_date' => '\DateTime',
        'is_no_end_date' => 'float',
        'end_date' => '\DateTime',
        'deal_id' => 'float',
        'bid' => 'float',
        'bid_type' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'active' => null,
        'publisher_id' => null,
        'start_immediately' => null,
        'start_date' => 'date',
        'is_no_end_date' => null,
        'end_date' => 'date',
        'deal_id' => null,
        'bid' => null,
        'bid_type' => null
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
        'publisher_id' => 'publisher_id',
        'start_immediately' => 'start_immediately',
        'start_date' => 'start_date',
        'is_no_end_date' => 'is_no_end_date',
        'end_date' => 'end_date',
        'deal_id' => 'deal_id',
        'bid' => 'bid',
        'bid_type' => 'bid_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'active' => 'setActive',
        'publisher_id' => 'setPublisherId',
        'start_immediately' => 'setStartImmediately',
        'start_date' => 'setStartDate',
        'is_no_end_date' => 'setIsNoEndDate',
        'end_date' => 'setEndDate',
        'deal_id' => 'setDealId',
        'bid' => 'setBid',
        'bid_type' => 'setBidType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'active' => 'getActive',
        'publisher_id' => 'getPublisherId',
        'start_immediately' => 'getStartImmediately',
        'start_date' => 'getStartDate',
        'is_no_end_date' => 'getIsNoEndDate',
        'end_date' => 'getEndDate',
        'deal_id' => 'getDealId',
        'bid' => 'getBid',
        'bid_type' => 'getBidType'
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
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['start_immediately'] = isset($data['start_immediately']) ? $data['start_immediately'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['is_no_end_date'] = isset($data['is_no_end_date']) ? $data['is_no_end_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['deal_id'] = isset($data['deal_id']) ? $data['deal_id'] : null;
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['bid_type'] = isset($data['bid_type']) ? $data['bid_type'] : null;
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
     * @param string|null $name Name Deal.
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
     * @param float|null $active Status. 1 - Active, 0 - Pause. One of the ID values of parameter `statuses` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets publisher_id
     *
     * @return float|null
     */
    public function getPublisherId()
    {
        return $this->container['publisher_id'];
    }

    /**
     * Sets publisher_id
     *
     * @param float|null $publisher_id Publisher ID.
     *
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

        return $this;
    }

    /**
     * Gets start_immediately
     *
     * @return float|null
     */
    public function getStartImmediately()
    {
        return $this->container['start_immediately'];
    }

    /**
     * Sets start_immediately
     *
     * @param float|null $start_immediately Start Immediately. 1 - Yes, 0 - No.
     *
     * @return $this
     */
    public function setStartImmediately($start_immediately)
    {
        $this->container['start_immediately'] = $start_immediately;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date If start_immediately = 0 - Required. Start Date.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets is_no_end_date
     *
     * @return float|null
     */
    public function getIsNoEndDate()
    {
        return $this->container['is_no_end_date'];
    }

    /**
     * Sets is_no_end_date
     *
     * @param float|null $is_no_end_date Don't Used End Date. 1 - Don't use, 0 - Use.
     *
     * @return $this
     */
    public function setIsNoEndDate($is_no_end_date)
    {
        $this->container['is_no_end_date'] = $is_no_end_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date If is_no_end_date = 0 - Required. End Date.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return float|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param float|null $deal_id Deal ID
     *
     * @return $this
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return float|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param float|null $bid Bid Type.
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets bid_type
     *
     * @return float|null
     */
    public function getBidType()
    {
        return $this->container['bid_type'];
    }

    /**
     * Sets bid_type
     *
     * @param float|null $bid_type Bid Type. One of the ID values of parameter `bid_type` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setBidType($bid_type)
    {
        $this->container['bid_type'] = $bid_type;

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


