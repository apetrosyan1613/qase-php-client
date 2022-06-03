<?php
/**
 * RunStats
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Qase.io API
 *
 * Qase API Specification.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@qase.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Qase\Client\Model;

use \ArrayAccess;
use \Qase\Client\ObjectSerializer;

/**
 * RunStats Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RunStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Run_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'int',
        'untested' => 'int',
        'passed' => 'int',
        'failed' => 'int',
        'blocked' => 'int',
        'skipped' => 'int',
        'retest' => 'int',
        'inProgress' => 'int',
        'invalid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total' => null,
        'untested' => null,
        'passed' => null,
        'failed' => null,
        'blocked' => null,
        'skipped' => null,
        'retest' => null,
        'inProgress' => null,
        'invalid' => null
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
        'total' => 'total',
        'untested' => 'untested',
        'passed' => 'passed',
        'failed' => 'failed',
        'blocked' => 'blocked',
        'skipped' => 'skipped',
        'retest' => 'retest',
        'inProgress' => 'in_progress',
        'invalid' => 'invalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'untested' => 'setUntested',
        'passed' => 'setPassed',
        'failed' => 'setFailed',
        'blocked' => 'setBlocked',
        'skipped' => 'setSkipped',
        'retest' => 'setRetest',
        'inProgress' => 'setInProgress',
        'invalid' => 'setInvalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'untested' => 'getUntested',
        'passed' => 'getPassed',
        'failed' => 'getFailed',
        'blocked' => 'getBlocked',
        'skipped' => 'getSkipped',
        'retest' => 'getRetest',
        'inProgress' => 'getInProgress',
        'invalid' => 'getInvalid'
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
        $this->container['total'] = $data['total'] ?? null;
        $this->container['untested'] = $data['untested'] ?? null;
        $this->container['passed'] = $data['passed'] ?? null;
        $this->container['failed'] = $data['failed'] ?? null;
        $this->container['blocked'] = $data['blocked'] ?? null;
        $this->container['skipped'] = $data['skipped'] ?? null;
        $this->container['retest'] = $data['retest'] ?? null;
        $this->container['inProgress'] = $data['inProgress'] ?? null;
        $this->container['invalid'] = $data['invalid'] ?? null;
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
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets untested
     *
     * @return int|null
     */
    public function getUntested()
    {
        return $this->container['untested'];
    }

    /**
     * Sets untested
     *
     * @param int|null $untested untested
     *
     * @return self
     */
    public function setUntested($untested)
    {
        $this->container['untested'] = $untested;

        return $this;
    }

    /**
     * Gets passed
     *
     * @return int|null
     */
    public function getPassed()
    {
        return $this->container['passed'];
    }

    /**
     * Sets passed
     *
     * @param int|null $passed passed
     *
     * @return self
     */
    public function setPassed($passed)
    {
        $this->container['passed'] = $passed;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return int|null
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param int|null $failed failed
     *
     * @return self
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return int|null
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param int|null $blocked blocked
     *
     * @return self
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets skipped
     *
     * @return int|null
     */
    public function getSkipped()
    {
        return $this->container['skipped'];
    }

    /**
     * Sets skipped
     *
     * @param int|null $skipped skipped
     *
     * @return self
     */
    public function setSkipped($skipped)
    {
        $this->container['skipped'] = $skipped;

        return $this;
    }

    /**
     * Gets retest
     *
     * @return int|null
     */
    public function getRetest()
    {
        return $this->container['retest'];
    }

    /**
     * Sets retest
     *
     * @param int|null $retest retest
     *
     * @return self
     */
    public function setRetest($retest)
    {
        $this->container['retest'] = $retest;

        return $this;
    }

    /**
     * Gets inProgress
     *
     * @return int|null
     */
    public function getInProgress()
    {
        return $this->container['inProgress'];
    }

    /**
     * Sets inProgress
     *
     * @param int|null $inProgress inProgress
     *
     * @return self
     */
    public function setInProgress($inProgress)
    {
        $this->container['inProgress'] = $inProgress;

        return $this;
    }

    /**
     * Gets invalid
     *
     * @return int|null
     */
    public function getInvalid()
    {
        return $this->container['invalid'];
    }

    /**
     * Sets invalid
     *
     * @param int|null $invalid invalid
     *
     * @return self
     */
    public function setInvalid($invalid)
    {
        $this->container['invalid'] = $invalid;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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

