<?php
/**
 * Hook
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  EConnect\Psb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PSB API 1.0
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: techsupport@econnect.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EConnect\Psb\Model;

use \ArrayAccess;
use \EConnect\Psb\ObjectSerializer;

/**
 * Hook Class Doc Comment
 *
 * @category Class
 * @package  EConnect\Psb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Hook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Hook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'action' => 'string',
        'topics' => 'string[]',
        'publish_topics' => 'string[]',
        'init' => 'array<string,mixed>',
        'is_active' => 'bool',
        'created_on' => '\DateTime',
        'changed_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'action' => null,
        'topics' => null,
        'publish_topics' => null,
        'init' => null,
        'is_active' => null,
        'created_on' => 'date-time',
        'changed_on' => 'date-time'
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
        'action' => 'action',
        'topics' => 'topics',
        'publish_topics' => 'publishTopics',
        'init' => 'init',
        'is_active' => 'isActive',
        'created_on' => 'createdOn',
        'changed_on' => 'changedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'action' => 'setAction',
        'topics' => 'setTopics',
        'publish_topics' => 'setPublishTopics',
        'init' => 'setInit',
        'is_active' => 'setIsActive',
        'created_on' => 'setCreatedOn',
        'changed_on' => 'setChangedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'action' => 'getAction',
        'topics' => 'getTopics',
        'publish_topics' => 'getPublishTopics',
        'init' => 'getInit',
        'is_active' => 'getIsActive',
        'created_on' => 'getCreatedOn',
        'changed_on' => 'getChangedOn'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['topics'] = $data['topics'] ?? null;
        $this->container['publish_topics'] = $data['publish_topics'] ?? null;
        $this->container['init'] = $data['init'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['changed_on'] = $data['changed_on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 64)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
        }

        if (!preg_match("/[A-Za-z0-9-=]+/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[A-Za-z0-9-=]+/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique Id
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Hook., must be smaller than or equal to 64.');
        }
        if ((!preg_match("/[A-Za-z0-9-=]+/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Hook., must conform to the pattern /[A-Za-z0-9-=]+/.");
        }

        $this->container['id'] = $id;

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
     * @param string $name Display name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Action that must be pushed. Can be mailto: or http:
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return string[]|null
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param string[]|null $topics Event topics where the action must be triggered on
     *
     * @return self
     */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;

        return $this;
    }

    /**
     * Gets publish_topics
     *
     * @return string[]|null
     */
    public function getPublishTopics()
    {
        return $this->container['publish_topics'];
    }

    /**
     * Sets publish_topics
     *
     * @param string[]|null $publish_topics Event topics that can be used for publishing
     *
     * @return self
     */
    public function setPublishTopics($publish_topics)
    {
        $this->container['publish_topics'] = $publish_topics;

        return $this;
    }

    /**
     * Gets init
     *
     * @return array<string,mixed>|null
     */
    public function getInit()
    {
        return $this->container['init'];
    }

    /**
     * Sets init
     *
     * @param array<string,mixed>|null $init Additional arguments used to initialize the hook.
     *
     * @return self
     */
    public function setInit($init)
    {
        $this->container['init'] = $init;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets changed_on
     *
     * @return \DateTime|null
     */
    public function getChangedOn()
    {
        return $this->container['changed_on'];
    }

    /**
     * Sets changed_on
     *
     * @param \DateTime|null $changed_on changed_on
     *
     * @return self
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

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


