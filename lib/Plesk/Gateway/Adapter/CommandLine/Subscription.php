<?php

/** @var Plesk_Gateway_SubscriptionGateway */
require_once 'Plesk/Gateway/SubscriptionGateway.php';

/** @var Plesk_Gateway_Adapter_CommandLine */
require_once 'Plesk/Gateway/Adapter/CommandLine.php';

class Plesk_Gateway_Adapter_CommandLine_Subscription
	extends Plesk_Gateway_Adapter_CommandLine
	implements Plesk_Gateway_SubscriptionGateway
{

	public function create($name, Plesk_Gateway_Parameters $params)
	{

		$ret = $this->_execute('subscription', 'create ' . $name, $params);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

	public function delete($name)
	{

		$ret = $this->_execute('subscription', 'remove ' . $name);

		if (!$ret->getReturnValue()) {
			return true;
		}

		return false;

	}

}
