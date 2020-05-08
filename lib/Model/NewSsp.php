<?php
/**
 * NewSsp
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
 * NewSsp Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewSsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'newSsp';

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
        'ssp_email' => 'string',
        'vendor_ids' => 'int[]',
        'impressions_counter_type' => 'int',
        'user_sync_url_options' => '\OpenAPI\Client\Model\SspUserSyncUrlOptions',
        'exchange' => 'bool',
        'ssp_click_macro' => '\OpenAPI\Client\Model\SspSspClickMacro',
        'blacklists' => 'int',
        'integration_type' => 'int',
        'forensiq' => '\OpenAPI\Client\Model\SspForensiq',
        'forbid' => '\OpenAPI\Client\Model\SspForbid',
        'subdomain_id' => 'int',
        'group_id' => 'int',
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
        'ssp_email' => null,
        'vendor_ids' => null,
        'impressions_counter_type' => null,
        'user_sync_url_options' => null,
        'exchange' => null,
        'ssp_click_macro' => null,
        'blacklists' => null,
        'integration_type' => null,
        'forensiq' => null,
        'forbid' => null,
        'subdomain_id' => null,
        'group_id' => null,
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
        'ssp_email' => 'ssp_email',
        'vendor_ids' => 'vendor_ids',
        'impressions_counter_type' => 'impressions_counter_type',
        'user_sync_url_options' => 'user_sync_url_options',
        'exchange' => 'exchange',
        'ssp_click_macro' => 'ssp_click_macro',
        'blacklists' => 'blacklists',
        'integration_type' => 'integration_type',
        'forensiq' => 'forensiq',
        'forbid' => 'forbid',
        'subdomain_id' => 'subdomain_id',
        'group_id' => 'group_id',
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
        'ssp_email' => 'setSspEmail',
        'vendor_ids' => 'setVendorIds',
        'impressions_counter_type' => 'setImpressionsCounterType',
        'user_sync_url_options' => 'setUserSyncUrlOptions',
        'exchange' => 'setExchange',
        'ssp_click_macro' => 'setSspClickMacro',
        'blacklists' => 'setBlacklists',
        'integration_type' => 'setIntegrationType',
        'forensiq' => 'setForensiq',
        'forbid' => 'setForbid',
        'subdomain_id' => 'setSubdomainId',
        'group_id' => 'setGroupId',
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
        'ssp_email' => 'getSspEmail',
        'vendor_ids' => 'getVendorIds',
        'impressions_counter_type' => 'getImpressionsCounterType',
        'user_sync_url_options' => 'getUserSyncUrlOptions',
        'exchange' => 'getExchange',
        'ssp_click_macro' => 'getSspClickMacro',
        'blacklists' => 'getBlacklists',
        'integration_type' => 'getIntegrationType',
        'forensiq' => 'getForensiq',
        'forbid' => 'getForbid',
        'subdomain_id' => 'getSubdomainId',
        'group_id' => 'getGroupId',
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
        $this->container['ssp_email'] = isset($data['ssp_email']) ? $data['ssp_email'] : null;
        $this->container['vendor_ids'] = isset($data['vendor_ids']) ? $data['vendor_ids'] : null;
        $this->container['impressions_counter_type'] = isset($data['impressions_counter_type']) ? $data['impressions_counter_type'] : null;
        $this->container['user_sync_url_options'] = isset($data['user_sync_url_options']) ? $data['user_sync_url_options'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['ssp_click_macro'] = isset($data['ssp_click_macro']) ? $data['ssp_click_macro'] : null;
        $this->container['blacklists'] = isset($data['blacklists']) ? $data['blacklists'] : null;
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['forensiq'] = isset($data['forensiq']) ? $data['forensiq'] : null;
        $this->container['forbid'] = isset($data['forbid']) ? $data['forbid'] : null;
        $this->container['subdomain_id'] = isset($data['subdomain_id']) ? $data['subdomain_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 63)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
        }

        if ((mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['ui_name'] === null) {
            $invalidProperties[] = "'ui_name' can't be null";
        }
        if ((mb_strlen($this->container['ui_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'ui_name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['ui_name']) < 3)) {
            $invalidProperties[] = "invalid value for 'ui_name', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
        }
        if ($this->container['supply_types'] === null) {
            $invalidProperties[] = "'supply_types' can't be null";
        }
        if ($this->container['max_response_time'] === null) {
            $invalidProperties[] = "'max_response_time' can't be null";
        }
        if (($this->container['max_response_time'] > 250)) {
            $invalidProperties[] = "invalid value for 'max_response_time', must be smaller than or equal to 250.";
        }

        if (($this->container['max_response_time'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_response_time', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ssp_email']) && (mb_strlen($this->container['ssp_email']) > 255)) {
            $invalidProperties[] = "invalid value for 'ssp_email', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['impressions_counter_type'] === null) {
            $invalidProperties[] = "'impressions_counter_type' can't be null";
        }
        if ($this->container['datacenter'] === null) {
            $invalidProperties[] = "'datacenter' can't be null";
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
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter `statuses` in /constants is added to this parameter
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number)
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 63)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewSsp., must be smaller than or equal to 63.');
        }
        if ((mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewSsp., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ui_name
     *
     * @return string
     */
    public function getUiName()
    {
        return $this->container['ui_name'];
    }

    /**
     * Sets ui_name
     *
     * @param string $ui_name RTB Name for interface
     *
     * @return $this
     */
    public function setUiName($ui_name)
    {
        if ((mb_strlen($ui_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $ui_name when calling NewSsp., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($ui_name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $ui_name when calling NewSsp., must be bigger than or equal to 3.');
        }

        $this->container['ui_name'] = $ui_name;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return int
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param int $test_mode Test Mode. One of the ID values of parameter `test_mode` in /constants is added to this parameter
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
     * @return int[]
     */
    public function getSupplyTypes()
    {
        return $this->container['supply_types'];
    }

    /**
     * Sets supply_types
     *
     * @param int[] $supply_types Supply Types. One or more of the ID values of parameter `channels` in /constants is added to this parameter
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
     * @return int
     */
    public function getMaxResponseTime()
    {
        return $this->container['max_response_time'];
    }

    /**
     * Sets max_response_time
     *
     * @param int $max_response_time Max response time
     *
     * @return $this
     */
    public function setMaxResponseTime($max_response_time)
    {

        if (($max_response_time > 250)) {
            throw new \InvalidArgumentException('invalid value for $max_response_time when calling NewSsp., must be smaller than or equal to 250.');
        }
        if (($max_response_time < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_response_time when calling NewSsp., must be bigger than or equal to 1.');
        }

        $this->container['max_response_time'] = $max_response_time;

        return $this;
    }

    /**
     * Gets ssp_email
     *
     * @return string|null
     */
    public function getSspEmail()
    {
        return $this->container['ssp_email'];
    }

    /**
     * Sets ssp_email
     *
     * @param string|null $ssp_email SSP email
     *
     * @return $this
     */
    public function setSspEmail($ssp_email)
    {
        if (!is_null($ssp_email) && (mb_strlen($ssp_email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $ssp_email when calling NewSsp., must be smaller than or equal to 255.');
        }

        $this->container['ssp_email'] = $ssp_email;

        return $this;
    }

    /**
     * Gets vendor_ids
     *
     * @return int[]|null
     */
    public function getVendorIds()
    {
        return $this->container['vendor_ids'];
    }

    /**
     * Sets vendor_ids
     *
     * @param int[]|null $vendor_ids New implementation of required approval vendors. One or more vendor IDs given from response ssps/vendors
     *
     * @return $this
     */
    public function setVendorIds($vendor_ids)
    {
        $this->container['vendor_ids'] = $vendor_ids;

        return $this;
    }

    /**
     * Gets impressions_counter_type
     *
     * @return int
     */
    public function getImpressionsCounterType()
    {
        return $this->container['impressions_counter_type'];
    }

    /**
     * Sets impressions_counter_type
     *
     * @param int $impressions_counter_type Impressions counter type. One of the ID values of parameter `impressions_counter_type` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setImpressionsCounterType($impressions_counter_type)
    {
        $this->container['impressions_counter_type'] = $impressions_counter_type;

        return $this;
    }

    /**
     * Gets user_sync_url_options
     *
     * @return \OpenAPI\Client\Model\SspUserSyncUrlOptions|null
     */
    public function getUserSyncUrlOptions()
    {
        return $this->container['user_sync_url_options'];
    }

    /**
     * Sets user_sync_url_options
     *
     * @param \OpenAPI\Client\Model\SspUserSyncUrlOptions|null $user_sync_url_options user_sync_url_options
     *
     * @return $this
     */
    public function setUserSyncUrlOptions($user_sync_url_options)
    {
        $this->container['user_sync_url_options'] = $user_sync_url_options;

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
     * Gets ssp_click_macro
     *
     * @return \OpenAPI\Client\Model\SspSspClickMacro|null
     */
    public function getSspClickMacro()
    {
        return $this->container['ssp_click_macro'];
    }

    /**
     * Sets ssp_click_macro
     *
     * @param \OpenAPI\Client\Model\SspSspClickMacro|null $ssp_click_macro ssp_click_macro
     *
     * @return $this
     */
    public function setSspClickMacro($ssp_click_macro)
    {
        $this->container['ssp_click_macro'] = $ssp_click_macro;

        return $this;
    }

    /**
     * Gets blacklists
     *
     * @return int|null
     */
    public function getBlacklists()
    {
        return $this->container['blacklists'];
    }

    /**
     * Sets blacklists
     *
     * @param int|null $blacklists Blacklist ID
     *
     * @return $this
     */
    public function setBlacklists($blacklists)
    {
        $this->container['blacklists'] = $blacklists;

        return $this;
    }

    /**
     * Gets integration_type
     *
     * @return int|null
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param int|null $integration_type Integration type. One of the ID values of parameter `rtb_integration_types` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setIntegrationType($integration_type)
    {
        $this->container['integration_type'] = $integration_type;

        return $this;
    }

    /**
     * Gets forensiq
     *
     * @return \OpenAPI\Client\Model\SspForensiq|null
     */
    public function getForensiq()
    {
        return $this->container['forensiq'];
    }

    /**
     * Sets forensiq
     *
     * @param \OpenAPI\Client\Model\SspForensiq|null $forensiq forensiq
     *
     * @return $this
     */
    public function setForensiq($forensiq)
    {
        $this->container['forensiq'] = $forensiq;

        return $this;
    }

    /**
     * Gets forbid
     *
     * @return \OpenAPI\Client\Model\SspForbid|null
     */
    public function getForbid()
    {
        return $this->container['forbid'];
    }

    /**
     * Sets forbid
     *
     * @param \OpenAPI\Client\Model\SspForbid|null $forbid forbid
     *
     * @return $this
     */
    public function setForbid($forbid)
    {
        $this->container['forbid'] = $forbid;

        return $this;
    }

    /**
     * Gets subdomain_id
     *
     * @return int|null
     */
    public function getSubdomainId()
    {
        return $this->container['subdomain_id'];
    }

    /**
     * Sets subdomain_id
     *
     * @param int|null $subdomain_id Subdomain ID. **Only for Root**
     *
     * @return $this
     */
    public function setSubdomainId($subdomain_id)
    {
        $this->container['subdomain_id'] = $subdomain_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id Ssp group ID. **Only for Root**
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets datacenter
     *
     * @return int
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     *
     * @param int $datacenter Datacenter. Required. One of the ID values of parameter `datacenters` in /constants is added to this parameter
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


