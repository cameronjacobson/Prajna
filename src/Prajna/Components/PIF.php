<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PIF
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create_VLAN($device,$network,$host,$VLAN){
		return $this->doCall('PIF.create_VLAN',array(
			$this->session_id,
			$device,
			$network,
			$host,
			$VLAN
		));
	}

	public function destroy($PIF){
		return $this->doCall('PIF.destroy',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_all(){
		return $this->doCall('PIF.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($PIF){
		return $this->doCall('PIF.get_uuid',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_device($PIF){
		return $this->doCall('PIF.get_device',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_device($PIF,$device){
		return $this->doCall('PIF.set_device',array(
			$this->session_id,
			$PIF,
			$device
		));
	}

	public function get_network($PIF){
		return $this->doCall('PIF.get_network',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_host($PIF){
		return $this->doCall('PIF.get_host',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_MAC($PIF){
		return $this->doCall('PIF.get_MAC',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_MAC($PIF,$MAC){
		return $this->doCall('PIF.set_MAC',array(
			$this->session_id,
			$PIF,
			$MAC
		));
	}

	public function get_MTU($PIF){
		return $this->doCall('PIF.get_MTU',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_MTU($PIF,$MTU){
		return $this->doCall('PIF.set_MTU',array(
			$this->session_id,
			$PIF,
			$MTU
		));
	}

	public function get_VLAN($PIF){
		return $this->doCall('PIF.get_VLAN',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_VLAN($PIF,$VLAN){
		return $this->doCall('PIF.set_VLAN',array(
			$this->session_id,
			$PIF,
			$VLAN
		));
	}

	public function get_metrics($PIF){
		return $this->doCall('PIF.get_metrics',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('PIF.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($PIF){
		return $this->doCall('PIF.get_record',array(
			$this->session_id,
			$PIF
		));
	}
}
