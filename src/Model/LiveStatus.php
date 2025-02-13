<?php
/**
 * LiveStatus
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
 * The version of the OpenAPI document: 1.7
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Api42Vb\Client\Model;
use \Api42Vb\Client\ObjectSerializer;

/**
 * LiveStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the live : * &#39;ONLINE&#39;: the live is online the stream is being delivered                                  * &#39;OFFLINE&#39;: live is off no streams to stream yet * &#39;ERROR&#39; : an error on live delivery
 * @package  Api42Vb\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LiveStatus
{
    /**
     * Possible values of this enum
     */
    public const ONLINE = 'ONLINE';

    public const OFFLINE = 'OFFLINE';

    public const ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONLINE,
            self::OFFLINE,
            self::ERROR
        ];
    }
}


