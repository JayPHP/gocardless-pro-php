<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources\Wrapper;

/**
  * NestedObject shim. Allows one to get properties of a nested object using
  * dynamic getter methods.
  * @author Iain Nash
  * @package GoCardless
  * @subpackage \Resources\Wrapper
  */
class NestedObject
{
	function __construct($name, $data)
	{
		$this->name = $name;
		$this->data = $data;
	}

	function __call($name, $arguments)
	{
		if (count($arguments) === 0 && property_exists($this->data, $name)) {
			$value = $this->data->{$name};
			if (is_object($value)) {
				return new NestedObject($name, $value);
			} else {
				return $value;
			}
		}
		return false;
	}

	function __toString()
	{
		return $this->name . ' ' . print_r($this->data, true);
	}
}