<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class SR
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($host,Array $device_config,$physical_size,$name_label,
		$name_description,$type,$content_type,$shared,Array $sm_config){
		return $this->doCall('SR.create',array(
			$this->session_id,
			$host,
			$device_config,
			$physical_size,
			$name_label,
			$name_description,
			$type,
			$content_type,
			$shared,
			$sm_config
		));
	}

	public function introduce($uuid,$name_label,$name_description,$type,$content_type,
		$shared,Array $sm_config){
		return $this->doCall('SR.introduce',array(
			$this->session_id,
			$uuid,
			$name_label,
			$name_description,
			$type,
			$content_type,
			$shared,
			$sm_config
		));
	}

	public function destroy($SR){
		return $this->doCall('SR.destroy',array(
			$this->session_id,
			$SR
		));
	}

	public function forget($SR){
		return $this->doCall('SR.forget',array(
			$this->session_id,
			$SR
		));
	}

	public function update($SR){
		return $this->doCall('SR.update',array(
			$this->session_id,
			$SR
		));
	}

	public function get_supported_types(){
		return $this->doCall('SR.get_supported_types',array(
			$this->session_id
		));
	}

	public function scan($SR){
		return $this->doCall('SR.scan',array(
			$this->session_id,
			$SR
		));
	}

	public function probe($host,Array $device_config,$type,Array $sm_config){
		return $this->doCall('SR.probe',array(
			$this->session_id,
			$host,
			$device_config,
			$type,
			$sm_config
		));
	}

	public function set_shared($SR,$value){
		return $this->doCall('SR.set_shared',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function set_name_label($SR,$value){
		return $this->doCall('SR.set_name_label',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function set_name_description($SR,$value){
		return $this->doCall('SR.set_name_description',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function create_new_blob($SR,$name,$mime_type,$public){
		return $this->doCall('SR.create_new_blob',array(
			$this->session_id,
			$SR,
			$name,
			$mime_type,
			$public
		));
	}

	public function set_physical_size($SR,$value){
		return $this->doCall('SR.set_physical_size',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function set_virtual_allocation($SR,$value){
		return $this->doCall('SR.set_virtual_allocation',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function set_physical_utilisation($SR,$value){
		return $this->doCall('SR.set_physical_utilisation',array(
			$this->session_id,
			$SR,
			$value
		));
	}

	public function assert_can_host_ha_statefile($SR){
		return $this->doCall('SR.assert_can_host_ha_statefile',array(
			$this->session_id,
			$SR
		));
	}

	public function assert_supports_database_replication($SR){
		return $this->doCall('SR.assert_supports_database_replication',array(
			$this->session_id,
			$SR
		));
	}

	public function enable_database_replication($SR){
		return $this->doCall('SR.enable_database_replication',array(
			$this->session_id,
			$SR
		));
	}

	public function disable_database_replication($SR){
		return $this->doCall('SR.disable_database_replication',array(
			$this->session_id,
			$SR
		));
	}

	public function get_all(){
		return $this->doCall('SR.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('SR.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($SR){
		return $this->doCall('SR.get_uuid',array(
			$this->session_id,
			$SR
		));
	}

	public function get_name_label($SR){
		return $this->doCall('SR.get_name_label',array(
			$this->session_id,
			$SR
		));
	}

	public function get_name_description($SR){
		return $this->doCall('SR.get_name_description',array(
			$this->session_id,
			$SR
		));
	}

	public function get_allowed_operations($SR){
		return $this->doCall('SR.get_allowed_operations',array(
			$this->session_id,
			$SR
		));
	}

	public function get_current_operations($SR){
		return $this->doCall('SR.get_current_operations',array(
			$this->session_id,
			$SR
		));
	}

	public function get_VDIs($SR){
		return $this->doCall('SR.get_VDIs',array(
			$this->session_id,
			$SR
		));
	}

	public function get_PBDs($SR){
		return $this->doCall('SR.get_PBDs',array(
			$this->session_id,
			$SR
		));
	}

	public function get_virtual_allocation($SR){
		return $this->doCall('SR.get_virtual_allocation',array(
			$this->session_id,
			$SR
		));
	}

	public function get_physical_utilisation($SR){
		return $this->doCall('SR.get_physical_utilisation',array(
			$this->session_id,
			$SR
		));
	}

	public function get_physical_size($SR){
		return $this->doCall('SR.get_physical_size',array(
			$this->session_id,
			$SR
		));
	}

	public function get_type($SR){
		return $this->doCall('SR.get_type',array(
			$this->session_id,
			$SR
		));
	}

	public function get_content_type($SR){
		return $this->doCall('SR.get_content_type',array(
			$this->session_id,
			$SR
		));
	}

	public function get_shared($SR){
		return $this->doCall('SR.get_shared',array(
			$this->session_id,
			$SR
		));
	}

	public function get_other_config($SR){
		return $this->doCall('SR.get_other_config',array(
			$this->session_id,
			$SR
		));
	}

	public function set_other_config_($SR,Array $config){
		return $this->doCall('SR.set_other_config',array(
			$this->session_id,
			$SR,
			$config
		));
	}

	public function add_to_other_config($SR,$key,$value){
		return $this->doCall('SR.add_to_other_config',array(
			$this->session_id,
			$SR,
			$key,
			$value
		));
	}

	public function remove_from_other_config($SR,$key){
		return $this->doCall('SR.remove_from_other_config',array(
			$this->session_id,
			$SR,
			$key
		));
	}

	public function get_tags($SR){
		return $this->doCall('SR.get_tags',array(
			$this->session_id,
			$SR
		));
	}

	public function set_tags($SR,Array $tags){
		return $this->doCall('SR.set_tags',array(
			$this->session_id,
			$SR,
			$tags
		));
	}

	public function add_tags($SR,$tags){
		return $this->doCall('SR.add_tags',array(
			$this->session_id,
			$SR,
			$tags
		));
	}

	public function remove_tags($SR,$tags){
		return $this->doCall('SR.remove_tags',array(
			$this->session_id,
			$SR,
			$tags
		));
	}

	public function get_sm_config($SR){
		return $this->doCall('SR.get_sm_config',array(
			$this->session_id,
			$SR
		));
	}

	public function set_sm_config($SR,Array $sm_config){
		return $this->doCall('SR.set_sm_config',array(
			$this->session_id,
			$SR,
			$sm_config
		));
	}

	public function add_to_sm_config($SR,Array $sm_config){
		return $this->doCall('SR.add_sm_config',array(
			$this->session_id,
			$SR,
			$sm_config
		));
	}

	public function remove_from_sm_config($SR,Array $sm_config){
		return $this->doCall('SR.remove_sm_config',array(
			$this->session_id,
			$SR,
			$sm_config
		));
	}

	public function get_blobs($SR){
		return $this->doCall('SR.get_blobs',array(
			$this->session_id,
			$SR
		));
	}

	public function get_local_cache_enabled($SR){
		return $this->doCall('SR.get_local_cache_enabled',array(
			$this->session_id,
			$SR
		));
	}

	public function get_introduced_by($SR){
		return $this->doCall('SR.get_introduced_by',array(
			$this->session_id,
			$SR
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('SR.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($SR){
		return $this->doCall('SR.get_record',array(
			$this->session_id,
			$SR
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('SR.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
