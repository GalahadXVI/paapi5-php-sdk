<?php

/**
 * Copyright 2020 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1;

use \ArrayAccess;
use \Amazon\ProductAdvertisingAPI\v1\ObjectSerializer;

/**
 * VariationSummary Class Doc Comment
 *
 * @category Class
 * @package  Amazon\ProductAdvertisingAPI\v1
 * @author   Product Advertising API team
 */
class VariationSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VariationSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageCount' => 'int',
        'price' => '\Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\Price',
        'variationCount' => 'int',
        'variationDimensions' => '\Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\VariationDimension[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageCount' => 'int32',
        'price' => null,
        'variationCount' => 'int32',
        'variationDimensions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pageCount' => 'PageCount',
        'price' => 'Price',
        'variationCount' => 'VariationCount',
        'variationDimensions' => 'VariationDimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageCount' => 'setPageCount',
        'price' => 'setPrice',
        'variationCount' => 'setVariationCount',
        'variationDimensions' => 'setVariationDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageCount' => 'getPageCount',
        'price' => 'getPrice',
        'variationCount' => 'getVariationCount',
        'variationDimensions' => 'getVariationDimensions'
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
        return self::$swaggerModelName;
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
    public function __construct(?array $data = null)
    {
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['variationCount'] = isset($data['variationCount']) ? $data['variationCount'] : null;
        $this->container['variationDimensions'] = isset($data['variationDimensions']) ? $data['variationDimensions'] : null;
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
     * Gets pageCount
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param int $pageCount pageCount
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\Price $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets variationCount
     *
     * @return int
     */
    public function getVariationCount()
    {
        return $this->container['variationCount'];
    }

    /**
     * Sets variationCount
     *
     * @param int $variationCount variationCount
     *
     * @return $this
     */
    public function setVariationCount($variationCount)
    {
        $this->container['variationCount'] = $variationCount;

        return $this;
    }

    /**
     * Gets variationDimensions
     *
     * @return \Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\VariationDimension[]
     */
    public function getVariationDimensions()
    {
        return $this->container['variationDimensions'];
    }

    /**
     * Sets variationDimensions
     *
     * @param \Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\VariationDimension[] $variationDimensions variationDimensions
     *
     * @return $this
     */
    public function setVariationDimensions($variationDimensions)
    {
        $this->container['variationDimensions'] = $variationDimensions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
