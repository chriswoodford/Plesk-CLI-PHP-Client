<?php
/*
 * Copyright 2011 Offshoot Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/** @var Plesk_Gateway_Parameters */
require_once 'Plesk/Gateway/Parameters.php';

/**
 * Gateway to Plesk customers
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @author Chris Woodford <chris@offshootinc.com>
 *
 * @package Plesk
 * @subpackage Gateway
 */
interface Plesk_Gateway_CustomerGateway
{

	/**
	 * create a new customer
	 * @param string $name
	 * @param Plesk_Gateway_Parameters $params
	 * @return boolean
	 */
	public function create($name, Plesk_Gateway_Parameters $params);

	/**
	 * delete an existing customer
	 * @param string $name
	 * @return boolean
	 */
	public function delete($name);

}
