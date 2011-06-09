<?php

class Plesk_Gateway_Parameters extends \ArrayObject
{

	/**
	 * initialize the parameters. optionally populate
	 * at construct
	 * @param array $params
	 */
	public function __construct(array $params = array())
	{

		parent::__construct($params);

	}

	/**
	 * wrap around checking if a given key exists in the array
	 * return null if no key exists
	 * @param string $key
	 * @return mixed
	 */
    public function __get($key)
    {

    	$key = (string)$key;
        return $this->offsetExists($key)
        	? $this->offsetGet($key) : null;

    }

}