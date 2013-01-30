<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Pool
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function join($master_address,$master_username,$master_password){
		return $this->doCall('pool.join',array(
			$this->session_id,
			$master_address,
			$master_username,
			$master_password
		));
	}

	public function join_force($master_address,$master_username,$master_password){
		return $this->doCall('pool.join_force',array(
			$this->session_id,
			$master_address,
			$master_username,
			$master_password
		));
	}

	public function eject($pool){
		return $this->doCall('pool.eject',array(
			$this->session_id,
			$pool
		));
	}

	public function emergency_transition_to_master(){
		return $this->doCall('pool.emergency_transition_to_master',array(
			$this->session_id
		));
	}

	public function emergency_reset_master($master_address){
		return $this->doCall('pool.emergency_reset_master',array(
			$this->session_id,
			$master_address
		));
	}

	public function recover_slaves($pool){
		return $this->doCall('pool.recover_slaves',array(
			$this->session_id,
			$pool
		));
	}

	public function create_VLAN($device,$network,$VLAN){
		return $this->doCall('pool.create_VLAN',array(
			$this->session_id,
			$device,
			$network,
			$VLAN
		));
	}

	public function create_VLAN_from_PIF($PIF,$network,$VLAN){
		return $this->doCall('pool.create_VLAN_from_PIF',array(
			$this->session_id,
			$PIF,
			$network,
			$VLAN
		));
	}

	public function enable_ha($heartbeat_srs, Array $config){
		return $this->doCall('pool.enable_ha',array(
			$this->session_id,
			$heartbeat_srs,
			$config
		));
	}

	public function disable_ha(){
		return $this->doCall('pool.disable_ha',array(
			$this->session_id
		));
	}

	public function sync_database(){
		return $this->doCall('pool.sync_database',array(
			$this->session_id
		));
	}

	public function designate_new_master($host){
		return $this->doCall('pool.designate_new_master',array(
			$this->session_id,
			$host
		));
	}

	public function ha_prevent_restarts_for($seconds){
		return $this->doCall('pool.ha_prevent_restarts_for',array(
			$this->session_id,
			$seconds
		));
	}

	public function ha_failover_plan_exists($num_failures){
		return $this->doCall('pool.ha_failover_plan_exists',array(
			$this->session_id,
			$num_failures
		));
	}

	public function ha_compute_max_host_failures_to_tolerate(){
		return $this->doCall('pool.ha_compute_max_host_failures_to_tolerate',array(
			$this->session_id
		));
	}

	public function ha_compute_hypothetical_max_host_failures_to_tolerate(Array $config){
		return $this->doCall('pool.ha_compute_hypothetical_max_host_failures_to_tolerate',array(
			$this->session_id,
			$config
		));
	}

	public function ha_compute_vm_failover_plan(Array $failed_hosts,Array $failed_vms){
		return $this->doCall('pool.ha_compute_vm_failover_plan',array(
			$this->session_id,
			$failed_hosts,
			$failed_vms
		));
	}

	public function set_ha_host_failures_to_tolerate($pool,$num_failures){
		return $this->doCall('pool.ha_compute_vm_failover_plan',array(
			$this->session_id,
			$pool,
			$num_failures
		));
	}

	public function create_new_blob($pool,$name,$mime_type,$public){
		return $this->doCall('pool.create_new_blob',array(
			$this->session_id,
			$pool,
			$name,
			$mime_type,
			$public
		));
	}

	public function enable_external_auth($pool,Array $config,$service_name,$auth_type){
		return $this->doCall('pool.enable_external_auth',array(
			$this->session_id,
			$pool,
			$config,
			$service_name,
			$auth_type
		));
	}

	public function disable_external_auth($pool,Array $config){
		return $this->doCall('pool.enable_external_auth',array(
			$this->session_id,
			$pool,
			$config
		));
	}

	public function detect_nonhomogeneous_external_auth($pool){
		return $this->doCall('pool.detect_nonhomogeneous_external_auth',array(
			$this->session_id,
			$pool
		));
	}

	public function initialize_wlb($wlb_url,$wlb_username,$wlb_password,$xenserver_username,$xenserver_password){
		return $this->docall('pool.initialize_wlb',array(
			$this->session_id,
			$wlb_url,
			$wlb_username,
			$wlb_password,
			$xenserver_username,
			$xenserver_password
		));
	}

	public function deconfigure_wlb(){
		return $this->docall('pool.deconfigure_wlb',array(
			$this->session_id
		));
	}

	public function send_wlb_configuration(Array $config){
		return $this->docall('pool.send_wlb_configuration',array(
			$this->session_id,
			$config
		));
	}

	public function retrieve_wlb_configuration(){
		return $this->docall('pool.retrieve_wlb_configuration',array(
			$this->session_id
		));
	}

	public function retrieve_wlb_recommendations(){
		return $this->docall('pool.retrieve_wlb_recommendations',array(
			$this->session_id
		));
	}

	public function send_test_post($host,$port,$body){
		return $this->docall('pool.send_test_post',array(
			$this->session_id,
			$host,
			$port,
			$body
		));
	}

	public function certificate_install($name,$cert){
		return $this->docall('pool.certificate_install',array(
			$this->session_id,
			$name,
			$cert
		));
	}

	public function certificate_uninstall($name){
		return $this->docall('pool.certificate_uninstall',array(
			$this->session_id,
			$name
		));
	}

	public function certificate_list(){
		return $this->docall('pool.certificate_list',array(
			$this->session_id
		));
	}

	public function crl_install($name,$cert){
		return $this->docall('pool.crl_install',array(
			$this->session_id,
			$name,
			$cert
		));
	}

	public function crl_uninstall($name){
		return $this->docall('pool.crl_uninstall',array(
			$this->session_id,
			$name
		));
	}

	public function crl_list(){
		return $this->docall('pool.crl_list',array(
			$this->session_id
		));
	}

	public function certificate_sync(){
		return $this->docall('pool.certificate_sync',array(
			$this->session_id
		));
	}

	public function enable_redo_log($SR){
		return $this->docall('pool.enable_redo_log',array(
			$this->session_id,
			$SR
		));
	}

	public function disable_redo_log(){
		return $this->docall('pool.disable_redo_log',array(
			$this->session_id
		));
	}

	public function set_vswitch_controller($address){
		return $this->doCall('pool.set_vswitch_controller',array(
			$this->session_id,
			$address
		));
	}

	public function test_archive_target($pool,Array $config){
		return $this->doCall('pool.test_archive_target',array(
			$this->session_id,
			$pool,
			$config
		));
	}

	public function enable_local_storage_caching($pool){
		return $this->doCall('pool.enable_local_storage_caching',array(
			$this->session_id,
			$pool
		));
	}

	public function disable_local_storage_caching($pool){
		return $this->doCall('pool.disable_local_storage_caching',array(
			$this->session_id,
			$pool
		));
	}

	public function get_all(){
		return $this->doCall('pool.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('pool.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($pool){
		return $this->doCall('pool.get_uuid',array(
			$this->session_id,
			$pool
		));
	}

	public function get_name_label($pool){
		return $this->doCall('pool.get_name_label',array(
			$this->session_id,
			$pool
		));
	}

	public function set_name_label($pool,$name_label){
		return $this->doCall('pool.set_name_label',array(
			$this->session_id,
			$pool,
			$name_label
		));
	}

	public function get_name_description($pool){
		return $this->doCall('pool.get_name_description',array(
			$this->session_id,
			$pool
		));
	}

	public function set_name_description($pool,$name_description){
		return $this->doCall('pool.set_name_description',array(
			$this->session_id,
			$pool,
			$name_description
		));
	}

	public function get_master($pool){
		return $this->doCall('pool.get_master',array(
			$this->session_id,
			$pool
		));
	}

	public function get_default_SR($pool){
		return $this->doCall('pool.get_default_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function set_default_SR($pool,$SR){
		return $this->doCall('pool.set_default_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function get_suspend_image_SR($pool){
		return $this->doCall('pool.get_suspend_image_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function set_suspend_image_SR($pool,$SR){
		return $this->doCall('pool.set_suspend_image_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function get_crash_dump_SR($pool){
		return $this->doCall('pool.get_crash_dump_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function set_crash_dump_SR($pool,$SR){
		return $this->doCall('pool.set_crash_dump_SR',array(
			$this->session_id,
			$pool
		));
	}

	public function get_other_config($pool){
		return $this->doCall('pool.get_other_config',array(
			$this->session_id,
			$pool
		));
	}

	public function set_other_config($pool,Array $config){
		return $this->doCall('pool.set_other_config',array(
			$this->session_id,
			$pool,
			$config
		));
	}

	public function add_to_other_config($pool,$key,$value){
		return $this->doCall('pool.add_to_other_config',array(
			$this->session_id,
			$pool,
			$key,
			$value
		));
	}

	public function remove_from_other_config($pool,$key){
		return $this->doCall('pool.remove_from_other_config',array(
			$this->session_id,
			$pool,
			$key
		));
	}

	public function get_ha_enabled($pool){
		return $this->doCall('pool.get_ha_enabled',array(
			$this->session_id,
			$pool
		));
	}

	public function get_ha_configuration($pool){
		return $this->doCall('pool.get_ha_configuration',array(
			$this->session_id,
			$pool
		));
	}

	public function get_ha_statefiles($pool){
		return $this->doCall('pool.get_ha_statefiles',array(
			$this->session_id,
			$pool
		));
	}

	public function get_ha_host_failures_to_tolerate($pool){
		return $this->doCall('pool.get_ha_host_failures_to_tolerate',array(
			$this->session_id,
			$pool
		));
	}

	public function get_ha_plan_exists_for($pool){
		return $this->doCall('pool.get_ha_plan_exists_for',array(
			$this->session_id,
			$pool
		));
	}

	public function get_ha_allow_overcommit($pool){
		return $this->doCall('pool.get_ha_allow_overcommit',array(
			$this->session_id,
			$pool
		));
	}

	public function set_ha_allow_overcommit($pool,$ha_allow_overcommit){
		return $this->doCall('pool.set_ha_allow_overcommit',array(
			$this->session_id,
			$pool,
			$ha_allow_overcommit
		));
	}

	public function get_ha_overcommitted($pool){
		return $this->doCall('pool.get_ha_overcommitted',array(
			$this->session_id,
			$pool
		));
	}

	public function get_blobs($pool){
		return $this->doCall('pool.get_blobs',array(
			$this->session_id,
			$pool
		));
	}

	public function get_tags($pool){
		return $this->doCall('pool.get_tags',array(
			$this->session_id,
			$pool
		));
	}

	public function set_tags($pool,$tags){
		return $this->doCall('pool.set_tags',array(
			$this->session_id,
			$pool,
			$tags
		));
	}

	public function add_tags($pool,$tags){
		return $this->doCall('pool.add_tags',array(
			$this->session_id,
			$pool,
			$tags
		));
	}

	public function remove_tags($pool,$tags){
		return $this->doCall('pool.remove_tags',array(
			$this->session_id,
			$pool,
			$tags
		));
	}

	public function get_gui_config($pool){
		return $this->doCall('pool.get_gui_config',array(
			$this->session_id,
			$pool
		));
	}

	public function set_gui_config($pool,Array $gui_config){
		return $this->doCall('pool.set_gui_config',array(
			$this->session_id,
			$pool,
			$gui_config
		));
	}

	public function add_to_gui_config($pool,$key,$value){
		return $this->doCall('pool.add_to_gui_config',array(
			$this->session_id,
			$pool,
			$key,
			$value
		));
	}

	public function remove_from_gui_config($pool,$key){
		return $this->doCall('pool.remove_from_gui_config',array(
			$this->session_id,
			$pool,
			$key
		));
	}

	public function get_wlb_url($pool){
		return $this->doCall('pool.get_wlb_url',array(
			$this->session_id,
			$pool
		));
	}

	public function get_wlb_username($pool){
		return $this->doCall('pool.get_wlb_username',array(
			$this->session_id,
			$pool
		));
	}

	public function get_wlb_enabled($pool){
		return $this->doCall('pool.get_wlb_enabled',array(
			$this->session_id,
			$pool
		));
	}

	public function set_wlb_enabled($pool,$wlb_enabled){
		return $this->doCall('pool.set_wlb_enabled',array(
			$this->session_id,
			$pool,
			$wlb_enabled
		));
	}

	public function get_wlb_verify_cert($pool){
		return $this->doCall('pool.get_wlb_verify_cert',array(
			$this->session_id,
			$pool
		));
	}

	public function set_wlb_verify_cert($pool,$wlb_verify_cert){
		return $this->doCall('pool.set_wlb_verify_cert',array(
			$this->session_id,
			$pool,
			$wlb_verify_cert
		));
	}

	public function get_redo_log_enabled($pool){
		return $this->doCall('pool.get_redo_log_enabled',array(
			$this->session_id,
			$pool
		));
	}

	public function get_redo_log_vdi($pool){
		return $this->doCall('pool.get_redo_log_vdi',array(
			$this->session_id,
			$pool
		));
	}

	public function get_vswitch_controller($pool){
		return $this->doCall('pool.get_vswitch_controller',array(
			$this->session_id,
			$pool
		));
	}

	public function get_restrictions($pool){
		return $this->doCall('pool.get_restrictions',array(
			$this->session_id,
			$pool
		));
	}

	public function get_metadata_VDIs($pool){
		return $this->doCall('pool.get_metadata_VDIs',array(
			$this->session_id,
			$pool
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('pool.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($pool){
		return $this->doCall('pool.get_record',array(
			$this->session_id,
			$pool
		));
	}
}
