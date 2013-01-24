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
	public function list_methods(Array $methods){
        return $this->doCall('host.list_methods',array(
            $this->session_id,
			$methods
        ));
	}
	public function get_all(){
        return $this->doCall('host.get_all',array(
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
	public function get_PBDs($host){
        return $this->doCall('host.get_PBDs',array(
            $this->session_id,
			$host
        ));
	}
	public function get_PPCIs($host){
        return $this->doCall('host.get_PPCIs',array(
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
	public function get_metrics($host){
        return $this->doCall('host.get_metrics',array(
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
