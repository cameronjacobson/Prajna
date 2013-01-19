<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Host
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function disable(){}
	public function enable(){}
	public function shutdown(){}
	public function reboot(){}
	public function dmesg(){}
	public function dmesg_clear(){}
	public function get_log(){}
	public function send_debug_keys(){}
	public function list_methods(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_name_label(){}
	public function set_name_label(){}
	public function get_name_description(){}
	public function set_name_description(){}
	public function get_API_version_major(){}
	public function get_API_version_minor(){}
	public function get_API_version_vendor(){}
	public function get_API_version_vendor_implementation(){}
	public function get_enabled(){}
	public function get_software_version(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function add_to_other_config(){}
	public function remove_from_other_config(){}
	public function get_capabilities(){}
	public function get_cpu_configuration(){}
	public function get_sched_policy(){}
	public function get_supported_bootloaders(){}
	public function get_resident_VMs(){}
	public function get_logging(){}
	public function set_logging(){}
	public function add_to_logging(){}
	public function remove_from_logging(){}
	public function get_PIFs(){}
	public function get_suspend_image_sr(){}
	public function set_suspend_image_sr(){}
	public function get_crash_dump_sr(){}
	public function set_crash_dump_sr(){}
	public function get_PBDs(){}
	public function get_PPCIs(){}
	public function get_host_CPUs(){}
	public function get_metrics(){}
	public function get_by_uuid(){}
	public function get_record(){}
	public function get_by_name_label(){}
}
