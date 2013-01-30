<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PCI
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('PCI.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('PCI.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($PCI){
		return $this->doCall('PCI.get_uuid',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_class_name($PCI){
		return $this->doCall('PCI.get_class_name',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_vendor_name($PCI){
		return $this->doCall('PCI.get_vendor_name',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_device_name($PCI){
		return $this->doCall('PCI.get_device_id',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_host($PCI){
		return $this->doCall('PCI.get_host',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_pci_id($PCI){
		return $this->doCall('PCI.get_pci_id',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_dependencies($PCI){
		return $this->doCall('PCI.get_dependencies',array(
			$this->session_id,
			$PCI
		));
	}

	public function get_other_config($PCI){
		return $this->doCall('PCI.get_other_config',array(
			$this->session_id,
			$PCI
		));
	}

	public function set_other_config($PCI,Array $config){
		return $this->doCall('PCI.set_other_config',array(
			$this->session_id,
			$PCI,
			$config
		));
	}

	public function add_to_other_config($PCI,$key,$value){
		return $this->doCall('PCI.add_to_other_config',array(
			$this->session_id,
			$PCI,
			$key,
			$value
		));
	}

	public function remove_from_other_config($PCI,$key){
		return $this->doCall('PCI.remove_from_other_config',array(
			$this->session_id,
			$PCI,
			$key
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('PCI.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($PCI){
		return $this->doCall('PCI.get_record',array(
			$this->session_id,
			$PCI
		));
	}
}
