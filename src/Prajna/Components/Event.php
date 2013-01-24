<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Event
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function register(Array $EventList){
		return $this->doCall('Event.register',array(
			$this->session_id,
			$EventList
		));
	}
	public function unregister(Array $EventList){
		return $this->doCall('Event.unregister',array(
			$this->session_id,
			$EventList
		));
	}
	public function next(){
		return $this->doCall('Event.next',array(
			$this->session_id
		));
	}
}
