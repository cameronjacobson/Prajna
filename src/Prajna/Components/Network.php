<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Network
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create_new_blob($network,$name,$mime_type,$public){
		return $this->doCall('network.create_new_blob',array(
			$this->session_id,
			$network,
			$name,
			$mime_type,
			$public
		));
	}

	public function set_default_locking_mode($network,$locking_mode){
		return $this->doCall('network.set_default_locking_mode',array(
			$this->session_id,
			$network,
			$locking_mode
		));
	}

	public function get_all(){
		return $this->doCall('network.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('network.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($network){
		return $this->doCall('network.get_uuid',array(
			$this->session_id,
			$network
		));
	}

	public function get_name_label($network){
		return $this->doCall('network.get_name_label',array(
			$this->session_id,
			$network
		));
	}

	public function set_name_label($network,$label){
		return $this->doCall('network.set_name_label',array(
			$this->session_id,
			$network,
			$label
		));
	}

	public function get_name_description($network){
		return $this->doCall('network.get_name_description',array(
			$this->session_id,
			$network
		));
	}

	public function set_name_description($network,$description){
		return $this->doCall('network.set_name_description',array(
			$this->session_id,
			$network,
			$description
		));
	}

	public function get_allowed_operations($network){
		return $this->doCall('network.get_allowed_operations',array(
			$this->session_id,
			$network
		));
	}

	public function get_current_operations($network){
		return $this->doCall('network.get_current_operations',array(
			$this->session_id,
			$network
		));
	}


	public function get_VIFs($network){
		return $this->doCall('network.get_VIFs',array(
			$this->session_id,
			$network
		));
	}

	public function get_PIFs($network){
		return $this->doCall('network.get_PIFs',array(
			$this->session_id,
			$network
		));
	}

	public function get_MTU($network){
		return $this->doCall('network.get_MTU',array(
			$this->session_id,
			$network
		));
	}

	public function set_MTU($network,$value){
		return $this->doCall('network.set_MTU',array(
			$this->session_id,
			$network,
			$value
		));
	}

	public function get_other_config($network){
		return $this->doCall('network.get_other_config',array(
			$this->session_id,
			$network
		));
	}

	public function set_other_config($network,Array $config){
		return $this->doCall('network.set_other_config',array(
			$this->session_id,
			$network,
			$config
		));
	}

	public function add_to_other_config($network,$key,$value){
		return $this->doCall('network.add_to_other_config',array(
			$this->session_id,
			$network,
			$key,
			$value
		));
	}

	public function remove_from_other_config($network,$key){
		return $this->doCall('network.remove_from_other_config',array(
			$this->session_id,
			$network,
			$key
		));
	}

	public function get_bridge($network){
		return $this->doCall('network.get_bridge',array(
			$this->session_id,
			$network
		));
	}

	public function get_blobs($network){
		return $this->doCall('network.get_blobs',array(
			$this->session_id,
			$network
		));
	}

	public function get_tags($network){
		return $this->doCall('network.get_tags',array(
			$this->session_id,
			$network
		));
	}

	public function set_tags($network,Array $tags){
		return $this->doCall('network.set_tags',array(
			$this->session_id,
			$network,
			$tags
		));
	}

	public function add_tags($network,$tags){
		return $this->doCall('network.add_tags',array(
			$this->session_id,
			$network,
			$tags
		));
	}

	public function remove_tags($network,$tags){
		return $this->doCall('network.remove_tags',array(
			$this->session_id,
			$network,
			$tags
		));
	}

	public function get_default_gateway($network){
		return $this->doCall('network.get_default_gateway',array(
			$this->session_id,
			$network
		));
	}

	public function create(Array $NetworkRecord){
		return $this->doCall('network.create',array(
			$this->session_id,
			$NetworkRecord
		));
	}

	public function destroy($network){
		return $this->doCall('network.destroy',array(
			$this->session_id,
			$network
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('network.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($network){
		return $this->doCall('network.get_record',array(
			$this->session_id,
			$network
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('network.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
