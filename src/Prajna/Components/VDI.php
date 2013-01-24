<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VDI
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('VDI.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($VDI){
		return $this->doCall('VDI.get_uuid',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_name_label($VDI){
		return $this->doCall('VDI.get_name_label',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_name_label($VBD,$label){
		return $this->doCall('VDI.set_name_label',array(
			$this->session_id,
			$VDI,
			$label
		));
	}

	public function get_name_description($VBD){
		return $this->doCall('VDI.get_name_description',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_name_description($VBD,$description){
		return $this->doCall('VDI.set_name_description',array(
			$this->session_id,
			$VDI,
			$description
		));
	}

	public function get_SR($VDI){
		return $this->doCall('VDI.get_SR',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_VBDs($VDI){
		return $this->doCall('VDI.get_VBDs',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_crash_dumps($VDI){
		return $this->doCall('VDI.get_crash_dumps',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_virtual_size($VDI){
		return $this->doCall('VDI.get_virtual_size',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_virtual_size($VDI,$size){
		return $this->doCall('VDI.set_virtual_size',array(
			$this->session_id,
			$VDI,
			$size
		));
	}

	public function get_physical_utilisation($VDI){
		return $this->doCall('VDI.get_physical_utilisation',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_type($VDI){
		return $this->doCall('VDI.get_type',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_sharable($VDI){
		return $this->doCall('VDI.get_sharable',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_sharable($VDI,$sharable){
		return $this->doCall('VDI.set_sharable',array(
			$this->session_id,
			$VDI,
			$sharable
		));
	}

	public function get_read_only($VDI){
		return $this->doCall('VDI.get_read_only',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_read_only($VDI,$readonly){
		return $this->doCall('VDI.get_uuid',array(
			$this->session_id,
			$VDI,
			$readonly
		));
	}

	public function get_other_config($VDI){
		return $this->doCall('VDI.get_other_config',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_other_config($VDI,Array $config){
		return $this->doCall('VDI.set_other_config',array(
			$this->session_id,
			$VDI,
			$config
		));
	}

	public function add_to_other_config($VDI,$key,$value){
		return $this->doCall('VDI.add_to_other_config',array(
			$this->session_id,
			$VDI,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VDI,$key){
		return $this->doCall('VDI.remove_from_other_config',array(
			$this->session_id,
			$VDI,
			$key
		));
	}

	public function set_security_label($VDI,$label,$oldlabel){
		return $this->doCall('VDI.set_security_label',array(
			$this->session_id,
			$VDI,
			$label,
			$oldlabel
		));
	}

	public function get_security_label($VDI){
		return $this->doCall('VDI.get_security_label',array(
			$this->session_id,
			$VDI
		));
	}

	public function create(Array $VDIRecord){
		return $this->doCall('VDI.create',array(
			$this->session_id,
			$VDIRecord
		));
	}

	public function destroy($VDI){
		return $this->doCall('VDI.destroy',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VDI.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VDI){
		return $this->doCall('VDI.get_record',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('VDI.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
