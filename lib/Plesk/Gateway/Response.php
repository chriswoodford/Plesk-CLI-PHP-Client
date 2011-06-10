<?php

interface Plesk_Gateway_Response
{

	/**
	 * get the return value from the executed program
	 * @return int
	 */
	public function getReturnValue();

	/**
	 * get the output returned by the executed program
	 * @return string
	 */
	public function getOutput();

}
