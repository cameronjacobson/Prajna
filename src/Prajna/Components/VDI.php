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

	public function snapshot($VDI,Array $driver_params){
		return $this->doCall('VDI.snapshot',array(
			$this->session_id,
			$VDI,
			$driver_params
		));
	}

	public function clone($VDI,Array $driver_params){
		return $this->doCall('VDI.clone',array(
			$this->session_id,
			$VDI,
			$driver_params
		));
	}

	public function resize($VDI,$size){
		return $this->doCall('VDI.resize',array(
			$this->session_id,
			$VDI,
			$size
		));
	}

	public function resize_online($VDI,$size){
		return $this->doCall('VDI.resize_online',array(
			$this->session_id,
			$VDI,
			$size
		));
	}

	public function introduce($uuid,$name_label,$name_description,$SR,$type,$sharable,
		$read_only,Array $other_config,$location,Array $xenstore_data,Array $sm_config,$managed,
		$virtual_size,$physical_utilisation,$metadata_of_pool,$is_a_snapshot,$snapshot_time,$snapshot_of){
		return $this->doCall('VDI.introduce',array(
			$this->session_id,
			$uuid,
			$name_label,
			$name_description,
			$SR,
			$type,
			$sharable,
			$read_only,$other_config,$location,
			$xenstore_data,$sm_config,$managed,
			$virtual_size,
			$physical_utilisation,
			$metadata_of_pool,
			$is_a_snapshot,
			$snapshot_time,
			$snapshot_of
		));
	}

	public function db_introduce($uuid,$name_label,$name_description,$SR,$type,$sharable,
		$read_only,Array $other_config,$location,Array $xenstore_data,Array $sm_config,$managed,
		$virtual_size,$physical_utilisation,$metadata_of_pool,$is_a_snapshot,$snapshot_time,$snapshot_of){
		return $this->doCall('VDI.introduce',array(
			$this->session_id,
			$uuid,
			$name_label,
			$name_description,
			$SR,
			$type,
			$sharable,
			$read_only,$other_config,$location,
			$xenstore_data,$sm_config,$managed,
			$virtual_size,
			$physical_utilisation,
			$metadata_of_pool,
			$is_a_snapshot,
			$snapshot_time,
			$snapshot_of
		));
	}

	public function db_forget($VDI){
		return $this->doCall('VDI.db_forget',array(
			$this->session_id,
			$VDI
		));
	}

	public function update($VDI){
		return $this->doCall('VDI.update',array(
			$this->session_id,
			$VDI
		));
	}

	public function copy($VDI,$SR){
		return $this->doCall('VDI.copy',array(
			$this->session_id,
			$VDI,
			$SR
		));
	}

	public function set_managed($VDI,$value){
		return $this->doCall('VDI.set_managed',array(
			$this->session_id,
			$VDI,
			$value
		));
	}

	public function forget($VDI){
		return $this->doCall('VDI.forget',array(
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

	public function set_read_only($VDI,$readonly){
		return $this->doCall('VDI.set_read_only',array(
			$this->session_id,
			$VDI,
			$readonly
		));
	}

	public function set_missing($VDI,$readonly){
		return $this->doCall('VDI.set_missing',array(
			$this->session_id,
			$VDI,
			$readonly
		));
	}

	public function set_virtual_size($VDI,$size){
		return $this->doCall('VDI.set_virtual_size',array(
			$this->session_id,
			$VDI,
			$size
		));
	}

	public function set_physical_utilisation($VDI,$utilisation){
		return $this->doCall('VDI.set_physical_utilisation',array(
			$this->session_id,
			$VDI,
			$utilisation
		));
	}

	public function set_is_a_snapshot($VDI,$value){
		return $this->doCall('VDI.set_is_a_snapshot',array(
			$this->session_id,
			$VDI,
			$value
		));
	}

	public function set_snapshot_of($VDI,$VDI2){
		return $this->doCall('VDI.set_snapshot_of',array(
			$this->session_id,
			$VDI,
			$VDI2
		));
	}

	public function set_snapshot_time($VDI,$time){
		return $this->doCall('VDI.set_snapshot_time',array(
			$this->session_id,
			$VDI,
			$time
		));
	}

	public function set_metadata_of_pool($VDI,$pool){
		return $this->doCall('VDI.set_metadata_of_pool',array(
			$this->session_id,
			$VDI,
			$pool
		));
	}

	public function set_name_label($VDI,$label){
		return $this->doCall('VDI.set_name_label',array(
			$this->session_id,
			$VDI,
			$label
		));
	}

	public function set_name_description($VDI,$description){
		return $this->doCall('VDI.set_name_description',array(
			$this->session_id,
			$VDI,
			$description
		));
	}

	public function set_on_boot($VDI,$on_boot){
		return $this->doCall('VDI.set_on_boot',array(
			$this->session_id,
			$VDI,
			$on_boot
		));
	}

	public function set_allow_caching($VDI,$value){
		return $this->doCall('VDI.set_allow_caching',array(
			$this->session_id,
			$VDI,
			$value
		));
	}

	public function open_database($VDI){
		return $this->doCall('VDI.open_database',array(
			$this->session_id,
			$VDI
		));
	}

	public function read_database_pool_uuid($VDI){
		return $this->doCall('VDI.read_database_pool_uuid',array(
			$this->session_id,
			$VDI
		));
	}

	public function pool_migrate($VDI,$SR,Array $options){
		return $this->doCall('VDI.pool_migrate',array(
			$this->session_id,
			$VDI,
			$SR,
			$options
		));
	}

	public function get_all(){
		return $this->doCall('VDI.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VDI.get_all_records',array(
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

	public function get_name_description($VDI){
		return $this->doCall('VDI.get_name_description',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_allowed_operations($VDI){
		return $this->doCall('VDI.get_allowed_operations',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_current_operations($VDI){
		return $this->doCall('VDI.get_current_operations',array(
			$this->session_id,
			$VDI
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

	public function get_read_only($VDI){
		return $this->doCall('VDI.get_read_only',array(
			$this->session_id,
			$VDI
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

	public function get_storage_lock($VDI){
		return $this->doCall('VDI.get_storage_lock',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_location($VDI){
		return $this->doCall('VDI.get_location',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_managed($VDI){
		return $this->doCall('VDI.get_managed',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_missing($VDI){
		return $this->doCall('VDI.get_missing',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_parent($VDI){
		return $this->doCall('VDI.get_parent',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_xenstore_data($VDI){
		return $this->doCall('VDI.get_xenstore_data',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_xenstore_data($VDI,Array $xenstore_data){
		return $this->doCall('VDI.set_xenstore_data',array(
			$this->session_id,
			$VDI,
			$xenstore_data
		));
	}

	public function add_to_xenstore_data($VDI,$key,$value){
		return $this->doCall('VDI.get_parent',array(
			$this->session_id,
			$VDI,
			$key,
			$value
		));
	}

	public function remove_from_xenstore_data($VDI,$key){
		return $this->doCall('VDI.get_parent',array(
			$this->session_id,
			$VDI,
			$key
		));
	}

	public function get_sm_config($VDI){
		return $this->doCall('VDI.get_sm_config',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_sm_config($VDI,Array $sm_config){
		return $this->doCall('VDI.set_sm_config',array(
			$this->session_id,
			$VDI,
			$sm_config
		));
	}

	public function add_to_sm_config($VDI,$key,$value){
		return $this->doCall('VDI.add_to_sm_config',array(
			$this->session_id,
			$VDI,
			$key,
			$value
		));
	}

	public function remove_from_sm_config($VDI,$key){
		return $this->doCall('VDI.remove_from_sm_config',array(
			$this->session_id,
			$VDI,
			$key
		));
	}

	public function get_is_a_snapshot($VDI){
		return $this->doCall('VDI.get_is_a_snapshot',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_snapshot_of($VDI){
		return $this->doCall('VDI.get_snapshot_of',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_snapshots($VDI){
		return $this->doCall('VDI.get_snapshots',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_snapshot_time($VDI){
		return $this->doCall('VDI.get_snapshot_time',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_tags($VDI){
		return $this->doCall('VDI.get_tags',array(
			$this->session_id,
			$VDI
		));
	}

	public function set_tags($VDI,Array $tags){
		return $this->doCall('VDI.set_tags',array(
			$this->session_id,
			$VDI,
			$tags
		));
	}

	public function add_tags($VDI,$tags){
		return $this->doCall('VDI.add_tags',array(
			$this->session_id,
			$VDI,
			$tags
		));
	}

	public function remove_tags($VDI,$tags){
		return $this->doCall('VDI.remove_tags',array(
			$this->session_id,
			$VDI,
			$tags
		));
	}

	public function get_allow_caching($VDI){
		return $this->doCall('VDI.get_allow_caching',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_on_boot($VDI){
		return $this->doCall('VDI.get_on_boot',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_metadata_of_pool($VDI){
		return $this->doCall('VDI.get_metadata_of_pool',array(
			$this->session_id,
			$VDI
		));
	}

	public function get_metadata_latest($VDI){
		return $this->doCall('VDI.get_metadata_latest',array(
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
