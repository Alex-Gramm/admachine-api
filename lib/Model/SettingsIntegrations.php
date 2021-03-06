<?php
/**
 * SettingsIntegrations
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
 * SettingsIntegrations Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsIntegrations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings_Integrations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stripe' => '\OpenAPI\Client\Model\SettingsIntegrationsStripe',
        'paypal' => '\OpenAPI\Client\Model\SettingsIntegrationsPaypal',
        'webmoney' => '\OpenAPI\Client\Model\SettingsIntegrationsWebmoney'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'stripe' => null,
        'paypal' => null,
        'webmoney' => null
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
        'stripe' => 'stripe',
        'paypal' => 'paypal',
        'webmoney' => 'webmoney'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stripe' => 'setStripe',
        'paypal' => 'setPaypal',
        'webmoney' => 'setWebmoney'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stripe' => 'getStripe',
        'paypal' => 'getPaypal',
        'webmoney' => 'getWebmoney'
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
        $this->container['stripe'] = isset($data['stripe']) ? $data['stripe'] : null;
        $this->container['paypal'] = isset($data['paypal']) ? $data['paypal'] : null;
        $this->container['webmoney'] = isset($data['webmoney']) ? $data['webmoney'] : null;
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
     * Gets stripe
     *
     * @return \OpenAPI\Client\Model\SettingsIntegrationsStripe|null
     */
    public function getStripe()
    {
        return $this->container['stripe'];
    }

    /**
     * Sets stripe
     *
     * @param \OpenAPI\Client\Model\SettingsIntegrationsStripe|null $stripe stripe
     *
     * @return $this
     */
    public function setStripe($stripe)
    {
        $this->container['stripe'] = $stripe;

        return $this;
    }

    /**
     * Gets paypal
     *
     * @return \OpenAPI\Client\Model\SettingsIntegrationsPaypal|null
     */
    public function getPaypal()
    {
        return $this->container['paypal'];
    }

    /**
     * Sets paypal
     *
     * @param \OpenAPI\Client\Model\SettingsIntegrationsPaypal|null $paypal paypal
     *
     * @return $this
     */
    public function setPaypal($paypal)
    {
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets webmoney
     *
     * @return \OpenAPI\Client\Model\SettingsIntegrationsWebmoney|null
     */
    public function getWebmoney()
    {
        return $this->container['webmoney'];
    }

    /**
     * Sets webmoney
     *
     * @param \OpenAPI\Client\Model\SettingsIntegrationsWebmoney|null $webmoney webmoney
     *
     * @return $this
     */
    public function setWebmoney($webmoney)
    {
        $this->container['webmoney'] = $webmoney;

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


