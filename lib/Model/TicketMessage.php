<?php
/**
 * TicketMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ngDesk_Operations
 *
 * ngDesk_Operations
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * TicketMessage Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TicketMessage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ticket_message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ticket_message_id' => 'int',
        'ticket_id' => 'int',
        'body' => 'string',
        'user_id' => 'int',
        'date_created' => '\DateTime',
        'company_id' => 'int',
        'ticket_attachments' => '\Swagger\Client\Model\Attachment[]',
        'element1' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ticket_message_id' => null,
        'ticket_id' => null,
        'body' => null,
        'user_id' => null,
        'date_created' => 'date-time',
        'company_id' => null,
        'ticket_attachments' => null,
        'element1' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ticket_message_id' => 'TICKET_MESSAGE_ID',
        'ticket_id' => 'TICKET_ID',
        'body' => 'BODY',
        'user_id' => 'USER_ID',
        'date_created' => 'DATE_CREATED',
        'company_id' => 'COMPANY_ID',
        'ticket_attachments' => 'TICKET_ATTACHMENTS',
        'element1' => 'element1'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ticket_message_id' => 'setTicketMessageId',
        'ticket_id' => 'setTicketId',
        'body' => 'setBody',
        'user_id' => 'setUserId',
        'date_created' => 'setDateCreated',
        'company_id' => 'setCompanyId',
        'ticket_attachments' => 'setTicketAttachments',
        'element1' => 'setElement1'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ticket_message_id' => 'getTicketMessageId',
        'ticket_id' => 'getTicketId',
        'body' => 'getBody',
        'user_id' => 'getUserId',
        'date_created' => 'getDateCreated',
        'company_id' => 'getCompanyId',
        'ticket_attachments' => 'getTicketAttachments',
        'element1' => 'getElement1'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ticket_message_id'] = isset($data['ticket_message_id']) ? $data['ticket_message_id'] : null;
        $this->container['ticket_id'] = isset($data['ticket_id']) ? $data['ticket_id'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['ticket_attachments'] = isset($data['ticket_attachments']) ? $data['ticket_attachments'] : null;
        $this->container['element1'] = isset($data['element1']) ? $data['element1'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets ticket_message_id
     * @return int
     */
    public function getTicketMessageId()
    {
        return $this->container['ticket_message_id'];
    }

    /**
     * Sets ticket_message_id
     * @param int $ticket_message_id
     * @return $this
     */
    public function setTicketMessageId($ticket_message_id)
    {
        $this->container['ticket_message_id'] = $ticket_message_id;

        return $this;
    }

    /**
     * Gets ticket_id
     * @return int
     */
    public function getTicketId()
    {
        return $this->container['ticket_id'];
    }

    /**
     * Sets ticket_id
     * @param int $ticket_id
     * @return $this
     */
    public function setTicketId($ticket_id)
    {
        $this->container['ticket_id'] = $ticket_id;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets company_id
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     * @param int $company_id
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets ticket_attachments
     * @return \Swagger\Client\Model\Attachment[]
     */
    public function getTicketAttachments()
    {
        return $this->container['ticket_attachments'];
    }

    /**
     * Sets ticket_attachments
     * @param \Swagger\Client\Model\Attachment[] $ticket_attachments
     * @return $this
     */
    public function setTicketAttachments($ticket_attachments)
    {
        $this->container['ticket_attachments'] = $ticket_attachments;

        return $this;
    }

    /**
     * Gets element1
     * @return string
     */
    public function getElement1()
    {
        return $this->container['element1'];
    }

    /**
     * Sets element1
     * @param string $element1
     * @return $this
     */
    public function setElement1($element1)
    {
        $this->container['element1'] = $element1;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


