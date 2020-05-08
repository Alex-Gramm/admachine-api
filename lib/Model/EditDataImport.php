<?php
/**
 * EditDataImport
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
 * EditDataImport Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EditDataImport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'editDataImport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'float',
        'ssp_id' => 'float',
        'segment_id' => 'float',
        'recurring_import' => 'float',
        'device_based' => 'float',
        'data_storage' => 'float',
        'bucket' => 'string',
        'object_path' => 'string',
        'access_key' => 'string',
        'secret_key' => 'string',
        'move_to_processed_dir' => 'float',
        'public_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'active' => null,
        'ssp_id' => null,
        'segment_id' => null,
        'recurring_import' => null,
        'device_based' => null,
        'data_storage' => null,
        'bucket' => null,
        'object_path' => null,
        'access_key' => null,
        'secret_key' => null,
        'move_to_processed_dir' => null,
        'public_url' => null
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
        'active' => 'active',
        'ssp_id' => 'ssp_id',
        'segment_id' => 'segment_id',
        'recurring_import' => 'recurring_import',
        'device_based' => 'device_based',
        'data_storage' => 'data_storage',
        'bucket' => 'bucket',
        'object_path' => 'object_path',
        'access_key' => 'access_key',
        'secret_key' => 'secret_key',
        'move_to_processed_dir' => 'move_to_processed_dir',
        'public_url' => 'public_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'ssp_id' => 'setSspId',
        'segment_id' => 'setSegmentId',
        'recurring_import' => 'setRecurringImport',
        'device_based' => 'setDeviceBased',
        'data_storage' => 'setDataStorage',
        'bucket' => 'setBucket',
        'object_path' => 'setObjectPath',
        'access_key' => 'setAccessKey',
        'secret_key' => 'setSecretKey',
        'move_to_processed_dir' => 'setMoveToProcessedDir',
        'public_url' => 'setPublicUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'ssp_id' => 'getSspId',
        'segment_id' => 'getSegmentId',
        'recurring_import' => 'getRecurringImport',
        'device_based' => 'getDeviceBased',
        'data_storage' => 'getDataStorage',
        'bucket' => 'getBucket',
        'object_path' => 'getObjectPath',
        'access_key' => 'getAccessKey',
        'secret_key' => 'getSecretKey',
        'move_to_processed_dir' => 'getMoveToProcessedDir',
        'public_url' => 'getPublicUrl'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['ssp_id'] = isset($data['ssp_id']) ? $data['ssp_id'] : null;
        $this->container['segment_id'] = isset($data['segment_id']) ? $data['segment_id'] : null;
        $this->container['recurring_import'] = isset($data['recurring_import']) ? $data['recurring_import'] : null;
        $this->container['device_based'] = isset($data['device_based']) ? $data['device_based'] : null;
        $this->container['data_storage'] = isset($data['data_storage']) ? $data['data_storage'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['object_path'] = isset($data['object_path']) ? $data['object_path'] : null;
        $this->container['access_key'] = isset($data['access_key']) ? $data['access_key'] : null;
        $this->container['secret_key'] = isset($data['secret_key']) ? $data['secret_key'] : null;
        $this->container['move_to_processed_dir'] = isset($data['move_to_processed_dir']) ? $data['move_to_processed_dir'] : null;
        $this->container['public_url'] = isset($data['public_url']) ? $data['public_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data_storage'] === null) {
            $invalidProperties[] = "'data_storage' can't be null";
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
     * Gets ssp_id
     *
     * @return float|null
     */
    public function getSspId()
    {
        return $this->container['ssp_id'];
    }

    /**
     * Sets ssp_id
     *
     * @param float|null $ssp_id Ssp ID.
     *
     * @return $this
     */
    public function setSspId($ssp_id)
    {
        $this->container['ssp_id'] = $ssp_id;

        return $this;
    }

    /**
     * Gets segment_id
     *
     * @return float|null
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     *
     * @param float|null $segment_id Pixel ID.
     *
     * @return $this
     */
    public function setSegmentId($segment_id)
    {
        $this->container['segment_id'] = $segment_id;

        return $this;
    }

    /**
     * Gets recurring_import
     *
     * @return float|null
     */
    public function getRecurringImport()
    {
        return $this->container['recurring_import'];
    }

    /**
     * Sets recurring_import
     *
     * @param float|null $recurring_import Recurring Import.
     *
     * @return $this
     */
    public function setRecurringImport($recurring_import)
    {
        $this->container['recurring_import'] = $recurring_import;

        return $this;
    }

    /**
     * Gets device_based
     *
     * @return float|null
     */
    public function getDeviceBased()
    {
        return $this->container['device_based'];
    }

    /**
     * Sets device_based
     *
     * @param float|null $device_based Device Based.
     *
     * @return $this
     */
    public function setDeviceBased($device_based)
    {
        $this->container['device_based'] = $device_based;

        return $this;
    }

    /**
     * Gets data_storage
     *
     * @return float
     */
    public function getDataStorage()
    {
        return $this->container['data_storage'];
    }

    /**
     * Sets data_storage
     *
     * @param float $data_storage Data Storage.  Status. One of the ID values of parameter `data_storages` in /constants is added to this parameter.
     *
     * @return $this
     */
    public function setDataStorage($data_storage)
    {
        $this->container['data_storage'] = $data_storage;

        return $this;
    }

    /**
     * Gets bucket
     *
     * @return string|null
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param string|null $bucket Object Path. Used if data_storage = 1(S3 in data_storages).
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets object_path
     *
     * @return string|null
     */
    public function getObjectPath()
    {
        return $this->container['object_path'];
    }

    /**
     * Sets object_path
     *
     * @param string|null $object_path Object Path. If data_storage = 1(S3 in data_storages) - Required.
     *
     * @return $this
     */
    public function setObjectPath($object_path)
    {
        $this->container['object_path'] = $object_path;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string|null
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string|null $access_key Access key. If data_storage = 1(S3 in data_storages) - Required.
     *
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key Secret key. If data_storage = 1(S3 in data_storages) - Required.
     *
     * @return $this
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets move_to_processed_dir
     *
     * @return float|null
     */
    public function getMoveToProcessedDir()
    {
        return $this->container['move_to_processed_dir'];
    }

    /**
     * Sets move_to_processed_dir
     *
     * @param float|null $move_to_processed_dir Move to processed dir after import. If data_storage = 1(S3 in data_storages) - Required
     *
     * @return $this
     */
    public function setMoveToProcessedDir($move_to_processed_dir)
    {
        $this->container['move_to_processed_dir'] = $move_to_processed_dir;

        return $this;
    }

    /**
     * Gets public_url
     *
     * @return string|null
     */
    public function getPublicUrl()
    {
        return $this->container['public_url'];
    }

    /**
     * Sets public_url
     *
     * @param string|null $public_url Public Url. If data_storage = 2(URL in data_storages) - Required.
     *
     * @return $this
     */
    public function setPublicUrl($public_url)
    {
        $this->container['public_url'] = $public_url;

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


