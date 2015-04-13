<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * Publishable API keys are designed to be used by the [js
  * flow](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-account-tokens).
  * You should generate a key and then use it to make requests to the API. They
  * do not expire, but can be disabled.
  * 
  * Publishable API keys only have
  * permissions to create [customer bank account
  * tokens](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-account-tokens).
  */
class PublishableApiKey extends Base
{



  /**
    * Fixed
    * [timestamp](https://developer.gocardless.com/pro/#overview-time-zones-dates),
    * recording when this resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Boolean value showing whether the API key is enabled or disabled.
    *
    * @return bool
    */
    public function enabled()
    {
        $field = 'enabled';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "PK"
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Secret key.
    *
    * @return string
    */
    public function key()
    {
        $field = 'key';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Human readable name for the key. This should not exceed 75 characters.
    *
    * @return string
    */
    public function name()
    {
        $field = 'name';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'PublishableApiKey Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
