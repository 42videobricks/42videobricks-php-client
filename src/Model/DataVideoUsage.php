<?php
/**
 * DataVideoUsage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Api42Vb\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 42videobricks
 *
 * 42videobricks is a Video Platform As A Service (VPaaS)
 *
 * The version of the OpenAPI document: 1.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Api42Vb\Client\Model;

use \ArrayAccess;
use \Api42Vb\Client\ObjectSerializer;

/**
 * DataVideoUsage Class Doc Comment
 *
 * @category Class
 * @description Video Usage KPIs
 * @package  Api42Vb\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DataVideoUsage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataVideoUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_key' => 'string',
        'interval' => 'string',
        'transcoding' => 'float',
        'hosting' => 'float',
        'delivery' => 'float',
        'drm' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_key' => null,
        'interval' => null,
        'transcoding' => null,
        'hosting' => null,
        'delivery' => null,
        'drm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_key' => false,
		'interval' => false,
		'transcoding' => false,
		'hosting' => false,
		'delivery' => false,
		'drm' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date_key' => 'dateKey',
        'interval' => 'interval',
        'transcoding' => 'transcoding',
        'hosting' => 'hosting',
        'delivery' => 'delivery',
        'drm' => 'drm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_key' => 'setDateKey',
        'interval' => 'setInterval',
        'transcoding' => 'setTranscoding',
        'hosting' => 'setHosting',
        'delivery' => 'setDelivery',
        'drm' => 'setDrm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_key' => 'getDateKey',
        'interval' => 'getInterval',
        'transcoding' => 'getTranscoding',
        'hosting' => 'getHosting',
        'delivery' => 'getDelivery',
        'drm' => 'getDrm'
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
        $this->setIfExists('date_key', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('transcoding', $data ?? [], null);
        $this->setIfExists('hosting', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('drm', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transcoding'] === null) {
            $invalidProperties[] = "'transcoding' can't be null";
        }
        if ($this->container['hosting'] === null) {
            $invalidProperties[] = "'hosting' can't be null";
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
     * Gets date_key
     *
     * @return string|null
     */
    public function getDateKey()
    {
        return $this->container['date_key'];
    }

    /**
     * Sets date_key
     *
     * @param string|null $date_key Date of the kpis.  Format:  - day:YYYY-MM-DD (2023-10-16) - week: YYYY-Www (2023-W42) - month: YYYY-MM (2023-10)
     *
     * @return self
     */
    public function setDateKey($date_key)
    {
        if (is_null($date_key)) {
            throw new \InvalidArgumentException('non-nullable date_key cannot be null');
        }
        $this->container['date_key'] = $date_key;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string|null
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string|null $interval Unit of the period (day|month|week)
     *
     * @return self
     */
    public function setInterval($interval)
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets transcoding
     *
     * @return float
     */
    public function getTranscoding()
    {
        return $this->container['transcoding'];
    }

    /**
     * Sets transcoding
     *
     * @param float $transcoding total of transcoding second since the begining of the month
     *
     * @return self
     */
    public function setTranscoding($transcoding)
    {
        if (is_null($transcoding)) {
            throw new \InvalidArgumentException('non-nullable transcoding cannot be null');
        }
        $this->container['transcoding'] = $transcoding;

        return $this;
    }

    /**
     * Gets hosting
     *
     * @return float
     */
    public function getHosting()
    {
        return $this->container['hosting'];
    }

    /**
     * Sets hosting
     *
     * @param float $hosting total of hosting second since the begining of the month
     *
     * @return self
     */
    public function setHosting($hosting)
    {
        if (is_null($hosting)) {
            throw new \InvalidArgumentException('non-nullable hosting cannot be null');
        }
        $this->container['hosting'] = $hosting;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return float|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param float|null $delivery total of delivery (stream) second since the begining of the month
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets drm
     *
     * @return float|null
     */
    public function getDrm()
    {
        return $this->container['drm'];
    }

    /**
     * Sets drm
     *
     * @param float|null $drm total of delivery (stream) second since the begining of the month
     *
     * @return self
     */
    public function setDrm($drm)
    {
        if (is_null($drm)) {
            throw new \InvalidArgumentException('non-nullable drm cannot be null');
        }
        $this->container['drm'] = $drm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


