<?php
class Input extends Laravel\Input
{
	/**
	 * Get an item from the input data.
	 * This method overrides the default behaviour in order to store NULL in database 
	 * when the form returns an empty string for a form Input - the default Input::get()
	 * will not see this as NULL
	 * @param  string  $key
	 * @param  mixed   $default
	 * @return string
	 */
	public static function get($key = null, $default = null)
	{
		if ( ! is_null($key))
		{
			return (($item = parent::get($key, $default)) === '') ? null : $item;
		}
		return array_map(function($value) {return ($value === '') ? null : $value;}, parent::get());
	}
}