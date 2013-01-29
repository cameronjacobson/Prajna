<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Host
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function disable($host){
		return $this->doCall('host.disable',array(
			$this->session_id,
			$host
		));
	}
	public function enable($host){
		return $this->doCall('host.enable',array(
			$this->session_id,
			$host
		));
	}
	public function shutdown($host){
		return $this->doCall('host.shutdown',array(
			$this->session_id,
			$host
		));
	}
	public function reboot($reboot){
		return $this->doCall('host.reboot',array(
			$this->session_id,
			$host
		));
	}

	public function dmesg($host){
		return $this->doCall('host.dmesg',array(
			$this->session_id,
			$host
		));
	}

	public function dmesg_clear($host){
		return $this->doCall('host.dmesg_clear',array(
			$this->session_id,
			$host
		));
	}

	public function get_log($host){
		return $this->doCall('host.get_log',array(
			$this->session_id,
			$host
		));
	}

	public function send_debug_keys($host,$keys){
		return $this->doCall('host.send_debug_keys',array(
			$this->session_id,
			$host,
			$keys
		));
	}

	public function bugreport_upload($host,$url,Array $options){
		return $this->doCall('host.bugreport_upload',array(
			$this->session_id,
			$host,
			$url,
			$options
		));
	}

	public function list_methods(Array $methods){
		return $this->doCall('host.list_methods',array(
			$this->session_id,
			$methods
		));
	}

	public function license_apply($host,$contents){
		return $this->doCall('host.license_apply',array(
			$this->session_id,
			$host,
			$contents
		));
	}

	public function destroy($host){
		return $this->doCall('host.destroy',array(
			$this->session_id,
			$host
		));
	}

	public function power_on($host){
		return $this->doCall('host.power_on',array(
			$this->session_id,
			$host
		));
	}

	public function emergency_ha_disable(){
		return $this->doCall('host.emergency_ha_disable',array(
			$this->session_id
		));
	}

	public function get_data_sources($host){
		return $this->doCall('host.get_data_sources',array(
			$this->session_id,
			$host
		));
	}

	public function record_data_source($host,$data_source){
		return $this->doCall('host.record_data_source',array(
			$this->session_id,
			$host,
			$data_source
		));
	}

	public function query_data_source($host,$data_source){
		return $this->doCall('host.query_data_source',array(
			$this->session_id,
			$host,
			$data_source
		));
	}

	public function forget_data_source_archives($host,$data_source){
		return $this->doCall('host.forget_data_source_arcouves',array(
			$this->session_id,
			$host,
			$data_source
		));
	}

	public function assert_can_evacuate($host){
		return $this->doCall('host.assert_can_evacuate',array(
			$this->session_id,
			$host
		));
	}

	public function get_vms_which_prevent_evacuation($host){
		return $this->doCall('host.get_vms_which_prevent_evacuation',array(
			$this->session_id,
			$host
		));
	}

	public function get_uncooperative_resident_VMs($host){
		return $this->doCall('host.get_uncoooperative_resident_VMs',array(
			$this->session_id,
			$host
		));
	}

	public function evacuate($host){
		return $this->doCall('host.evacuate',array(
			$this->session_id,
			$host
		));
	}

	public function syslog_reconfigure($host){
		return $this->doCall('host.syslog_reconfigure',array(
			$this->session_id,
			$host
		));
	}

	public function management_reconfigure($PIF){
		return $this->doCall('host.management_reconfigure',array(
			$this->session_id,
			$PIF
		));
	}

	public function local_management_reconfigure($interface){
		return $this->doCall('host.local_management_reconfigure',array(
			$this->session_id,
			$interface
		));
	}

	public function management_disable($host){
		return $this->doCall('host.management_disable',array(
			$this->session_id,
			$host
		));
	}

	public function get_management_interface($host){
		return $this->doCall('host.get_management_interface',array(
			$this->session_id,
			$host
		));
	}

	public function get_system_status_capabilities($host){
		return $this->doCall('host.get_system_status_capabilities',array(
			$this->session_id,
			$host
		));
	}

	public function restart_agent($host){
		return $this->doCall('host.restart_agent',array(
			$this->session_id,
			$host
		));
	}

	public function shutdown_agent(){
		return $this->doCall('host.shutdown_agent',array(
			$this->session_id
		));
	}

	public function set_hostname_live($host,$hostname){
		return $this->doCall('host.set_hostname_live',array(
			$this->session_id,
			$host,
			$hostname
		));
	}

	public function compute_free_memory($host){
		return $this->doCall('host.compute_free_memory',array(
			$this->session_id,
			$host
		));
	}

	public function compute_memory_overhead($host){
		return $this->doCall('host.compute_memory_overhead',array(
			$this->session_id,
			$host
		));
	}

	public function sync_data($host){
		return $this->doCall('host.sync_data',array(
			$this->session_id,
			$host
		));
	}

	public function backup_rrds($host,$delay){
		return $this->doCall('host.backup_rrds',array(
			$this->session_id,
			$host,
			$delay
		));
	}

	public function create_new_blob($host,$name,$mime_type,$public){
		return $this->doCall('host.create_new_blob',array(
			$this->session_id,
			$host,
			$name,
			$mime_type,
			$public
		));
	}

	public function call_plugin($host,$plugin,$fn,Array $args){
		return $this->doCall('host.call_plugin',array(
			$this->session_id,
			$host,
			$plugin,
			$fn,
			$args
		));
	}

	public function get_servertime($host){
		return $this->doCall('host.get_servertime',array(
			$this->session_id,
			$host
		));
	}

	public function get_server_localtime($host){
		return $this->doCall('host.get_server_localtime',array(
			$this->session_id,
			$host
		));
	}

	public function enable_external_auth($host,Array $config,$service_name,$auth_type){
		return $this->doCall('host.enable_external_auth',array(
			$this->session_id,
			$host,
			$config,
			$service_name,
			$auth_type
		));
	}

	public function disable_external_auth($host,Array $config){
		return $this->doCall('host.enable_external_auth',array(
			$this->session_id,
			$host,
			$config
		));
	}

	public function retrieve_wlb_evacuate_recommendations($host){
		return $this->doCall('host.retrieve_wlb_evacuate_recommendations',array(
			$this->session_id,
			$host
		));
	}

	public function get_server_certificate($host){
		return $this->doCall('host.get_server_certificate',array(
			$this->session_id,
			$host
		));
	}

	public function apply_edition($host,$edition){
		return $this->doCall('host.apply_edition',array(
			$this->session_id,
			$host,
			$edition
		));
	}

	public function refresh_pack_info($host){
		return $this->doCall('host.refresh_pack_info',array(
			$this->session_id,
			$host
		));
	}

	public function set_power_on_mode($host,$power_on_mode,Array $power_on_config){
		return $this->doCall('host.set_power_on_mode',array(
			$this->session_id,
			$host,
			$power_on_mode,
			$power_on_config
		));
	}

	public function set_cpu_features($host,$features){
		return $this->doCall('host.set_cpu_features',array(
			$this->session_id,
			$host,
			$features
		));
	}

	public function reset_cpu_features($host){
		return $this->doCall('host.reset_cpu_features',array(
			$this->session_id,
			$host
		));
	}

	public function enable_local_storage_caching($host,$SR){
		return $this->doCall('host.enable_local_storage_caching',array(
			$this->session_id,
			$host,
			$SR
		));
	}

	public function disable_local_storage_caching($host){
		return $this->doCall('host.disable_local_storage_caching',array(
			$this->session_id,
			$host
		));
	}

	public function migrate_receive($host,$network,Array $options){
		return $this->doCall('host.migrate_receive',array(
			$this->session_id,
			$host,
			$network,
			$options
		));
	}

	public function get_all(){
		return $this->doCall('host.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('host.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($host){
		return $this->doCall('host.get_uuid',array(
			$this->session_id,
			$host
		));
	}

	public function get_name_label($host){
		return $this->doCall('host.get_name_label',array(
			$this->session_id,
			$host
		));
	}
	public function set_name_label($host,$label){
		return $this->doCall('host.set_name_label',array(
			$this->session_id,
			$host,
			$label
		));
	}
	public function get_name_description($host){
		return $this->doCall('host.get_name_description',array(
			$this->session_id,
			$host
		));
	}
	public function set_name_description($host,$description){
		return $this->doCall('host.set_name_description',array(
			$this->session_id,
			$host,
			$description
		));
	}

	public function get_memory_overhead($host){
		return $this->doCall('host.get_memory_overhead',array(
			$this->session_id,
			$host
		));
	}

	public function get_allowed_operations($host){
		return $this->doCall('host.get_allowed_operations',array(
			$this->session_id,
			$host
		));
	}

	public function get_current_operations($host){
		return $this->doCall('host.get_current_operations',array(
			$this->session_id,
			$host
		));
	}








	public function get_API_version_major($host){
		return $this->doCall('host.get_API_version_major',array(
			$this->session_id,
			$host
		));
	}

	public function get_API_version_minor($host){
		return $this->doCall('host.get_API_version_minor',array(
			$this->session_id,
			$host
		));
	}
	public function get_API_version_vendor($host){
		return $this->doCall('host.get_API_version_vendor',array(
			$this->session_id,
			$host
		));
	}
	public function get_API_version_vendor_implementation($host){
		return $this->doCall('host.get_API_version_vendor_implementation',array(
			$this->session_id,
			$host
		));
	}
	public function get_enabled($host){
		return $this->doCall('host.get_enabled',array(
			$this->session_id,
			$host
		));
	}
	public function get_software_version($host){
		return $this->doCall('host.get_software_version',array(
			$this->session_id,
			$host
		));
	}
	public function get_other_config($host){
		return $this->doCall('host.get_other_config',array(
			$this->session_id,
			$host
		));
	}
	public function set_other_config($host,Array $config){
		return $this->doCall('host.set_other_config',array(
			$this->session_id,
			$host,
			$config
		));
	}
	public function add_to_other_config($host,$key,$value){
		return $this->doCall('host.add_to_other_config',array(
			$this->session_id,
			$host,
			$key,
			$value
		));
	}
	public function remove_from_other_config($host,$key){
		return $this->doCall('host.remove_from_other_config',array(
			$this->session_id,
			$host,
			$key
		));
	}
	public function get_capabilities($host){
		return $this->doCall('host.get_capabilities',array(
			$this->session_id,
			$host
		));
	}
	public function get_cpu_configuration($host){
		return $this->doCall('host.get_cpu_configuration',array(
			$this->session_id,
			$host
		));
	}
	public function get_sched_policy($host){
		return $this->doCall('host.get_sched_policy',array(
			$this->session_id,
			$host
		));
	}
	public function get_supported_bootloaders($host){
		return $this->doCall('host.get_supported_bootloaders',array(
			$this->session_id,
			$host
		));
	}
	public function get_resident_VMs($host){
		return $this->doCall('host.get_resident_VMs',array(
			$this->session_id,
			$host
		));
	}
	public function get_logging($host){
		return $this->doCall('host.get_logging',array(
			$this->session_id,
			$host
		));
	}
	public function set_logging($host,Array $logging){
		return $this->doCall('host.set_logging',array(
			$this->session_id,
			$host,
			$logging
		));
	}
	public function add_to_logging($host,$key,$value){
		return $this->doCall('host.add_to_logging',array(
			$this->session_id,
			$host,
			$key,
			$value
		));
	}
	public function remove_from_logging($host,$key){
		return $this->doCall('host.remove_from_logging',array(
			$this->session_id,
			$host,
			$key
		));
	}
	public function get_PIFs($host){
		return $this->doCall('host.get_PIFs',array(
			$this->session_id,
			$host
		));
	}
	public function get_suspend_image_sr($host){
		return $this->doCall('host.get_suspend_image_sr',array(
			$this->session_id,
			$host
		));
	}
	public function set_suspend_image_sr($host,$SR){
		return $this->doCall('host.set_suspend_image_sr',array(
			$this->session_id,
			$host,
			$SR
		));
	}
	public function get_crash_dump_sr($host){
		return $this->doCall('host.get_crash_dump_sr',array(
			$this->session_id,
			$host
		));
	}
	public function set_crash_dump_sr($host,$SR){
		return $this->doCall('host.set_crash_dump_sr',array(
			$this->session_id,
			$host,
			$SR
		));
	}
	public function get_crashdumps($host){
		return $this->doCall('host.get_crashdumps',array(
			$this->session_id,
			$host
		));
	}

	public function get_patches($host){
		return $this->doCall('host.get_patches',array(
			$this->session_id,
			$host
		));
	}

	
	public function get_PBDs($host){
		return $this->doCall('host.get_PBDs',array(
			$this->session_id,
			$host
		));
	}

	public function get_host_CPUs($host){
		return $this->doCall('host.get_host_CPUs',array(
			$this->session_id,
			$host
		));
	}

	public function get_cpu_info($host){
		return $this->doCall('host.get_cpu_info',array(
			$this->session_id,
			$host
		));
	}

	public function get_hostname($host){
		return $this->doCall('host.get_hostname',array(
			$this->session_id,
			$host
		));
	}

	public function set_hostname($host,$hostname){
		return $this->doCall('host.set_hostname',array(
			$this->session_id,
			$host,
			$hostname
		));
	}

	public function get_address($host){
		return $this->doCall('host.get_address',array(
			$this->session_id,
			$host
		));
	}

	public function set_address($host,$address){
		return $this->doCall('host.set_address',array(
			$this->session_id,
			$host,
			$address
		));
	}

	public function get_metrics($host){
		return $this->doCall('host.get_metrics',array(
			$this->session_id,
			$host
		));
	}

	public function get_license_params($host){
		return $this->doCall('host.get_license_params',array(
			$this->session_id,
			$host
		));
	}

	public function get_ha_statefiles($host){
		return $this->doCall('host.get_ha_statefiles',array(
			$this->session_id,
			$host
		));
	}

	public function get_ha_network_peers($host){
		return $this->doCall('host.get_ha_network_peers',array(
			$this->session_id,
			$host
		));
	}

	public function get_blobs($host){
		return $this->doCall('host.get_blobs',array(
			$this->session_id,
			$host
		));
	}

	public function get_tags($host){
		return $this->doCall('host.get_tags',array(
			$this->session_id,
			$host
		));
	}

	public function set_tags($host,Array $tags){
		return $this->doCall('host.set_tags',array(
			$this->session_id,
			$host,
			$tags
		));
	}

	public function add_tags($host,$tags){
		return $this->doCall('host.add_tags',array(
			$this->session_id,
			$host,
			$tags
		));
	}

	public function remove_tags($host,$tags){
		return $this->doCall('host.remove_tags',array(
			$this->session_id,
			$host,
			$tags
		));
	}

	public function get_external_auth_type($host){
		return $this->doCall('host.get_external_auth_type',array(
			$this->session_id,
			$host
		));
	}

	public function get_external_auth_service_name($host){
		return $this->doCall('host.get_external_auth_service_name',array(
			$this->session_id,
			$host
		));
	}

	public function get_external_auth_configuration($host){
		return $this->doCall('host.get_external_auth_configuration',array(
			$this->session_id,
			$host
		));
	}

	public function get_edition($host){
		return $this->doCall('host.get_edition',array(
			$this->session_id,
			$host
		));
	}

	public function get_license_server($host){
		return $this->doCall('host.get_license_server',array(
			$this->session_id,
			$host
		));
	}

	public function set_license_server($host,Array $license_server){
		return $this->doCall('host.set_license_server',array(
			$this->session_id,
			$host,
			$license_server
		));
	}

	public function add_to_license_server($host,$key,$value){
		return $this->doCall('host.add_to_license_server',array(
			$this->session_id,
			$host,
			$key,
			$value
		));
	}

	public function remove_from_license_server($host,$key){
		return $this->doCall('host.remove_from_license_server',array(
			$this->session_id,
			$host,
			$key
		));
	}

	public function get_bios_strings($host){
		return $this->doCall('session.get_bios_strings',array(
			$this->session_id,
			$host
		));
	}

	public function get_power_on_mode($host){
		return $this->doCall('session.get_power_on_mode',array(
			$this->session_id,
			$host
		));
	}

	public function get_power_on_config($host){
		return $this->doCall('session.get_power_on_config',array(
			$this->session_id,
			$host
		));
	}

	public function get_local_cache_sr($host){
		return $this->doCall('session.get_local_cache_sr',array(
			$this->session_id,
			$host
		));
	}

	public function get_chipset_info($host){
		return $this->doCall('session.get_chipset_info',array(
			$this->session_id,
			$host
		));
	}

	public function get_PCIs($host){
		return $this->doCall('session.get_PCIs',array(
			$this->session_id,
			$host
		));
	}

	public function get_PGPUs($host){
		return $this->doCall('session.get_PGPUs',array(
			$this->session_id,
			$host
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('host.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($host){
		return $this->doCall('session.get_record',array(
			$this->session_id,
			$host
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('host.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
