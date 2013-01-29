<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VM
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function snapshot($VM,$newname){
		return $this->doCall('VM.snapshot',array(
			$this->session_id,
			$VM,
			$newname
		));
	}
	public function snapshot_with_quiesce($VM,$newname){
		return $this->doCall('VM.snapshot_with_quiesce',array(
			$this->session_id,
			$VM,
			$newname
		));
	}

	public function clone($VM,$newname){
		return $this->doCall('VM.clone',array(
			$this->session_id,
			$VM,
			$newname
		));
	}
	public function copy($VM,$newname,$SR){
		return $this->doCall('VM.copy',array(
			$this->session_id,
			$VM,
			$newname,
			$SR
		));
	}
	public function revert($VM){
		return $this->doCall('VM.revert',array(
			$this->session_id,
			$VM
		));
	}
	public function checkpoint($VM,$newname){
		return $this->doCall('VM.checkpoint',array(
			$this->session_id,
			$VM,
			$newname
		));
	}
	public function provision($VM){
		return $this->doCall('VM.provision',array(
			$this->session_id,
			$VM
		));
	}
	

	public function start($VM,$start_paused,$force){
		return $this->doCall('VM.start',array(
			$this->session_id,
			$VM,
			$start_paused,
			$force
		));
	}
	public function start_on($VM,$host,$start_paused,$force){
		return $this->doCall('VM.start_on',array(
			$this->session_id,
			$VM,
			$host,
			$start_paused,
			$force
		));
	}

	public function pause($VM){
		return $this->doCall('VM.pause',array(
			$this->session_id,
			$VM
		));
	}

	public function unpause($VM){
		return $this->doCall('VM.unpause',array(
			$this->session_id,
			$VM
		));
	}

	public function clean_shutdown($VM){
		return $this->doCall('VM.clean_shutdown',array(
			$this->session_id,
			$VM
		));
	}

	public function clean_reboot($VM){
		return $this->doCall('VM.clean_reboot',array(
			$this->session_id,
			$VM
		));
	}

	public function hard_shutdown($VM){
		return $this->doCall('VM.hard_shutdown',array(
			$this->session_id,
			$VM
		));
	}
	public function power_state_reset($VM){
		return $this->doCall('VM.power_state_reset',array(
			$this->session_id,
			$VM
		));
	}

	public function hard_reboot($VM){
		return $this->doCall('VM.hard_reboot',array(
			$this->session_id,
			$VM
		));
	}

	public function suspend($VM){
		return $this->doCall('VM.suspend',array(
			$this->session_id,
			$VM
		));
	}

	public function resume($VM,$start_paused,$force){
		return $this->doCall('VM.resume',array(
			$this->session_id,
			$VM,
			$start_paused,
			$force
		));
	}
	public function resume_on($VM,$host,$start_paused,$force){
		return $this->doCall('VM.resume_on',array(
			$this->session_id,
			$VM,
			$host,
			$start_paused,
			$force
		));
	}
	public function pool_migrate($VM,$host,Array $options){
		return $this->doCall('VM.pool_migrate',array(
			$this->session_id,
			$VM,
			$host,
			$options
		));
	}

	public function set_VCPUs_number_live($VM,$numVCPUs){
		return $this->doCall('VM.set_VCPUs_number_live',array(
			$this->session_id,
			$VM,
			$numVCPUs
		));
	}

	public function add_to_VCPUs_params_live($VM,$key,$value){
		return $this->doCall('VM.add_to_VCPUs_params_live',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}
	public function set_ha_restart_priority($VM,$value){
		return $this->doCall('VM.set_ha_restart_priority',array(
			$this->session_id,
			$VM,
			$value
		));
	}

	public function compute_memory_overhead($VM){
		return $this->doCall('VM.compute_memory_overhead',array(
			$this->session_id,
			$VM
		));
	}

	public function set_memory_dynamic_max($VM,$value){
		return $this->doCall('VM.set_memory_dynamic_max',array(
			$this->session_id,
			$VM,
			$value
		));
	}

	public function set_memory_dynamic_min($VM,$value){
		return $this->doCall('VM.set_memory_dynamic_min',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function set_memory_dynamic_range($VM,$min,$max){
		return $this->doCall('VM.set_memory_dynamic_range',array(
			$this->session_id,
			$VM,
			$min,
			$max
		));
	}
	public function set_memory_static_max($VM,$max){
		return $this->doCall('VM.set_memory_dynamic_max',array(
			$this->session_id,
			$VM,
			$max
		));
	}
	public function set_memory_static_min($VM,$min){
		return $this->doCall('VM.set_memory_dynamic_min',array(
			$this->session_id,
			$VM,
			$min
		));
	}
	public function set_memory_static_range($VM,$min,$max){
		return $this->doCall('VM.set_memory_dynamic_range',array(
			$this->session_id,
			$VM,
			$min,
			$max
		));
	}

	public function set_memory_limits($VM,$static_min,$static_max,$dynamic_min,$dynamic_max){
		return $this->doCall('VM.set_memory_limits',array(
			$this->session_id,
			$VM,
			$static_min,
			$static_max,
			$dynamic_min,
			$dynamic_max
		));
	}

	public function set_HVM_shadow_multiplier($VM,$value){
		return $this->doCall('VM.set_HVM_shadow_multiplier',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function set_shadow_multiplier_live($VM,$value){
		return $this->doCall('VM.set_shadow_multiplier_live',array(
			$this->session_id,
			$VM,
			$value
		));
	}

	public function set_VCPUs_max($VM,$value){
		return $this->doCall('VM.set_VCPUs_max',array(
			$this->session_id,
			$VM,
			$value
		));
	}

	public function set_VCPUs_at_startup($VM,$value){
		return $this->doCall('VM.set_VCPUs_at_startup',array(
			$this->session_id,
			$VM,
			$value
		));
	}

	public function send_sysrq($VM,$sysRq){
		return $this->doCall('VM.send_sysrq',array(
			$this->session_id,
			$VM,
			$sysRq
		));
	}

	public function send_trigger($VM,$trigger){
		return $this->doCall('VM.send_trigger',array(
			$this->session_id,
			$VM,
			$trigger
		));
	}
	public function maximise_memory($VM,$total,$approximate){
		return $this->doCall('VM.maximise_memory',array(
			$this->session_id,
			$VM,
			$total,
			$approximate
		));
	}

	public function migrate_send($VM,Array $dest,$live,Array $vdi_map,Array $vif_map,Array $options){
		return $this->doCall('VM.migrate_send',array(
			$this->session_id,
			$VM,
			$dest,
			$live,
			$vdi_map,
			$vif_map,
			$options
		));
	}

	public function assert_can_migrate($VM,Array $dest,$live,Array $vdi_map,Array $vif_map,Array $options){
		return $this->doCall('VM.assert_can_migrate',array(
			$this->session_id,
			$VM,
			$dest,
			$live,
			$vdi_map,
			$vif_map,
			$options
		));
	}

	public function get_boot_record($VM){
		return $this->doCall('VM.get_boot_record',array(
			$this->session_id,
			$VM
		));
	}

	public function get_data_sources($VM){
		return $this->doCall('VM.get_data_sources',array(
			$this->session_id,
			$VM
		));
	}

	public function record_data_source($VM,$data_source){
		return $this->doCall('VM.record_data_source',array(
			$this->session_id,
			$VM,
			$data_source
		));
	}
	public function query_data_source($VM,$data_source){
		return $this->doCall('VM.query_data_source',array(
			$this->session_id,
			$VM,
			$data_source
		));
	}
	public function forget_data_source_archives($VM,$data_source){
		return $this->doCall('VM.forget_data_source_archives',array(
			$this->session_id,
			$VM,
			$data_source
		));
	}

	public function assert_operation_valid($VM,$vm_operations){
		return $this->doCall('VM.assert_operation_valid',array(
			$this->session_id,
			$VM,
			$vm_operations
		));
	}

	public function update_allowed_operations($VM){
		return $this->doCall('VM.update_allowed_operations',array(
			$this->session_id,
			$VM
		));
	}
	public function get_allowed_VBD_devices($VM){
		return $this->doCall('VM.get_allowed_VBD_devices',array(
			$this->session_id,
			$VM
		));
	}
	public function get_allowed_VIF_devices($VM){
		return $this->doCall('VM.get_allowed_VIF_devices',array(
			$this->session_id,
			$VM
		));
	}
	public function get_possible_hosts($VM){
		return $this->doCall('VM.get_possible_hosts',array(
			$this->session_id,
			$VM
		));
	}
	public function assert_can_boot_here($VM,$host){
		return $this->doCall('VM.assert_can_boot_here',array(
			$this->session_id,
			$VM,
			$host
		));
	}
	public function create_new_blob($VM,$name,$mime_type,$public){
		return $this->doCall('VM.create_new_blob',array(
			$this->session_id,
			$VM,
			$name,
			$mime_type,
			$public
		));
	}
	public function assert_agile($VM){
		return $this->doCall('VM.assert_agile',array(
			$this->session_id,
			$VM
		));
	}
	public function retrieve_wlb_recommendations($VM){
		return $this->doCall('VM.retrieve_wlb_recommendations',array(
			$this->session_id,
			$VM
		));
	}
	public function copy_bios_strings($VM,$host){
		return $this->doCall('VM.copy_bios_strings',array(
			$this->session_id,
			$VM,
			$host
		));
	}
	public function set_protection_policy($VM,$VMPP){
		return $this->doCall('VM.set_protection_policy',array(
			$this->session_id,
			$VM,
			$VMPP
		));
	}
	public function set_start_delay($VM,$value){
		return $this->doCall('VM.set_start_delay',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function set_shutdown_delay($VM,$value){
		return $this->doCall('VM.set_shutdown_delay',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function set_order($VM,$value){
		return $this->doCall('VM.set_order',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function set_suspend_VDI($VM,$VDI){
		return $this->doCall('VM.set_suspend_VDI',array(
			$this->session_id,
			$VM,
			$VDI
		));
	}
	public function assert_can_be_recovered($VM,$session_to){
		return $this->doCall('VM.assert_can_be_recovered',array(
			$this->session_id,
			$VM,
			$session_to
		));
	}
	public function recover($VM,$session_to,$force){
		return $this->doCall('VM.recover',array(
			$this->session_id,
			$VM,
			$session_to,
			$force
		));
	}
	public function import_convert($type,$username,$password,$SR,$remote_config){
		return $this->doCall('VM.import_convert',array(
			$this->session_id,
			$type,
			$username,
			$password,
			$SR,
			$remote_config
		));
	}
	public function set_appliance($VM,$VM_appliance){
		return $this->doCall('VM.set_appliance',array(
			$this->session_id,
			$VM,
			$VM_appliance
		));
	}
	public function query_services($VM){
		return $this->doCall('VM.query_services',array(
			$this->session_id,
			$VM
		));
	}

	public function get_all(){
		return $this->doCall('VM.get_all',array(
			$this->session_id
		));
	}

	public function get_uuid($VM){
		return $this->doCall('VM.get_uuid',array(
			$this->session_id,
			$VM
		));
	}
	public function get_allowed_operations($VM){
		return $this->doCall('VM.get_allowed_operations',array(
			$this->session_id,
			$VM
		));
	}
	public function get_current_operations($VM){
		return $this->doCall('VM.get_current_operations',array(
			$this->session_id,
			$VM
		));
	}





	public function get_power_state($VM){
		return $this->doCall('VM.get_power_state',array(
			$this->session_id,
			$VM
		));
	}

	public function get_name_label($VM){
		return $this->doCall('VM.get_name_label',array(
			$this->session_id,
			$VM
		));
	}

	public function set_name_label($VM,$label){
		return $this->doCall('VM.set_name_label',array(
			$this->session_id,
			$VM,
			$label
		));
	}

	public function get_name_description($VM){
		return $this->doCall('VM.get_name_description',array(
			$this->session_id,
			$VM
		));
	}

	public function set_name_description($VM,$description){
		return $this->doCall('VM.set_name_description',array(
			$this->session_id,
			$VM,
			$description
		));
	}

	public function get_user_version($VM){
		return $this->doCall('VM.get_user_version',array(
			$this->session_id,
			$VM
		));
	}

	public function set_user_version($VM,$version){
		return $this->doCall('VM.set_user_version',array(
			$this->session_id,
			$VM,
			$version
		));
	}

	public function get_is_a_template($VM){
		return $this->doCall('VM.get_is_a_template',array(
			$this->session_id,
			$VM
		));
	}

	public function set_is_a_template($VM,$is_a_template){
		return $this->doCall('VM.set_is_a_template',array(
			$this->session_id,
			$VM,
			$is_a_template
		));
	}

	public function get_suspend_VDI($VM){
		return $this->doCall('VM.get_suspend_VDI',array(
			$this->session_id,
			$VM
		));
	}
	public function get_resident_on($VM){
		return $this->doCall('VM.get_resident_on',array(
			$this->session_id,
			$VM
		));
	}
	public function get_affinity($VM){
		return $this->doCall('VM.get_affinity',array(
			$this->session_id,
			$VM
		));
	}
	public function set_affinity($VM,$value){
		return $this->doCall('VM.set_affinity',array(
			$this->session_id,
			$VM,
			$value
		));
	}
	public function get_memory_overhead($VM){
		return $this->doCall('VM.get_memory_overhead',array(
			$this->session_id,
			$VM
		));
	}
	public function get_memory_target($VM){
		return $this->doCall('VM.get_memory_target',array(
			$this->session_id,
			$VM
		));
	}

	public function get_memory_static_max($VM){
		return $this->doCall('VM.get_memory_static_max',array(
			$this->session_id,
			$VM
		));
	}

	public function get_memory_dynamic_max($VM){
		return $this->doCall('VM.get_memory_dynamic_max',array(
			$this->session_id,
			$VM
		));
	}

	public function get_memory_dynamic_min($VM){
		return $this->doCall('VM.get_memory_dynamic_min',array(
			$this->session_id,
			$VM
		));
	}

	public function get_memory_static_min($VM){
		return $this->doCall('VM.get_memory_static_min',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VCPUs_params($VM){
		return $this->doCall('VM.get_VCPUs_params',array(
			$this->session_id,
			$VM
		));
	}

	public function set_VCPUs_params($VM,Array $params){
		return $this->doCall('VM.set_VCPUs_params',array(
			$this->session_id,
			$VM,
			$params
		));
	}

	public function add_to_VCPUs_params($VM,$key,$value){
		return $this->doCall('VM.add_to_VCPUs_params',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}

	public function remove_from_VCPUs_params($VM,$key){
		return $this->doCall('VM.remove_from_VCPUs_params',array(
			$this->session_id,
			$VM,
			$key
		));
	}

	public function get_VCPUs_max($VM){
		return $this->doCall('VM.get_VCPUs_max',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VCPUs_at_startup($VM){
		return $this->doCall('VM.get_VCPUs_at_startup',array(
			$this->session_id,
			$VM
		));
	}

	public function get_actions_after_shutdown($VM){
		return $this->doCall('VM.get_actions_after_shutdown',array(
			$this->session_id,
			$VM
		));
	}

	public function set_actions_after_shutdown($VM,$on_normal_exit){
		return $this->doCall('VM.set_actions_after_shutdown',array(
			$this->session_id,
			$VM,
			$on_normal_exit
		));
	}

	public function get_actions_after_reboot($VM){
		return $this->doCall('VM.get_actions_after_reboot',array(
			$this->session_id,
			$VM
		));
	}

	public function set_actions_after_reboot($VM,$on_normal_exit){
		return $this->doCall('VM.set_actions_after_reboot',array(
			$this->session_id,
			$VM,
			$on_normal_exit
		));
	}

	public function get_actions_after_crash($VM){
		return $this->doCall('VM.get_actions_after_crash',array(
			$this->session_id,
			$VM
		));
	}

	public function set_actions_after_crash($VM,$on_crash_behavior){
		return $this->doCall('VM.set_actions_after_crash',array(
			$this->session_id,
			$VM,
			$on_crash_behavior
		));
	}

	public function get_consoles($VM){
		return $this->doCall('VM.get_consoles',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VIFs($VM){
		return $this->doCall('VM.get_VIFs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VBDs($VM){
		return $this->doCall('VM.get_VBDs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_crash_dumps($VM){
		return $this->doCall('VM.get_crash_dumps',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VTPMs($VM){
		return $this->doCall('VM.get_VTPMs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_PV_bootloader($VM){
		return $this->doCall('VM.get_PV_bootloader',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_bootloader($VM,$PV_bootloader){
		return $this->doCall('VM.set_PV_bootloader',array(
			$this->session_id,
			$VM,
			$PV_bootloader
		));
	}

	public function get_PV_kernel($VM){
		return $this->doCall('VM.get_PV_kernel',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_kernel($VM,$PV_kernel){
		return $this->doCall('VM.set_PV_kernel',array(
			$this->session_id,
			$VM,
			$PV_kernel
		));
	}

	public function get_PV_ramdisk($VM){
		return $this->doCall('VM.get_PV_ramdisk',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_ramdisk($VM,$PV_ramdisk){
		return $this->doCall('VM.set_PV_ramdisk',array(
			$this->session_id,
			$VM,
			$PV_ramdisk
		));
	}

	public function get_PV_args($VM){
		return $this->doCall('VM.get_PV_args',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_args($VM,$PV_args){
		return $this->doCall('VM.set_PV_args',array(
			$this->session_id,
			$VM,
			$PV_args
		));
	}

	public function get_PV_bootloader_args($VM){
		return $this->doCall('VM.get_PV_bootloader_args',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_bootloader_args($VM,$PV_bootloader_args){
		return $this->doCall('VM.set_PV_bootloader_args',array(
			$this->session_id,
			$VM,
			$PV_bootloader_args
		));
	}

	public function get_PV_legacy_args($VM){
		return $this->doCall('VM.get_PV_legacy_args',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PV_legacy_args($VM,$PV_legacy_args){
		return $this->doCall('VM.set_PV_legacy_args',array(
			$this->session_id,
			$VM,
			$PV_legacy_args
		));
	}

	public function get_HVM_boot_policy($VM){
		return $this->doCall('VM.get_HVM_boot_policy',array(
			$this->session_id,
			$VM
		));
	}

	public function set_HVM_boot_policy($VM,$HVM_boot_policy){
		return $this->doCall('VM.set_HVM_boot_policy',array(
			$this->session_id,
			$VM,
			$HVM_boot_policy
		));
	}

	public function get_HVM_boot_params($VM){
		return $this->doCall('VM.get_HVM_boot_params',array(
			$this->session_id,
			$VM
		));
	}

	public function set_HVM_boot_params($VM,Array $HVM_boot_params){
		return $this->doCall('VM.set_HVM_boot_params',array(
			$this->session_id,
			$VM,
			$HVM_boot_params
		));
	}

	public function add_to_HVM_boot_params($VM,$key,$value){
		return $this->doCall('VM.add_to_HVM_boot_params',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}

	public function remove_from_HVM_boot_params($VM,$key){
		return $this->doCall('VM.remove_from_HVM_boot_params',array(
			$this->session_id,
			$VM,
			$key
		));
	}

	public function get_HVM_shadow_multiplier($VM){
		return $this->doCall('VM.get_HVM_shadow_multiplier',array(
			$this->session_id,
			$VM
		));
	}

	public function get_platform($VM){
		return $this->doCall('VM.get_platform',array(
			$this->session_id,
			$VM
		));
	}

	public function set_platform($VM,Array $platform){
		return $this->doCall('VM.set_platform',array(
			$this->session_id,
			$VM,
			$platform
		));
	}

	public function add_to_platform($VM,$key,$value){
		return $this->doCall('VM.add_to_platform',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}

	public function remove_from_platform($VM,$key){
		return $this->doCall('VM.remove_from_platform',array(
			$this->session_id,
			$VM,
			$key
		));
	}

	public function get_PCI_bus($VM){
		return $this->doCall('VM.get_PCI_bus',array(
			$this->session_id,
			$VM
		));
	}

	public function set_PCI_bus($VM,$PCI_bus){
		return $this->doCall('VM.set_PCI_bus',array(
			$this->session_id,
			$VM,
			$PCI_bus
		));
	}

	public function get_other_config($VM){
		return $this->doCall('VM.get_other_config',array(
			$this->session_id,
			$VM
		));
	}

	public function set_other_config($VM,Array $config){
		return $this->doCall('VM.set_other_config',array(
			$this->session_id,
			$VM,
			$config
		));
	}

	public function add_to_other_config($VM,$key,$value){
		return $this->doCall('VM.add_to_other_config',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}

	public function remove_from_other_config($VM,$key){
		return $this->doCall('VM.remove_from_other_config',array(
			$this->session_id,
			$VM,
			$key
		));
	}

	public function get_domid($VM){
		return $this->doCall('VM.get_domid',array(
			$this->session_id,
			$VM
		));
	}

	public function get_domarch($VM){
		return $this->doCall('VM.get_domarch',array(
			$this->session_id,
			$VM
		));
	}

	public function get_last_boot_CPU_flags($VM){
		return $this->doCall('VM.get_last_boot_CPU_flags',array(
			$this->session_id,
			$VM
		));
	}

	public function get_is_control_domain($VM){
		return $this->doCall('VM.get_is_control_domain',array(
			$this->session_id,
			$VM
		));
	}

	public function get_metrics($VM){
		return $this->doCall('VM.get_metrics',array(
			$this->session_id,
			$VM
		));
	}

	public function get_guest_metrics($VM){
		return $this->doCall('VM.get_guest_metrics',array(
			$this->session_id,
			$VM
		));
	}

	public function get_last_booted_record($VM){
		return $this->doCall('VM.get_last_booted_record',array(
			$this->session_id,
			$VM
		));
	}

	public function get_recommendations($VM){
		return $this->doCall('VM.get_recommendations',array(
			$this->session_id,
			$VM
		));
	}

	public function set_recommendations($VM,$recommendations){
		return $this->doCall('VM.set_recommendations',array(
			$this->session_id,
			$VM,
			$recommendations
		));
	}

	public function get_xenstore_data($VM){
		return $this->doCall('VM.get_xenstore_data',array(
			$this->session_id,
			$VM
		));
	}

	public function set_xenstore_data($VM,Array $xenstore_data){
		return $this->doCall('VM.set_xenstore_data',array(
			$this->session_id,
			$VM,
			$xenstore_data
		));
	}

	public function add_to_xenstore_data($VM,$key,$value){
		return $this->doCall('VM.add_to_xenstore_data',array(
			$this->session_id,
			$VM,
			$key,
			$value
		));
	}

	public function remove_from_xenstore_data($VM,$key){
		return $this->doCall('VM.remove_from_xenstore_data',array(
			$this->session_id,
			$VM,
			$key
		));
	}

	public function get_ha_always_run($VM){
		return $this->doCall('VM.get_ha_always_run',array(
			$this->session_id,
			$VM
		));
	}

	public function get_ha_restart_priority($VM){
		return $this->doCall('VM.get_ha_restart_priority',array(
			$this->session_id,
			$VM
		));
	}

	public function get_is_a_snapshot($VM){
		return $this->doCall('VM.get_is_a_snapshot',array(
			$this->session_id,
			$VM
		));
	}

	public function get_snapshot_of($VM){
		return $this->doCall('VM.get_snapshot_of',array(
			$this->session_id,
			$VM
		));
	}

	public function get_snapshots($VM){
		return $this->doCall('VM.get_snapshots',array(
			$this->session_id,
			$VM
		));
	}

	public function get_snapshot_time($VM){
		return $this->doCall('VM.get_snapshot_time',array(
			$this->session_id,
			$VM
		));
	}

	public function get_transportable_snapshot_id($VM){
		return $this->doCall('VM.get_transportable_snapshot_id',array(
			$this->session_id,
			$VM
		));
	}

	public function get_blobs($VM){
		return $this->doCall('VM.get_blobs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_tags($VM){
		return $this->doCall('VM.get_tags',array(
			$this->session_id,
			$VM
		));
	}

	public function set_tags($VM,Array $tags){
		return $this->doCall('VM.set_tags',array(
			$this->session_id,
			$VM,
			$tags
		));
	}

	public function add_tags($VM,$tag){
		return $this->doCall('VM.add_tags',array(
			$this->session_id,
			$VM,
			$tag
		));
	}

	public function remove_tags($VM,$tag){
		return $this->doCall('VM.remove_tags',array(
			$this->session_id,
			$VM,
			$tag
		));
	}

	public function get_blocked_operations($VM){
		return $this->doCall('VM.get_blocked_operations',array(
			$this->session_id,
			$VM
		));
	}

	public function set_blocked_operations($VM,Array $operations){
		return $this->doCall('VM.set_blocked_operations',array(
			$this->session_id,
			$VM,
			$operations
		));
	}

	public function add_to_blocked_operations($VM,$vm_operation,$value){
		return $this->doCall('VM.set_blocked_operations',array(
			$this->session_id,
			$VM,
			$vm_operation,
			$value
		));
	}

	public function remove_from_blocked_operations($VM,$vm_operation){
		return $this->doCall('VM.remove_from_blocked_operations',array(
			$this->session_id,
			$VM,
			$vm_operation
		));
	}

	public function get_snapshot_info($VM){
		return $this->doCall('VM.get_snapshot_info',array(
			$this->session_id,
			$VM
		));
	}

	public function get_snapshot_metadata($VM){
		return $this->doCall('VM.get_snapshot_metadata',array(
			$this->session_id,
			$VM
		));
	}

	public function get_parent($VM){
		return $this->doCall('VM.get_parent',array(
			$this->session_id,
			$VM
		));
	}

	public function get_children($VM){
		return $this->doCall('VM.get_children',array(
			$this->session_id,
			$VM
		));
	}

	public function get_bios_strings($VM){
		return $this->doCall('VM.get_bios_strings',array(
			$this->session_id,
			$VM
		));
	}

	public function get_protection_policy($VM){
		return $this->doCall('VM.get_protection_policy',array(
			$this->session_id,
			$VM
		));
	}

	public function get_is_snapshot_from_vmpp($VM){
		return $this->doCall('VM.get_is_snapshot_from_vmpp',array(
			$this->session_id,
			$VM
		));
	}

	public function get_appliance($VM){
		return $this->doCall('VM.get_appliance',array(
			$this->session_id,
			$VM
		));
	}

	public function get_start_delay($VM){
		return $this->doCall('VM.get_start_delay',array(
			$this->session_id,
			$VM
		));
	}

	public function get_shutdown_delay($VM){
		return $this->doCall('VM.get_shutdown_delay',array(
			$this->session_id,
			$VM
		));
	}

	public function get_order($VM){
		return $this->doCall('VM.get_order',array(
			$this->session_id,
			$VM
		));
	}

	public function get_VGPUs($VM){
		return $this->doCall('VM.get_VGPUs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_attached_PCIs($VM){
		return $this->doCall('VM.get_attached_PCIs',array(
			$this->session_id,
			$VM
		));
	}

	public function get_suspend_SR($VM){
		return $this->doCall('VM.get_suspend_SR',array(
			$this->session_id,
			$VM
		));
	}

	public function set_suspend_SR($VM,$SR){
		return $this->doCall('VM.set_suspend_SR',array(
			$this->session_id,
			$VM,
			$SR
		));
	}

	public function get_version($VM){
		return $this->doCall('VM.get_version',array(
			$this->session_id,
			$VM
		));
	}

	public function create(Array $VMRecord){
		return $this->doCall('VM.create',array(
			$this->session_id,
			$VMRecord
		));
	}

	public function destroy($VM){
		return $this->doCall('VM.destroy',array(
			$this->session_id,
			$VM
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VM.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VM){
		return $this->doCall('VM.get_record',array(
			$this->session_id,
			$VM
		));
	}

	public function get_by_name_label($label){
		return $this->doCall('VM.get_by_name_label',array(
			$this->session_id,
			$label
		));
	}
}
