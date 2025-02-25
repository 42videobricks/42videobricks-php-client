<?php
/**
 * QualityDownloadInfos
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
 * The version of the OpenAPI document: 1.5
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
 * QualityDownloadInfos Class Doc Comment
 *
 * @category Class
 * @description Quality Download Infos Object
 * @package  Api42Vb\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QualityDownloadInfos implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QualityDownloadInfos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_bit_rate_kbps' => 'int',
        'frame_height' => 'int',
        'frame_width' => 'int',
        'video_bit_rate_kbps' => 'int',
        'profile' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_bit_rate_kbps' => null,
        'frame_height' => null,
        'frame_width' => null,
        'video_bit_rate_kbps' => null,
        'profile' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_bit_rate_kbps' => false,
		'frame_height' => true,
		'frame_width' => true,
		'video_bit_rate_kbps' => false,
		'profile' => true
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
        'audio_bit_rate_kbps' => 'audioBitRateKbps',
        'frame_height' => 'frameHeight',
        'frame_width' => 'frameWidth',
        'video_bit_rate_kbps' => 'videoBitRateKbps',
        'profile' => 'profile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_bit_rate_kbps' => 'setAudioBitRateKbps',
        'frame_height' => 'setFrameHeight',
        'frame_width' => 'setFrameWidth',
        'video_bit_rate_kbps' => 'setVideoBitRateKbps',
        'profile' => 'setProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_bit_rate_kbps' => 'getAudioBitRateKbps',
        'frame_height' => 'getFrameHeight',
        'frame_width' => 'getFrameWidth',
        'video_bit_rate_kbps' => 'getVideoBitRateKbps',
        'profile' => 'getProfile'
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
        $this->setIfExists('audio_bit_rate_kbps', $data ?? [], 0);
        $this->setIfExists('frame_height', $data ?? [], null);
        $this->setIfExists('frame_width', $data ?? [], null);
        $this->setIfExists('video_bit_rate_kbps', $data ?? [], 0);
        $this->setIfExists('profile', $data ?? [], null);
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
     * Gets audio_bit_rate_kbps
     *
     * @return int|null
     */
    public function getAudioBitRateKbps()
    {
        return $this->container['audio_bit_rate_kbps'];
    }

    /**
     * Sets audio_bit_rate_kbps
     *
     * @param int|null $audio_bit_rate_kbps The audio bit rate in kilobits per second.
     *
     * @return self
     */
    public function setAudioBitRateKbps($audio_bit_rate_kbps)
    {
        if (is_null($audio_bit_rate_kbps)) {
            throw new \InvalidArgumentException('non-nullable audio_bit_rate_kbps cannot be null');
        }
        $this->container['audio_bit_rate_kbps'] = $audio_bit_rate_kbps;

        return $this;
    }

    /**
     * Gets frame_height
     *
     * @return int|null
     */
    public function getFrameHeight()
    {
        return $this->container['frame_height'];
    }

    /**
     * Sets frame_height
     *
     * @param int|null $frame_height The height of the video frame.
     *
     * @return self
     */
    public function setFrameHeight($frame_height)
    {
        if (is_null($frame_height)) {
            array_push($this->openAPINullablesSetToNull, 'frame_height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frame_height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frame_height'] = $frame_height;

        return $this;
    }

    /**
     * Gets frame_width
     *
     * @return int|null
     */
    public function getFrameWidth()
    {
        return $this->container['frame_width'];
    }

    /**
     * Sets frame_width
     *
     * @param int|null $frame_width The width of the video frame.
     *
     * @return self
     */
    public function setFrameWidth($frame_width)
    {
        if (is_null($frame_width)) {
            array_push($this->openAPINullablesSetToNull, 'frame_width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frame_width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frame_width'] = $frame_width;

        return $this;
    }

    /**
     * Gets video_bit_rate_kbps
     *
     * @return int|null
     */
    public function getVideoBitRateKbps()
    {
        return $this->container['video_bit_rate_kbps'];
    }

    /**
     * Sets video_bit_rate_kbps
     *
     * @param int|null $video_bit_rate_kbps The video bit rate in kilobits per second.
     *
     * @return self
     */
    public function setVideoBitRateKbps($video_bit_rate_kbps)
    {
        if (is_null($video_bit_rate_kbps)) {
            throw new \InvalidArgumentException('non-nullable video_bit_rate_kbps cannot be null');
        }
        $this->container['video_bit_rate_kbps'] = $video_bit_rate_kbps;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return int|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param int|null $profile The profile setting for the video.
     *
     * @return self
     */
    public function setProfile($profile)
    {
        if (is_null($profile)) {
            array_push($this->openAPINullablesSetToNull, 'profile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['profile'] = $profile;

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


