<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VMAppliance
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function start($VM_appliance,$start_paused,$force){
		return $this->doCall('VM_appliance.start',array(
			$this->session_id,
			$VM_appliance,
			$start_paused,
			$force
		));
	}
	public function clean_shutdown($VM_appliance){
		return $this->doCall('VM_appliance.clean_shutdown',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function hard_shutdown($VM_appliance){
		return $this->doCall('VM_appliance.hard_shutdown',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function shutdown($VM_appliance){
		return $this->doCall('VM_appliance.shutdown',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function assert_can_be_recovered($VM_appliance,$session_to){
		return $this->doCall('VM_appliance.assert_can_be_recovered',array(
			$this->session_id,
			$VM_appliance,
			$session_to
		));
	}
	public function recover($VM_appliance,$session_to,$force){
		return $this->doCall('VM_appliance.recover',array(
			$this->session_id,
			$VM_appliance,
			$session_to,
			$force
		));
	}

	public function get_all(){
		return $this->doCall('VM_appliance.get_all',array(
			$this->session_id
		));
	}
	public function get_all_records(){
		return $this->doCall('VM_appliance.get_all_records',array(
			$this->session_id
		));
	}
	public function get_uuid($VM_appliance){
		return $this->doCall('VM_appliance.get_uuid',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function get_name_label($VM_appliance){
		return $this->doCall('VM_appliance.get_name_label',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function set_name_label($VM_appliance,$label){
		return $this->doCall('VM_appliance.set_name_label',array(
			$this->session_id,
			$VM_appliance,
			$label
		));
	}
	public function get_name_description($VM_appliance){
		return $this->doCall('VM_appliance.get_name_description',array(
			$this->session_id,
			$VM_appliance
		));
	}

	public function set_name_description($VM_appliance,$description){
		return $this->doCall('VM_appliance.set_name_description',array(
			$this->session_id,
			$VM_appliance,
			$description
		));
	}

	public function get_allowed_operations($VM_appliance){
		return $this->doCall('VM_appliance.get_allowed_operations',array(
			$this->session_id,
			$VM_appliance
		));
	}
	public function get_current_operations($VM_appliance){
		return $this->doCall('VM_appliance.get_current_operations',array(
			$this->session_id,
			$VM_appliance
		));
	}

	public function get_VMs($VM_appliance){
		return $this->doCall('VM_appliance.get_VMs',array(
			$this->session_id,
			$VM_appliance
		));
	}

	public function create(Array $VM_applianceRecord){
		return $this->doCall('VM_appliance.create',array(
			$this->session_id,
			$VM_applianceRecord
		));
	}

	public function destroy($VM_appliance){
		return $this->doCall('VM_appliance.destroy',array(
			$this->session_id,
			$VM_appliance
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VM_appliance.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VM_appliance){
		return $this->doCall('VM_appliance.get_record',array(
			$this->session_id,
			$VM_appliance
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('VM_appliance.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
