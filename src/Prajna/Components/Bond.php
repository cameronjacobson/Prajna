<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Bond
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($network,Array $members,$MAC,$mode,Array $properties){
		return $this->doCall('Bond.create',array(
			$this->session_id,
			$network,
			$members,
			$MAC,
			$mode,
			$properties
		));
	}

	public function destroy($Bond){
		return $this->doCall('Bond.destroy',array(
			$this->session_id,
			$Bond
		));
	}

	public function set_mode($Bond,$mode){
		return $this->doCall('Bond.set_mode',array(
			$this->session_id,
			$Bond,
			$mode
		));
	}

	public function set_property($Bond,$key,$value){
		return $this->doCall('Bond.set_property',array(
			$this->session_id,
			$Bond,
			$key,
			$value
		));
	}

	public function get_all(){
		return $this->doCall('Bond.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('Bond.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($Bond){
		return $this->doCall('Bond.get_uuid',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_master($Bond){
		return $this->doCall('Bond.get_master',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_slaves($Bond){
		return $this->doCall('Bond.get_slaves',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_other_config($Bond){
		return $this->doCall('Bond.get_other_config',array(
			$this->session_id,
			$Bond
		));
	}

	public function set_other_config($Bond,Array $config){
		return $this->doCall('Bond.set_other_config',array(
			$this->session_id,
			$Bond,
			$config
		));
	}

	public function add_to_other_config($Bond,$key,$value){
		return $this->doCall('Bond.add_to_other_config',array(
			$this->session_id,
			$Bond,
			$key,
			$value
		));
	}

	public function remove_from_other_config($Bond,$key){
		return $this->doCall('Bond.remove_from_other_config',array(
			$this->session_id,
			$Bond,
			$key
		));
	}

	public function get_primary_slave($Bond){
		return $this->doCall('Bond.get_primary_slave',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_mode($Bond){
		return $this->doCall('Bond.get_mode',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_properties($Bond){
		return $this->doCall('Bond.get_properties',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_links_up($Bond){
		return $this->doCall('Bond.get_links_up',array(
			$this->session_id,
			$Bond
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('Bond.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($Bond){
		return $this->doCall('Bond.get_record',array(
			$this->session_id,
			$Bond
		));
	}
}
