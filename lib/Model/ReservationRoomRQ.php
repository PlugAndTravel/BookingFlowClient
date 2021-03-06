<?php
/**
 * ReservationRoomRQ
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PlugAndTravel.BookingAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ReservationRoomRQ Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReservationRoomRQ implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReservationRoomRQ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'code' => 'string',
        'name' => 'string',
        'hotel_code' => 'string',
        'provider_hotel_code' => 'string',
        'provider' => 'string',
        'total_reservation_price' => 'double',
        'currency' => 'string',
        'meal' => '\Swagger\Client\Model\Meal',
        'tokens' => '\Swagger\Client\Model\Token[]',
        'occupancy' => '\Swagger\Client\Model\Occupancy',
        'guest' => '\Swagger\Client\Model\Guest'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'code' => 'Code',
        'name' => 'Name',
        'hotel_code' => 'HotelCode',
        'provider_hotel_code' => 'ProviderHotelCode',
        'provider' => 'Provider',
        'total_reservation_price' => 'TotalReservationPrice',
        'currency' => 'Currency',
        'meal' => 'Meal',
        'tokens' => 'Tokens',
        'occupancy' => 'Occupancy',
        'guest' => 'Guest'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'code' => 'setCode',
        'name' => 'setName',
        'hotel_code' => 'setHotelCode',
        'provider_hotel_code' => 'setProviderHotelCode',
        'provider' => 'setProvider',
        'total_reservation_price' => 'setTotalReservationPrice',
        'currency' => 'setCurrency',
        'meal' => 'setMeal',
        'tokens' => 'setTokens',
        'occupancy' => 'setOccupancy',
        'guest' => 'setGuest'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'code' => 'getCode',
        'name' => 'getName',
        'hotel_code' => 'getHotelCode',
        'provider_hotel_code' => 'getProviderHotelCode',
        'provider' => 'getProvider',
        'total_reservation_price' => 'getTotalReservationPrice',
        'currency' => 'getCurrency',
        'meal' => 'getMeal',
        'tokens' => 'getTokens',
        'occupancy' => 'getOccupancy',
        'guest' => 'getGuest'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hotel_code'] = isset($data['hotel_code']) ? $data['hotel_code'] : null;
        $this->container['provider_hotel_code'] = isset($data['provider_hotel_code']) ? $data['provider_hotel_code'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['total_reservation_price'] = isset($data['total_reservation_price']) ? $data['total_reservation_price'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['meal'] = isset($data['meal']) ? $data['meal'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
        $this->container['occupancy'] = isset($data['occupancy']) ? $data['occupancy'] : null;
        $this->container['guest'] = isset($data['guest']) ? $data['guest'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['hotel_code'] === null) {
            $invalid_properties[] = "'hotel_code' can't be null";
        }
        if ($this->container['provider_hotel_code'] === null) {
            $invalid_properties[] = "'provider_hotel_code' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalid_properties[] = "'provider' can't be null";
        }
        if ($this->container['total_reservation_price'] === null) {
            $invalid_properties[] = "'total_reservation_price' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['tokens'] === null) {
            $invalid_properties[] = "'tokens' can't be null";
        }
        if ($this->container['occupancy'] === null) {
            $invalid_properties[] = "'occupancy' can't be null";
        }
        if ($this->container['guest'] === null) {
            $invalid_properties[] = "'guest' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['hotel_code'] === null) {
            return false;
        }
        if ($this->container['provider_hotel_code'] === null) {
            return false;
        }
        if ($this->container['provider'] === null) {
            return false;
        }
        if ($this->container['total_reservation_price'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['tokens'] === null) {
            return false;
        }
        if ($this->container['occupancy'] === null) {
            return false;
        }
        if ($this->container['guest'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets hotel_code
     * @return string
     */
    public function getHotelCode()
    {
        return $this->container['hotel_code'];
    }

    /**
     * Sets hotel_code
     * @param string $hotel_code
     * @return $this
     */
    public function setHotelCode($hotel_code)
    {
        $this->container['hotel_code'] = $hotel_code;

        return $this;
    }

    /**
     * Gets provider_hotel_code
     * @return string
     */
    public function getProviderHotelCode()
    {
        return $this->container['provider_hotel_code'];
    }

    /**
     * Sets provider_hotel_code
     * @param string $provider_hotel_code
     * @return $this
     */
    public function setProviderHotelCode($provider_hotel_code)
    {
        $this->container['provider_hotel_code'] = $provider_hotel_code;

        return $this;
    }

    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets total_reservation_price
     * @return double
     */
    public function getTotalReservationPrice()
    {
        return $this->container['total_reservation_price'];
    }

    /**
     * Sets total_reservation_price
     * @param double $total_reservation_price Requested price for this reservation. In some cases if the provider price will change during booking flow we won't make the reservation.
     * @return $this
     */
    public function setTotalReservationPrice($total_reservation_price)
    {
        $this->container['total_reservation_price'] = $total_reservation_price;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets meal
     * @return \Swagger\Client\Model\Meal
     */
    public function getMeal()
    {
        return $this->container['meal'];
    }

    /**
     * Sets meal
     * @param \Swagger\Client\Model\Meal $meal
     * @return $this
     */
    public function setMeal($meal)
    {
        $this->container['meal'] = $meal;

        return $this;
    }

    /**
     * Gets tokens
     * @return \Swagger\Client\Model\Token[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     * @param \Swagger\Client\Model\Token[] $tokens Tokens received in HotelAvailability or Checkrates (should be the same)
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets occupancy
     * @return \Swagger\Client\Model\Occupancy
     */
    public function getOccupancy()
    {
        return $this->container['occupancy'];
    }

    /**
     * Sets occupancy
     * @param \Swagger\Client\Model\Occupancy $occupancy Occupancy for this room
     * @return $this
     */
    public function setOccupancy($occupancy)
    {
        $this->container['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * Gets guest
     * @return \Swagger\Client\Model\Guest
     */
    public function getGuest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     * @param \Swagger\Client\Model\Guest $guest Main guest name for this room
     * @return $this
     */
    public function setGuest($guest)
    {
        $this->container['guest'] = $guest;

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


