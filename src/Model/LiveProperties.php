<?php
/**
 * LiveProperties
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
 * The version of the OpenAPI document: 1.7.1
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
 * LiveProperties Class Doc Comment
 *
 * @category Class
 * @description Live Object
 * @package  Api42Vb\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LiveProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LiveProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'public' => 'bool',
        'stream_restriction' => 'string[]',
        'streaming_type' => 'string',
        'input_stream' => 'string',
        'capture_source' => 'string',
        'start_at' => 'int',
        'end_at' => 'int',
        'player_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'public' => null,
        'stream_restriction' => null,
        'streaming_type' => null,
        'input_stream' => null,
        'capture_source' => null,
        'start_at' => null,
        'end_at' => null,
        'player_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
		'description' => false,
		'public' => false,
		'stream_restriction' => false,
		'streaming_type' => false,
		'input_stream' => false,
		'capture_source' => false,
		'start_at' => false,
		'end_at' => false,
		'player_id' => true
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
        'title' => 'title',
        'description' => 'description',
        'public' => 'public',
        'stream_restriction' => 'streamRestriction',
        'streaming_type' => 'streamingType',
        'input_stream' => 'inputStream',
        'capture_source' => 'captureSource',
        'start_at' => 'startAt',
        'end_at' => 'endAt',
        'player_id' => 'playerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'public' => 'setPublic',
        'stream_restriction' => 'setStreamRestriction',
        'streaming_type' => 'setStreamingType',
        'input_stream' => 'setInputStream',
        'capture_source' => 'setCaptureSource',
        'start_at' => 'setStartAt',
        'end_at' => 'setEndAt',
        'player_id' => 'setPlayerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'public' => 'getPublic',
        'stream_restriction' => 'getStreamRestriction',
        'streaming_type' => 'getStreamingType',
        'input_stream' => 'getInputStream',
        'capture_source' => 'getCaptureSource',
        'start_at' => 'getStartAt',
        'end_at' => 'getEndAt',
        'player_id' => 'getPlayerId'
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

    public const STREAMING_TYPE_SRT = 'SRT';
    public const STREAMING_TYPE_RTMP = 'RTMP';
    public const STREAMING_TYPE_HLS = 'HLS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreamingTypeAllowableValues()
    {
        return [
            self::STREAMING_TYPE_SRT,
            self::STREAMING_TYPE_RTMP,
            self::STREAMING_TYPE_HLS,
        ];
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('public', $data ?? [], null);
        $this->setIfExists('stream_restriction', $data ?? [], null);
        $this->setIfExists('streaming_type', $data ?? [], 'SRT');
        $this->setIfExists('input_stream', $data ?? [], null);
        $this->setIfExists('capture_source', $data ?? [], null);
        $this->setIfExists('start_at', $data ?? [], null);
        $this->setIfExists('end_at', $data ?? [], null);
        $this->setIfExists('player_id', $data ?? [], '');
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
        }

        $allowedValues = $this->getStreamingTypeAllowableValues();
        if (!is_null($this->container['streaming_type']) && !in_array($this->container['streaming_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'streaming_type', must be one of '%s'",
                $this->container['streaming_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title of the live
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $title when calling LiveProperties., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description of the live
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $description when calling LiveProperties., must be smaller than or equal to 2048.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool|null $public Define if the live is public (it can be accessible by anybody with the live url). Default = tue
     *
     * @return self
     */
    public function setPublic($public)
    {
        if (is_null($public)) {
            throw new \InvalidArgumentException('non-nullable public cannot be null');
        }
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets stream_restriction
     *
     * @return string[]|null
     */
    public function getStreamRestriction()
    {
        return $this->container['stream_restriction'];
    }

    /**
     * Sets stream_restriction
     *
     * @param string[]|null $stream_restriction the iso code 3306-1 on code-alpha2 if empty all the world can be read the live
     *
     * @return self
     */
    public function setStreamRestriction($stream_restriction)
    {
        if (is_null($stream_restriction)) {
            throw new \InvalidArgumentException('non-nullable stream_restriction cannot be null');
        }
        $this->container['stream_restriction'] = $stream_restriction;

        return $this;
    }

    /**
     * Gets streaming_type
     *
     * @return string|null
     */
    public function getStreamingType()
    {
        return $this->container['streaming_type'];
    }

    /**
     * Sets streaming_type
     *
     * @param string|null $streaming_type RTMP (Real-Time Messaging Protocol): A streaming protocol developed by Adobe for transmitting audio, video, and data streams in real-time over the Internet. SRT (Secure Reliable Transport): An open-source protocol that optimizes live video streaming over unstable networks, ensuring security and reliability. HLS (HTTP Live Streaming): An HTTP-based adaptive streaming communications protocol developed by Apple for streaming media over the internet.
     *
     * @return self
     */
    public function setStreamingType($streaming_type)
    {
        if (is_null($streaming_type)) {
            throw new \InvalidArgumentException('non-nullable streaming_type cannot be null');
        }
        $allowedValues = $this->getStreamingTypeAllowableValues();
        if (!in_array($streaming_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'streaming_type', must be one of '%s'",
                    $streaming_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['streaming_type'] = $streaming_type;

        return $this;
    }

    /**
     * Gets input_stream
     *
     * @return string|null
     */
    public function getInputStream()
    {
        return $this->container['input_stream'];
    }

    /**
     * Sets input_stream
     *
     * @param string|null $input_stream URL of the HLS stream input. Required if streamingType is HLS.
     *
     * @return self
     */
    public function setInputStream($input_stream)
    {
        if (is_null($input_stream)) {
            throw new \InvalidArgumentException('non-nullable input_stream cannot be null');
        }
        $this->container['input_stream'] = $input_stream;

        return $this;
    }

    /**
     * Gets capture_source
     *
     * @return string|null
     */
    public function getCaptureSource()
    {
        return $this->container['capture_source'];
    }

    /**
     * Sets capture_source
     *
     * @param string|null $capture_source The closest source to capture the live stream, see /lives/captureSources
     *
     * @return self
     */
    public function setCaptureSource($capture_source)
    {
        if (is_null($capture_source)) {
            throw new \InvalidArgumentException('non-nullable capture_source cannot be null');
        }
        $this->container['capture_source'] = $capture_source;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return int|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param int|null $start_at The start datetime of the live in timestamp format
     *
     * @return self
     */
    public function setStartAt($start_at)
    {
        if (is_null($start_at)) {
            throw new \InvalidArgumentException('non-nullable start_at cannot be null');
        }
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return int|null
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param int|null $end_at The end datetime of the live in timestamp format
     *
     * @return self
     */
    public function setEndAt($end_at)
    {
        if (is_null($end_at)) {
            throw new \InvalidArgumentException('non-nullable end_at cannot be null');
        }
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets player_id
     *
     * @return string|null
     */
    public function getPlayerId()
    {
        return $this->container['player_id'];
    }

    /**
     * Sets player_id
     *
     * @param string|null $player_id Video player theme id
     *
     * @return self
     */
    public function setPlayerId($player_id)
    {
        if (is_null($player_id)) {
            array_push($this->openAPINullablesSetToNull, 'player_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('player_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['player_id'] = $player_id;

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


