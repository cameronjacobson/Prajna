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

	public function clone($VM,$newname){
        return $this->doCall('VM.clone',array(
            $this->session_id,
			$VM,
			$newname
        ));
	}

	public function start($VM,$paused){
        return $this->doCall('VM.start',array(
            $this->session_id,
			$VM,
			$paused
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

	public function resume($VM,$paused){
        return $this->doCall('VM.resume',array(
            $this->session_id,
			$VM,
			$paused
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

	public function set_memory_dynamic_max_live($VM,$maxMemory){
        return $this->doCall('VM.set_memory_dynamic_max_live',array(
            $this->session_id,
			$VM,
			$maxMemory
        ));
	}

	public function set_memory_dynamic_min_live($VM,$minMemory){
        return $this->doCall('VM.set_memory_dynamic_min_live',array(
            $this->session_id,
			$VM,
			$minMemory
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

	public function migrate($VM,$destination,$live,Array $params){
        return $this->doCall('VM.migrate',array(
            $this->session_id,
			$VM,
			$destination,
			$live,
			$params
        ));
	}

	public function get_all(){
        return $this->doCall('VM.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($VM){
        return $this->doCall('VM.get_all',array(
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

	public function get_auto_power_on($VM){
        return $this->doCall('VM.get_auto_power_on',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_auto_power_on($VM,$auto_power_on){
        return $this->doCall('VM.set_auto_power_on',array(
            $this->session_id,
			$VM,
			$auto_power_on
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

	public function get_memory_static_max($VM){
        return $this->doCall('VM.get_memory_static_max',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_memory_static_max($VM,$maxMemory){
        return $this->doCall('VM.set_memory_static_max',array(
            $this->session_id,
			$VM,
			$maxMemory
        ));
	}

	public function get_memory_dynamic_max($VM){
        return $this->doCall('VM.get_memory_dynamic_max',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_memory_dynamic_max($VM,$maxMemory){
        return $this->doCall('VM.set_memory_dynamic_max',array(
            $this->session_id,
			$VM,
			$maxMemory
        ));
	}

	public function get_memory_dynamic_min($VM){
        return $this->doCall('VM.get_memory_dynamic_min',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_memory_dynamic_min($VM,$minMemory){
        return $this->doCall('VM.set_memory_dynamic_min',array(
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

	public function set_memory_static_min($VM,$minMemory){
        return $this->doCall('VM.set_memory_static_min',array(
            $this->session_id,
			$VM,
			$minMemory
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

	public function set_VCPUs_max($VM,$maxVCPUs){
        return $this->doCall('VM.set_VCPUs_max',array(
            $this->session_id,
			$VM,
			$maxVCPUs
        ));
	}

	public function get_VCPUs_at_startup($VM){
        return $this->doCall('VM.get_VCPUs_at_startup',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_VCPUs_at_startup($VM,$numVCPUs){
        return $this->doCall('VM.set_VCPUs_at_startup',array(
            $this->session_id,
			$VM,
			$numVCPUs
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

	public function get_actions_after_crash($VM,$on_crash_behavior){
        return $this->doCall('VM.get_actions_after_crash',array(
            $this->session_id,
			$VM,
			$on_crash_behavior
        ));
	}

	public function set_actions_after_crash($VM){
        return $this->doCall('VM.set_actions_after_crash',array(
            $this->session_id,
			$VM
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

	public function get_DPCIs($VM){
        return $this->doCall('VM.get_DPCIs',array(
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

	public function get_security_label($VM){
        return $this->doCall('VM.get_security_label',array(
            $this->session_id,
			$VM
        ));
	}

	public function set_security_label($VM,$label,$oldlabel){
        return $this->doCall('VM.set_security_label',array(
            $this->session_id,
			$VM,
			$label,
			$oldlabel
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
