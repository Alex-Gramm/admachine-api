<?php
/**
 * Ssp
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
 * Ssp Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Ssp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ssp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => 'int',
        'name' => 'string',
        'ui_name' => 'string',
        'test_mode' => 'int',
        'supply_types' => 'int[]',
        'max_response_time' => 'int',
        'associated_user_id' => 'int',
        'ssp_email' => 'string',
        'vendor_ids' => 'int[]',
        'impressions_counter_type' => 'int',
        'user_sync_url_options' => '\OpenAPI\Client\Model\SspUserSyncUrlOptions',
        'ssp_endpoint_url' => 'string',
        'ssp_users_sync_url' => 'string',
        'exchange' => 'bool',
        'ssp_click_macro' => '\OpenAPI\Client\Model\SspSspClickMacro',
        'blacklists' => 'int',
        'integration_type' => 'int',
        'forensiq' => '\OpenAPI\Client\Model\SspForensiq',
        'forbid' => '\OpenAPI\Client\Model\SspForbid',
        'subdomain_id' => 'int',
        'subdomain_name' => 'string',
        'report_url' => 'string',
        'ssp_group' => '\OpenAPI\Client\Model\InlineResponse2005Vendor',
        'datacenter' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'ui_name' => null,
        'test_mode' => null,
        'supply_types' => null,
        'max_response_time' => null,
        'associated_user_id' => null,
        'ssp_email' => null,
        'vendor_ids' => null,
        'impressions_counter_type' => null,
        'user_sync_url_options' => null,
        'ssp_endpoint_url' => null,
        'ssp_users_sync_url' => null,
        'exchange' => null,
        'ssp_click_macro' => null,
        'blacklists' => null,
        'integration_type' => null,
        'forensiq' => null,
        'forbid' => null,
        'subdomain_id' => null,
        'subdomain_name' => null,
        'report_url' => null,
        'ssp_group' => null,
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
        'id' => 'id',
        'status' => 'status',
        'name' => 'name',
        'ui_name' => 'ui_name',
        'test_mode' => 'test_mode',
        'supply_types' => 'supply_types',
        'max_response_time' => 'max_response_time',
        'associated_user_id' => 'associated_user_id',
        'ssp_email' => 'ssp_email',
        'vendor_ids' => 'vendor_ids',
        'impressions_counter_type' => 'impressions_counter_type',
        'user_sync_url_options' => 'user_sync_url_options',
        'ssp_endpoint_url' => 'ssp_endpoint_url',
        'ssp_users_sync_url' => 'ssp_users_sync_url',
        'exchange' => 'exchange',
        'ssp_click_macro' => 'ssp_click_macro',
        'blacklists' => 'blacklists',
        'integration_type' => 'integration_type',
        'forensiq' => 'forensiq',
        'forbid' => 'forbid',
        'subdomain_id' => 'subdomain_id',
        'subdomain_name' => 'subdomain_name',
        'report_url' => 'report_url',
        'ssp_group' => 'ssp_group',
        'datacenter' => 'datacenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'name' => 'setName',
        'ui_name' => 'setUiName',
        'test_mode' => 'setTestMode',
        'supply_types' => 'setSupplyTypes',
        'max_response_time' => 'setMaxResponseTime',
        'associated_user_id' => 'setAssociatedUserId',
        'ssp_email' => 'setSspEmail',
        'vendor_ids' => 'setVendorIds',
        'impressions_counter_type' => 'setImpressionsCounterType',
        'user_sync_url_options' => 'setUserSyncUrlOptions',
        'ssp_endpoint_url' => 'setSspEndpointUrl',
        'ssp_users_sync_url' => 'setSspUsersSyncUrl',
        'exchange' => 'setExchange',
        'ssp_click_macro' => 'setSspClickMacro',
        'blacklists' => 'setBlacklists',
        'integration_type' => 'setIntegrationType',
        'forensiq' => 'setForensiq',
        'forbid' => 'setForbid',
        'subdomain_id' => 'setSubdomainId',
        'subdomain_name' => 'setSubdomainName',
        'report_url' => 'setReportUrl',
        'ssp_group' => 'setSspGroup',
        'datacenter' => 'setDatacenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'name' => 'getName',
        'ui_name' => 'getUiName',
        'test_mode' => 'getTestMode',
        'supply_types' => 'getSupplyTypes',
        'max_response_time' => 'getMaxResponseTime',
        'associated_user_id' => 'getAssociatedUserId',
        'ssp_email' => 'getSspEmail',
        'vendor_ids' => 'getVendorIds',
        'impressions_counter_type' => 'getImpressionsCounterType',
        'user_sync_url_options' => 'getUserSyncUrlOptions',
        'ssp_endpoint_url' => 'getSspEndpointUrl',
        'ssp_users_sync_url' => 'getSspUsersSyncUrl',
        'exchange' => 'getExchange',
        'ssp_click_macro' => 'getSspClickMacro',
        'blacklists' => 'getBlacklists',
        'integration_type' => 'getIntegrationType',
        'forensiq' => 'getForensiq',
        'forbid' => 'getForbid',
        'subdomain_id' => 'getSubdomainId',
        'subdomain_name' => 'getSubdomainName',
        'report_url' => 'getReportUrl',
        'ssp_group' => 'getSspGroup',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ui_name'] = isset($data['ui_name']) ? $data['ui_name'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['supply_types'] = isset($data['supply_types']) ? $data['supply_types'] : null;
        $this->container['max_response_time'] = isset($data['max_response_time']) ? $data['max_response_time'] : null;
        $this->container['associated_user_id'] = isset($data['associated_user_id']) ? $data['associated_user_id'] : null;
        $this->container['ssp_email'] = isset($data['ssp_email']) ? $data['ssp_email'] : null;
        $this->container['vendor_ids'] = isset($data['vendor_ids']) ? $data['vendor_ids'] : null;
        $this->container['impressions_counter_type'] = isset($data['impressions_counter_type']) ? $data['impressions_counter_type'] : null;
        $this->container['user_sync_url_options'] = isset($data['user_sync_url_options']) ? $data['user_sync_url_options'] : null;
        $this->container['ssp_endpoint_url'] = isset($data['ssp_endpoint_url']) ? $data['ssp_endpoint_url'] : null;
        $this->container['ssp_users_sync_url'] = isset($data['ssp_users_sync_url']) ? $data['ssp_users_sync_url'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['ssp_click_macro'] = isset($data['ssp_click_macro']) ? $data['ssp_click_macro'] : null;
        $this->container['blacklists'] = isset($data['blacklists']) ? $data['blacklists'] : null;
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['forensiq'] = isset($data['forensiq']) ? $data['forensiq'] : null;
        $this->container['forbid'] = isset($data['forbid']) ? $data['forbid'] : null;
        $this->container['subdomain_id'] = isset($data['subdomain_id']) ? $data['subdomain_id'] : null;
        $this->container['subdomain_name'] = isset($data['subdomain_name']) ? $data['subdomain_name'] : null;
        $this->container['report_url'] = isset($data['report_url']) ? $data['report_url'] : null;
        $this->container['ssp_group'] = isset($data['ssp_group']) ? $data['ssp_group'] : null;
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

        if (!is_null($this->container['ssp_email']) && (mb_strlen($this->container['ssp_email']) > 255)) {
            $invalidProperties[] = "invalid value for 'ssp_email', the character length must be smaller than or equal to 255.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id SSP ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $name when calling Ssp., must be smaller than or equal to 63.');
        }
        if (!is_null($name) && (mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Ssp., must be bigger than or equal to 3.');
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
            throw new \InvalidArgumentException('invalid length for $ui_name when calling Ssp., must be smaller than or equal to 255.');
        }
        if (!is_null($ui_name) && (mb_strlen($ui_name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $ui_name when calling Ssp., must be bigger than or equal to 3.');
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
            throw new \InvalidArgumentException('invalid value for $max_response_time when calling Ssp., must be smaller than or equal to 250.');
        }
        if (!is_null($max_response_time) && ($max_response_time < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_response_time when calling Ssp., must be bigger than or equal to 1.');
        }

        $this->container['max_response_time'] = $max_response_time;

        return $this;
    }

    /**
     * Gets associated_user_id
     *
     * @return int|null
     */
    public function getAssociatedUserId()
    {
        return $this->container['associated_user_id'];
    }

    /**
     * Sets associated_user_id
     *
     * @param int|null $associated_user_id Associated User ID
     *
     * @return $this
     */
    public function setAssociatedUserId($associated_user_id)
    {
        $this->container['associated_user_id'] = $associated_user_id;

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
            throw new \InvalidArgumentException('invalid length for $ssp_email when calling Ssp., must be smaller than or equal to 255.');
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
     * @return int|null
     */
    public function getImpressionsCounterType()
    {
        return $this->container['impressions_counter_type'];
    }

    /**
     * Sets impressions_counter_type
     *
     * @param int|null $impressions_counter_type Impressions counter type. One of the ID values of parameter `impressions_counter_type` in /constants is added to this parameter
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
     * Gets ssp_endpoint_url
     *
     * @return string|null
     */
    public function getSspEndpointUrl()
    {
        return $this->container['ssp_endpoint_url'];
    }

    /**
     * Sets ssp_endpoint_url
     *
     * @param string|null $ssp_endpoint_url SSP endpoint URL
     *
     * @return $this
     */
    public function setSspEndpointUrl($ssp_endpoint_url)
    {
        $this->container['ssp_endpoint_url'] = $ssp_endpoint_url;

        return $this;
    }

    /**
     * Gets ssp_users_sync_url
     *
     * @return string|null
     */
    public function getSspUsersSyncUrl()
    {
        return $this->container['ssp_users_sync_url'];
    }

    /**
     * Sets ssp_users_sync_url
     *
     * @param string|null $ssp_users_sync_url SSP users sync URL
     *
     * @return $this
     */
    public function setSspUsersSyncUrl($ssp_users_sync_url)
    {
        $this->container['ssp_users_sync_url'] = $ssp_users_sync_url;

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
     * Gets subdomain_name
     *
     * @return string|null
     */
    public function getSubdomainName()
    {
        return $this->container['subdomain_name'];
    }

    /**
     * Sets subdomain_name
     *
     * @param string|null $subdomain_name Subdomain Name. **Only for Root**
     *
     * @return $this
     */
    public function setSubdomainName($subdomain_name)
    {
        $this->container['subdomain_name'] = $subdomain_name;

        return $this;
    }

    /**
     * Gets report_url
     *
     * @return string|null
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     *
     * @param string|null $report_url SSP report URL (appears when requested for single SSP). **Only For Root/Admins**
     *
     * @return $this
     */
    public function setReportUrl($report_url)
    {
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets ssp_group
     *
     * @return \OpenAPI\Client\Model\InlineResponse2005Vendor|null
     */
    public function getSspGroup()
    {
        return $this->container['ssp_group'];
    }

    /**
     * Sets ssp_group
     *
     * @param \OpenAPI\Client\Model\InlineResponse2005Vendor|null $ssp_group ssp_group
     *
     * @return $this
     */
    public function setSspGroup($ssp_group)
    {
        $this->container['ssp_group'] = $ssp_group;

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
     * @param int|null $datacenter Datacenter
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

