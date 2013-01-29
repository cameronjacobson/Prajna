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
		return $this->doCall('event.register',array(
			$this->session_id,
			$EventList
		));
	}

	public function unregister(Array $EventList){
		return $this->doCall('event.unregister',array(
			$this->session_id,
			$EventList
		));
	}

	public function next(){
		return $this->doCall('event.next',array(
			$this->session_id
		));
	}

	public function from(Array $classes,$token,$timeout){
		return $this->doCall('event.from',array(
			$this->session_id,
			$classes,
			$token,
			$timeout
		));
	}

	public function get_current_id(){
		return $this->doCall('event.get_current_id',array(
			$this->session_id
		));
	}

	public function inject($class,$obj_ref){
		return $this->doCall('event.inject',array(
			$this->session_id,
			$class,
			$obj_ref
		));
	}
}
