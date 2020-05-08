<?php
/**
 * EditDsp
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
 * EditDsp Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EditDsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'editDsp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'int',
        'name' => 'string',
        'ui_name' => 'string',
        'test_mode' => 'int',
        'supply_types' => 'int[]',
        'max_response_time' => 'int',
        'max_qps' => 'int',
        'url_request' => 'string',
        'user_sync_url_options' => '\OpenAPI\Client\Model\NewDspUserSyncUrlOptions',
        'dsp_users_sync_url' => 'string',
        'exchange' => 'bool',
        'datacenter' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'status' => null,
        'name' => null,
        'ui_name' => null,
        'test_mode' => null,
        'supply_types' => null,
        'max_response_time' => null,
        'max_qps' => null,
        'url_request' => null,
        'user_sync_url_options' => null,
        'dsp_users_sync_url' => null,
        'exchange' => null,
        'datacenter' => null
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
        'status' => 'status',
        'name' => 'name',
        'ui_name' => 'ui_name',
        'test_mode' => 'test_mode',
        'supply_types' => 'supply_types',
        'max_response_time' => 'max_response_time',
        'max_qps' => 'max_qps',
        'url_request' => 'url_request',
        'user_sync_url_options' => 'user_sync_url_options',
        'dsp_users_sync_url' => 'dsp_users_sync_url',
        'exchange' => 'exchange',
        'datacenter' => 'datacenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'name' => 'setName',
        'ui_name' => 'setUiName',
        'test_mode' => 'setTestMode',
        'supply_types' => 'setSupplyTypes',
        'max_response_time' => 'setMaxResponseTime',
        'max_qps' => 'setMaxQps',
        'url_request' => 'setUrlRequest',
        'user_sync_url_options' => 'setUserSyncUrlOptions',
        'dsp_users_sync_url' => 'setDspUsersSyncUrl',
        'exchange' => 'setExchange',
        'datacenter' => 'setDatacenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'name' => 'getName',
        'ui_name' => 'getUiName',
        'test_mode' => 'getTestMode',
        'supply_types' => 'getSupplyTypes',
        'max_response_time' => 'getMaxResponseTime',
        'max_qps' => 'getMaxQps',
        'url_request' => 'getUrlRequest',
        'user_sync_url_options' => 'getUserSyncUrlOptions',
        'dsp_users_sync_url' => 'getDspUsersSyncUrl',
        'exchange' => 'getExchange',
        'datacenter' => 'getDatacenter'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ui_name'] = isset($data['ui_name']) ? $data['ui_name'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['supply_types'] = isset($data['supply_types']) ? $data['supply_types'] : null;
        $this->container['max_response_time'] = isset($data['max_response_time']) ? $data['max_response_time'] : null;
        $this->container['max_qps'] = isset($data['max_qps']) ? $data['max_qps'] : null;
        $this->container['url_request'] = isset($data['url_request']) ? $data['url_request'] : null;
        $this->container['user_sync_url_options'] = isset($data['user_sync_url_options']) ? $data['user_sync_url_options'] : null;
        $this->container['dsp_users_sync_url'] = isset($data['dsp_users_sync_url']) ? $data['dsp_users_sync_url'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['ui_name']) && (mb_strlen($this->container['ui_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'ui_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['ui_name']) && (mb_strlen($this->container['ui_name']) < 3)) {
            $invalidProperties[] = "invalid value for 'ui_name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['max_response_time']) && ($this->container['max_response_time'] > 250)) {
            $invalidProperties[] = "invalid value for 'max_response_time', must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['max_response_time']) && ($this->container['max_response_time'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_response_time', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_qps']) && ($this->container['max_qps'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_qps', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['url_request']) && (mb_strlen($this->container['url_request']) > 255)) {
            $invalidProperties[] = "invalid value for 'url_request', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['dsp_users_sync_url']) && (mb_strlen($this->container['dsp_users_sync_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'dsp_users_sync_url', the character length must be smaller than or equal to 500.";
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
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter `statuses` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $name RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EditDsp., must be smaller than or equal to 63.');
        }
        if (!is_null($name) && (mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EditDsp., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ui_name
     *
     * @return string|null
     */
    public function getUiName()
    {
        return $this->container['ui_name'];
    }

    /**
     * Sets ui_name
     *
     * @param string|null $ui_name RTB Name for interface
     *
     * @return $this
     */
    public function setUiName($ui_name)
    {
        if (!is_null($ui_name) && (mb_strlen($ui_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $ui_name when calling EditDsp., must be smaller than or equal to 255.');
        }
        if (!is_null($ui_name) && (mb_strlen($ui_name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $ui_name when calling EditDsp., must be bigger than or equal to 3.');
        }

        $this->container['ui_name'] = $ui_name;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return int|null
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param int|null $test_mode Test Mode. One of the ID values of parameter `test_mode` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets supply_types
     *
     * @return int[]|null
     */
    public function getSupplyTypes()
    {
        return $this->container['supply_types'];
    }

    /**
     * Sets supply_types
     *
     * @param int[]|null $supply_types Supply Types. One or more of the ID values of parameter `channels` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setSupplyTypes($supply_types)
    {
        $this->container['supply_types'] = $supply_types;

        return $this;
    }

    /**
     * Gets max_response_time
     *
     * @return int|null
     */
    public function getMaxResponseTime()
    {
        return $this->container['max_response_time'];
    }

    /**
     * Sets max_response_time
     *
     * @param int|null $max_response_time Max response time
     *
     * @return $this
     */
    public function setMaxResponseTime($max_response_time)
    {

        if (!is_null($max_response_time) && ($max_response_time > 250)) {
            throw new \InvalidArgumentException('invalid value for $max_response_time when calling EditDsp., must be smaller than or equal to 250.');
        }

        $this->container['max_response_time'] = $max_response_time;

        return $this;
    }

    /**
     * Gets max_qps
     *
     * @return int|null
     */
    public function getMaxQps()
    {
        return $this->container['max_qps'];
    }

    /**
     * Sets max_qps
     *
     * @param int|null $max_qps Max queries per second
     *
     * @return $this
     */
    public function setMaxQps($max_qps)
    {


        $this->container['max_qps'] = $max_qps;

        return $this;
    }

    /**
     * Gets url_request
     *
     * @return string|null
     */
    public function getUrlRequest()
    {
        return $this->container['url_request'];
    }

    /**
     * Sets url_request
     *
     * @param string|null $url_request URL request
     *
     * @return $this
     */
    public function setUrlRequest($url_request)
    {
        if (!is_null($url_request) && (mb_strlen($url_request) > 255)) {
            throw new \InvalidArgumentException('invalid length for $url_request when calling EditDsp., must be smaller than or equal to 255.');
        }

        $this->container['url_request'] = $url_request;

        return $this;
    }

    /**
     * Gets user_sync_url_options
     *
     * @return \OpenAPI\Client\Model\NewDspUserSyncUrlOptions|null
     */
    public function getUserSyncUrlOptions()
    {
        return $this->container['user_sync_url_options'];
    }

    /**
     * Sets user_sync_url_options
     *
     * @param \OpenAPI\Client\Model\NewDspUserSyncUrlOptions|null $user_sync_url_options user_sync_url_options
     *
     * @return $this
     */
    public function setUserSyncUrlOptions($user_sync_url_options)
    {
        $this->container['user_sync_url_options'] = $user_sync_url_options;

        return $this;
    }

    /**
     * Gets dsp_users_sync_url
     *
     * @return string|null
     */
    public function getDspUsersSyncUrl()
    {
        return $this->container['dsp_users_sync_url'];
    }

    /**
     * Sets dsp_users_sync_url
     *
     * @param string|null $dsp_users_sync_url DSP users sync URL
     *
     * @return $this
     */
    public function setDspUsersSyncUrl($dsp_users_sync_url)
    {
        if (!is_null($dsp_users_sync_url) && (mb_strlen($dsp_users_sync_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $dsp_users_sync_url when calling EditDsp., must be smaller than or equal to 500.');
        }

        $this->container['dsp_users_sync_url'] = $dsp_users_sync_url;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return bool|null
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param bool|null $exchange Exchange
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets datacenter
     *
     * @return int|null
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     *
     * @param int|null $datacenter Datacenter. One of the ID values of parameter `datacenters` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

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


