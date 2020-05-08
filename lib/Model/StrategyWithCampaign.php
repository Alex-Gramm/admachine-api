<?php
/**
 * StrategyWithCampaign
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
 * StrategyWithCampaign Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StrategyWithCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Strategy_With_Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'name' => 'string',
        'active' => 'float',
        'channel' => 'float',
        'use_campaign_start_date' => 'float',
        'use_campaign_end_date' => 'float',
        'start_date_interface' => '\DateTime',
        'start_time_interface' => 'string',
        'end_date_interface' => '\DateTime',
        'end_time_interface' => 'string',
        'is_unlimited_budget' => 'float',
        'total_budget' => 'float',
        'max_bid' => 'float',
        'budget_pacing_type' => 'float',
        'local_budget' => 'float',
        'budget_period' => 'float',
        'frequency_caps' => '\OpenAPI\Client\Model\FrequencyCap[]',
        'impressions_cap_is_unlimited' => 'float',
        'impressions_cap' => 'float',
        'rtb_supply_type_open_or_private' => 'float',
        'inventory_types' => 'string',
        'any_ssp_is_allowed' => 'float',
        'any_rtb_deal_is_allowed' => 'float',
        'is_all_days_part' => 'float',
        'timezone_type' => 'int',
        'contextual_cpm' => 'float',
        'macros_custom_data' => 'string',
        'delivery_type' => 'int',
        'campaign' => '\OpenAPI\Client\Model\StrategyWithCampaignCampaign',
        'datacenter' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'active' => null,
        'channel' => null,
        'use_campaign_start_date' => null,
        'use_campaign_end_date' => null,
        'start_date_interface' => 'date',
        'start_time_interface' => null,
        'end_date_interface' => 'date',
        'end_time_interface' => null,
        'is_unlimited_budget' => null,
        'total_budget' => null,
        'max_bid' => null,
        'budget_pacing_type' => null,
        'local_budget' => null,
        'budget_period' => null,
        'frequency_caps' => null,
        'impressions_cap_is_unlimited' => null,
        'impressions_cap' => null,
        'rtb_supply_type_open_or_private' => null,
        'inventory_types' => null,
        'any_ssp_is_allowed' => null,
        'any_rtb_deal_is_allowed' => null,
        'is_all_days_part' => null,
        'timezone_type' => null,
        'contextual_cpm' => null,
        'macros_custom_data' => null,
        'delivery_type' => null,
        'campaign' => null,
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
        'name' => 'name',
        'active' => 'active',
        'channel' => 'channel',
        'use_campaign_start_date' => 'use_campaign_start_date',
        'use_campaign_end_date' => 'use_campaign_end_date',
        'start_date_interface' => 'start_date_interface',
        'start_time_interface' => 'start_time_interface',
        'end_date_interface' => 'end_date_interface',
        'end_time_interface' => 'end_time_interface',
        'is_unlimited_budget' => 'is_unlimited_budget',
        'total_budget' => 'total_budget',
        'max_bid' => 'max_bid',
        'budget_pacing_type' => 'budget_pacing_type',
        'local_budget' => 'local_budget',
        'budget_period' => 'budget_period',
        'frequency_caps' => 'frequency_caps',
        'impressions_cap_is_unlimited' => 'impressions_cap_is_unlimited',
        'impressions_cap' => 'impressions_cap',
        'rtb_supply_type_open_or_private' => 'rtb_supply_type_open_or_private',
        'inventory_types' => 'inventory_types',
        'any_ssp_is_allowed' => 'any_ssp_is_allowed',
        'any_rtb_deal_is_allowed' => 'any_rtb_deal_is_allowed',
        'is_all_days_part' => 'is_all_days_part',
        'timezone_type' => 'timezone_type',
        'contextual_cpm' => 'contextual_cpm',
        'macros_custom_data' => 'macros_custom_data',
        'delivery_type' => 'delivery_type',
        'campaign' => 'campaign',
        'datacenter' => 'datacenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'active' => 'setActive',
        'channel' => 'setChannel',
        'use_campaign_start_date' => 'setUseCampaignStartDate',
        'use_campaign_end_date' => 'setUseCampaignEndDate',
        'start_date_interface' => 'setStartDateInterface',
        'start_time_interface' => 'setStartTimeInterface',
        'end_date_interface' => 'setEndDateInterface',
        'end_time_interface' => 'setEndTimeInterface',
        'is_unlimited_budget' => 'setIsUnlimitedBudget',
        'total_budget' => 'setTotalBudget',
        'max_bid' => 'setMaxBid',
        'budget_pacing_type' => 'setBudgetPacingType',
        'local_budget' => 'setLocalBudget',
        'budget_period' => 'setBudgetPeriod',
        'frequency_caps' => 'setFrequencyCaps',
        'impressions_cap_is_unlimited' => 'setImpressionsCapIsUnlimited',
        'impressions_cap' => 'setImpressionsCap',
        'rtb_supply_type_open_or_private' => 'setRtbSupplyTypeOpenOrPrivate',
        'inventory_types' => 'setInventoryTypes',
        'any_ssp_is_allowed' => 'setAnySspIsAllowed',
        'any_rtb_deal_is_allowed' => 'setAnyRtbDealIsAllowed',
        'is_all_days_part' => 'setIsAllDaysPart',
        'timezone_type' => 'setTimezoneType',
        'contextual_cpm' => 'setContextualCpm',
        'macros_custom_data' => 'setMacrosCustomData',
        'delivery_type' => 'setDeliveryType',
        'campaign' => 'setCampaign',
        'datacenter' => 'setDatacenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'active' => 'getActive',
        'channel' => 'getChannel',
        'use_campaign_start_date' => 'getUseCampaignStartDate',
        'use_campaign_end_date' => 'getUseCampaignEndDate',
        'start_date_interface' => 'getStartDateInterface',
        'start_time_interface' => 'getStartTimeInterface',
        'end_date_interface' => 'getEndDateInterface',
        'end_time_interface' => 'getEndTimeInterface',
        'is_unlimited_budget' => 'getIsUnlimitedBudget',
        'total_budget' => 'getTotalBudget',
        'max_bid' => 'getMaxBid',
        'budget_pacing_type' => 'getBudgetPacingType',
        'local_budget' => 'getLocalBudget',
        'budget_period' => 'getBudgetPeriod',
        'frequency_caps' => 'getFrequencyCaps',
        'impressions_cap_is_unlimited' => 'getImpressionsCapIsUnlimited',
        'impressions_cap' => 'getImpressionsCap',
        'rtb_supply_type_open_or_private' => 'getRtbSupplyTypeOpenOrPrivate',
        'inventory_types' => 'getInventoryTypes',
        'any_ssp_is_allowed' => 'getAnySspIsAllowed',
        'any_rtb_deal_is_allowed' => 'getAnyRtbDealIsAllowed',
        'is_all_days_part' => 'getIsAllDaysPart',
        'timezone_type' => 'getTimezoneType',
        'contextual_cpm' => 'getContextualCpm',
        'macros_custom_data' => 'getMacrosCustomData',
        'delivery_type' => 'getDeliveryType',
        'campaign' => 'getCampaign',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['use_campaign_start_date'] = isset($data['use_campaign_start_date']) ? $data['use_campaign_start_date'] : null;
        $this->container['use_campaign_end_date'] = isset($data['use_campaign_end_date']) ? $data['use_campaign_end_date'] : null;
        $this->container['start_date_interface'] = isset($data['start_date_interface']) ? $data['start_date_interface'] : null;
        $this->container['start_time_interface'] = isset($data['start_time_interface']) ? $data['start_time_interface'] : null;
        $this->container['end_date_interface'] = isset($data['end_date_interface']) ? $data['end_date_interface'] : null;
        $this->container['end_time_interface'] = isset($data['end_time_interface']) ? $data['end_time_interface'] : null;
        $this->container['is_unlimited_budget'] = isset($data['is_unlimited_budget']) ? $data['is_unlimited_budget'] : null;
        $this->container['total_budget'] = isset($data['total_budget']) ? $data['total_budget'] : null;
        $this->container['max_bid'] = isset($data['max_bid']) ? $data['max_bid'] : null;
        $this->container['budget_pacing_type'] = isset($data['budget_pacing_type']) ? $data['budget_pacing_type'] : null;
        $this->container['local_budget'] = isset($data['local_budget']) ? $data['local_budget'] : null;
        $this->container['budget_period'] = isset($data['budget_period']) ? $data['budget_period'] : null;
        $this->container['frequency_caps'] = isset($data['frequency_caps']) ? $data['frequency_caps'] : null;
        $this->container['impressions_cap_is_unlimited'] = isset($data['impressions_cap_is_unlimited']) ? $data['impressions_cap_is_unlimited'] : null;
        $this->container['impressions_cap'] = isset($data['impressions_cap']) ? $data['impressions_cap'] : null;
        $this->container['rtb_supply_type_open_or_private'] = isset($data['rtb_supply_type_open_or_private']) ? $data['rtb_supply_type_open_or_private'] : null;
        $this->container['inventory_types'] = isset($data['inventory_types']) ? $data['inventory_types'] : null;
        $this->container['any_ssp_is_allowed'] = isset($data['any_ssp_is_allowed']) ? $data['any_ssp_is_allowed'] : null;
        $this->container['any_rtb_deal_is_allowed'] = isset($data['any_rtb_deal_is_allowed']) ? $data['any_rtb_deal_is_allowed'] : null;
        $this->container['is_all_days_part'] = isset($data['is_all_days_part']) ? $data['is_all_days_part'] : null;
        $this->container['timezone_type'] = isset($data['timezone_type']) ? $data['timezone_type'] : null;
        $this->container['contextual_cpm'] = isset($data['contextual_cpm']) ? $data['contextual_cpm'] : null;
        $this->container['macros_custom_data'] = isset($data['macros_custom_data']) ? $data['macros_custom_data'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
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

        if (!is_null($this->container['start_time_interface']) && !preg_match("/^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/", $this->container['start_time_interface'])) {
            $invalidProperties[] = "invalid value for 'start_time_interface', must be conform to the pattern /^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/.";
        }

        if (!is_null($this->container['end_time_interface']) && !preg_match("/^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/", $this->container['end_time_interface'])) {
            $invalidProperties[] = "invalid value for 'end_time_interface', must be conform to the pattern /^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/.";
        }

        if (!is_null($this->container['total_budget']) && ($this->container['total_budget'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'total_budget', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['total_budget']) && ($this->container['total_budget'] < 1)) {
            $invalidProperties[] = "invalid value for 'total_budget', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_bid']) && ($this->container['max_bid'] > 999999.99)) {
            $invalidProperties[] = "invalid value for 'max_bid', must be smaller than or equal to 999999.99.";
        }

        if (!is_null($this->container['max_bid']) && ($this->container['max_bid'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'max_bid', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['local_budget']) && ($this->container['local_budget'] > 999999.99)) {
            $invalidProperties[] = "invalid value for 'local_budget', must be smaller than or equal to 999999.99.";
        }

        if (!is_null($this->container['local_budget']) && ($this->container['local_budget'] < 25)) {
            $invalidProperties[] = "invalid value for 'local_budget', must be bigger than or equal to 25.";
        }

        if (!is_null($this->container['impressions_cap']) && ($this->container['impressions_cap'] < 1)) {
            $invalidProperties[] = "invalid value for 'impressions_cap', must be bigger than or equal to 1.";
        }

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
     * @param float|null $id Don't use for Create or Update.
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
     * @param string|null $name Name. Required.
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
     * Gets channel
     *
     * @return float|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param float|null $channel Required. One of the ID values of parameter `channels` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets use_campaign_start_date
     *
     * @return float|null
     */
    public function getUseCampaignStartDate()
    {
        return $this->container['use_campaign_start_date'];
    }

    /**
     * Sets use_campaign_start_date
     *
     * @param float|null $use_campaign_start_date Use Campaign Start Date - 1, No - 0. Required.
     *
     * @return $this
     */
    public function setUseCampaignStartDate($use_campaign_start_date)
    {
        $this->container['use_campaign_start_date'] = $use_campaign_start_date;

        return $this;
    }

    /**
     * Gets use_campaign_end_date
     *
     * @return float|null
     */
    public function getUseCampaignEndDate()
    {
        return $this->container['use_campaign_end_date'];
    }

    /**
     * Sets use_campaign_end_date
     *
     * @param float|null $use_campaign_end_date Use Campaign End Date - 1, No - 0. Required.
     *
     * @return $this
     */
    public function setUseCampaignEndDate($use_campaign_end_date)
    {
        $this->container['use_campaign_end_date'] = $use_campaign_end_date;

        return $this;
    }

    /**
     * Gets start_date_interface
     *
     * @return \DateTime|null
     */
    public function getStartDateInterface()
    {
        return $this->container['start_date_interface'];
    }

    /**
     * Sets start_date_interface
     *
     * @param \DateTime|null $start_date_interface Start Date. If use_campaign_start_date = 0 - Required.
     *
     * @return $this
     */
    public function setStartDateInterface($start_date_interface)
    {
        $this->container['start_date_interface'] = $start_date_interface;

        return $this;
    }

    /**
     * Gets start_time_interface
     *
     * @return string|null
     */
    public function getStartTimeInterface()
    {
        return $this->container['start_time_interface'];
    }

    /**
     * Sets start_time_interface
     *
     * @param string|null $start_time_interface Start Time. If use_campaign_start_date = 0 - Required. Example 23:45:59
     *
     * @return $this
     */
    public function setStartTimeInterface($start_time_interface)
    {

        if (!is_null($start_time_interface) && (!preg_match("/^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/", $start_time_interface))) {
            throw new \InvalidArgumentException("invalid value for $start_time_interface when calling StrategyWithCampaign., must conform to the pattern /^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/.");
        }

        $this->container['start_time_interface'] = $start_time_interface;

        return $this;
    }

    /**
     * Gets end_date_interface
     *
     * @return \DateTime|null
     */
    public function getEndDateInterface()
    {
        return $this->container['end_date_interface'];
    }

    /**
     * Sets end_date_interface
     *
     * @param \DateTime|null $end_date_interface End Date. If use_campaign_end_date = 0 - Required.
     *
     * @return $this
     */
    public function setEndDateInterface($end_date_interface)
    {
        $this->container['end_date_interface'] = $end_date_interface;

        return $this;
    }

    /**
     * Gets end_time_interface
     *
     * @return string|null
     */
    public function getEndTimeInterface()
    {
        return $this->container['end_time_interface'];
    }

    /**
     * Sets end_time_interface
     *
     * @param string|null $end_time_interface End Time. If use_campaign_end_date = 0 - Required. Example 23:45:59
     *
     * @return $this
     */
    public function setEndTimeInterface($end_time_interface)
    {

        if (!is_null($end_time_interface) && (!preg_match("/^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/", $end_time_interface))) {
            throw new \InvalidArgumentException("invalid value for $end_time_interface when calling StrategyWithCampaign., must conform to the pattern /^(([0,1][0-9])|(2[0-3])):[0-5][0-9]$/.");
        }

        $this->container['end_time_interface'] = $end_time_interface;

        return $this;
    }

    /**
     * Gets is_unlimited_budget
     *
     * @return float|null
     */
    public function getIsUnlimitedBudget()
    {
        return $this->container['is_unlimited_budget'];
    }

    /**
     * Sets is_unlimited_budget
     *
     * @param float|null $is_unlimited_budget Unlimited Budget. Required.
     *
     * @return $this
     */
    public function setIsUnlimitedBudget($is_unlimited_budget)
    {
        $this->container['is_unlimited_budget'] = $is_unlimited_budget;

        return $this;
    }

    /**
     * Gets total_budget
     *
     * @return float|null
     */
    public function getTotalBudget()
    {
        return $this->container['total_budget'];
    }

    /**
     * Sets total_budget
     *
     * @param float|null $total_budget Budget. If is_unlimited_budget = 0 - Required.
     *
     * @return $this
     */
    public function setTotalBudget($total_budget)
    {

        if (!is_null($total_budget) && ($total_budget > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $total_budget when calling StrategyWithCampaign., must be smaller than or equal to 9999999.');
        }

        $this->container['total_budget'] = $total_budget;

        return $this;
    }

    /**
     * Gets max_bid
     *
     * @return float|null
     */
    public function getMaxBid()
    {
        return $this->container['max_bid'];
    }

    /**
     * Sets max_bid
     *
     * @param float|null $max_bid Max. CPM bid. Required.
     *
     * @return $this
     */
    public function setMaxBid($max_bid)
    {

        if (!is_null($max_bid) && ($max_bid > 999999.99)) {
            throw new \InvalidArgumentException('invalid value for $max_bid when calling StrategyWithCampaign., must be smaller than or equal to 999999.99.');
        }

        $this->container['max_bid'] = $max_bid;

        return $this;
    }

    /**
     * Gets budget_pacing_type
     *
     * @return float|null
     */
    public function getBudgetPacingType()
    {
        return $this->container['budget_pacing_type'];
    }

    /**
     * Sets budget_pacing_type
     *
     * @param float|null $budget_pacing_type Pacing Type. Required. One of the ID values of parameter `budget_pacing_types` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setBudgetPacingType($budget_pacing_type)
    {
        $this->container['budget_pacing_type'] = $budget_pacing_type;

        return $this;
    }

    /**
     * Gets local_budget
     *
     * @return float|null
     */
    public function getLocalBudget()
    {
        return $this->container['local_budget'];
    }

    /**
     * Sets local_budget
     *
     * @param float|null $local_budget Budget For Budget Period.
     *
     * @return $this
     */
    public function setLocalBudget($local_budget)
    {

        if (!is_null($local_budget) && ($local_budget > 999999.99)) {
            throw new \InvalidArgumentException('invalid value for $local_budget when calling StrategyWithCampaign., must be smaller than or equal to 999999.99.');
        }

        $this->container['local_budget'] = $local_budget;

        return $this;
    }

    /**
     * Gets budget_period
     *
     * @return float|null
     */
    public function getBudgetPeriod()
    {
        return $this->container['budget_period'];
    }

    /**
     * Sets budget_period
     *
     * @param float|null $budget_period Budget Period. Required. One of the ID values of parameter `budget_pacing_budget_intervals` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setBudgetPeriod($budget_period)
    {
        $this->container['budget_period'] = $budget_period;

        return $this;
    }

    /**
     * Gets frequency_caps
     *
     * @return \OpenAPI\Client\Model\FrequencyCap[]|null
     */
    public function getFrequencyCaps()
    {
        return $this->container['frequency_caps'];
    }

    /**
     * Sets frequency_caps
     *
     * @param \OpenAPI\Client\Model\FrequencyCap[]|null $frequency_caps frequency_caps
     *
     * @return $this
     */
    public function setFrequencyCaps($frequency_caps)
    {
        $this->container['frequency_caps'] = $frequency_caps;

        return $this;
    }

    /**
     * Gets impressions_cap_is_unlimited
     *
     * @return float|null
     */
    public function getImpressionsCapIsUnlimited()
    {
        return $this->container['impressions_cap_is_unlimited'];
    }

    /**
     * Sets impressions_cap_is_unlimited
     *
     * @param float|null $impressions_cap_is_unlimited Unlimited impressions cap - 0. No - 1 Required.
     *
     * @return $this
     */
    public function setImpressionsCapIsUnlimited($impressions_cap_is_unlimited)
    {
        $this->container['impressions_cap_is_unlimited'] = $impressions_cap_is_unlimited;

        return $this;
    }

    /**
     * Gets impressions_cap
     *
     * @return float|null
     */
    public function getImpressionsCap()
    {
        return $this->container['impressions_cap'];
    }

    /**
     * Sets impressions_cap
     *
     * @param float|null $impressions_cap If impressions_cap_is_unlimited = 1 - Required.
     *
     * @return $this
     */
    public function setImpressionsCap($impressions_cap)
    {


        $this->container['impressions_cap'] = $impressions_cap;

        return $this;
    }

    /**
     * Gets rtb_supply_type_open_or_private
     *
     * @return float|null
     */
    public function getRtbSupplyTypeOpenOrPrivate()
    {
        return $this->container['rtb_supply_type_open_or_private'];
    }

    /**
     * Sets rtb_supply_type_open_or_private
     *
     * @param float|null $rtb_supply_type_open_or_private Supply Type. Required. One of the ID values of parameter `rtb_supply_types` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setRtbSupplyTypeOpenOrPrivate($rtb_supply_type_open_or_private)
    {
        $this->container['rtb_supply_type_open_or_private'] = $rtb_supply_type_open_or_private;

        return $this;
    }

    /**
     * Gets inventory_types
     *
     * @return string|null
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     *
     * @param string|null $inventory_types Inventory Types. Required. ID values of parameter `inventory_types` in /constants is added to this parameter. For example 1 or 1,2.
     *
     * @return $this
     */
    public function setInventoryTypes($inventory_types)
    {
        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets any_ssp_is_allowed
     *
     * @return float|null
     */
    public function getAnySspIsAllowed()
    {
        return $this->container['any_ssp_is_allowed'];
    }

    /**
     * Sets any_ssp_is_allowed
     *
     * @param float|null $any_ssp_is_allowed Run on all Open Supply sources. Run All - 1. Not All - 0. Required.
     *
     * @return $this
     */
    public function setAnySspIsAllowed($any_ssp_is_allowed)
    {
        $this->container['any_ssp_is_allowed'] = $any_ssp_is_allowed;

        return $this;
    }

    /**
     * Gets any_rtb_deal_is_allowed
     *
     * @return float|null
     */
    public function getAnyRtbDealIsAllowed()
    {
        return $this->container['any_rtb_deal_is_allowed'];
    }

    /**
     * Sets any_rtb_deal_is_allowed
     *
     * @param float|null $any_rtb_deal_is_allowed Run on all deals. Run All - 1. Not All - 0. Required.
     *
     * @return $this
     */
    public function setAnyRtbDealIsAllowed($any_rtb_deal_is_allowed)
    {
        $this->container['any_rtb_deal_is_allowed'] = $any_rtb_deal_is_allowed;

        return $this;
    }

    /**
     * Gets is_all_days_part
     *
     * @return float|null
     */
    public function getIsAllDaysPart()
    {
        return $this->container['is_all_days_part'];
    }

    /**
     * Sets is_all_days_part
     *
     * @param float|null $is_all_days_part Run on all day parts. Run All - 1. Not All - 0. Required.
     *
     * @return $this
     */
    public function setIsAllDaysPart($is_all_days_part)
    {
        $this->container['is_all_days_part'] = $is_all_days_part;

        return $this;
    }

    /**
     * Gets timezone_type
     *
     * @return int|null
     */
    public function getTimezoneType()
    {
        return $this->container['timezone_type'];
    }

    /**
     * Sets timezone_type
     *
     * @param int|null $timezone_type Time Zone Type. One of the ID values of parameter `day_part_timezones` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setTimezoneType($timezone_type)
    {
        $this->container['timezone_type'] = $timezone_type;

        return $this;
    }

    /**
     * Gets contextual_cpm
     *
     * @return float|null
     */
    public function getContextualCpm()
    {
        return $this->container['contextual_cpm'];
    }

    /**
     * Sets contextual_cpm
     *
     * @param float|null $contextual_cpm Contextual CPM
     *
     * @return $this
     */
    public function setContextualCpm($contextual_cpm)
    {
        $this->container['contextual_cpm'] = $contextual_cpm;

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
     * @param string|null $macros_custom_data You can pass this data upon impression using the [STRATEGY_CUSTOM_DATA] macro.
     *
     * @return $this
     */
    public function setMacrosCustomData($macros_custom_data)
    {
        if (!is_null($macros_custom_data) && (mb_strlen($macros_custom_data) > 500)) {
            throw new \InvalidArgumentException('invalid length for $macros_custom_data when calling StrategyWithCampaign., must be smaller than or equal to 500.');
        }

        $this->container['macros_custom_data'] = $macros_custom_data;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return int|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param int|null $delivery_type Delivery Type. One of the ID values of parameter `targeting_delivery_types` in /constants is added to this parameter
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \OpenAPI\Client\Model\StrategyWithCampaignCampaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \OpenAPI\Client\Model\StrategyWithCampaignCampaign|null $campaign campaign
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

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


