<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VM
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($session_id){
		$this->session_id = $session_id;
	}

	public function clone(){}
	public function start(){}
	public function pause(){}
	public function unpause(){}
	public function clean_shutdown(){}
	public function clean_reboot(){}
	public function hard_shutdown(){}
	public function hard_reboot(){}
	public function suspend(){}
	public function resume(){}
	public function set_VCPUs_number_live(){}
	public function add_to_VCPUs_params_live(){}
	public function set_memory_dynamic_max_live(){}
	public function set_memory_dynamic_min_live(){}
	public function send_sysrq(){}
	public function send_trigger(){}
	public function migrate(){}
	public function get_all(){}
	public function get_uuid(){}
	public function get_power_state(){}
	public function get_name_label(){}
	public function set_name_label(){}
	public function get_name_description(){}
	public function set_name_description(){}
	public function get_user_version(){}
	public function set_user_version(){}
	public function get_is_a_template(){}
	public function set_is_a_template(){}
	public function get_auto_power_on(){}
	public function set_auto_power_on(){}
	public function get_suspend_VDI(){}
	public function get_resident_on(){}
	public function get_memory_static_max(){}
	public function set_memory_static_max(){}
	public function get_memory_dynamic_max(){}
	public function set_memory_dynamic_max(){}
	public function get_memory_dynamic_min(){}
	public function set_memory_dynamic_min(){}
	public function get_memory_static_min(){}
	public function set_memory_static_min(){}
	public function get_VCPUs_params(){}
	public function set_VCPUs_params(){}
	public function add_to_VCPUs_params(){}
	public function remove_from_VCPUs_params(){}
	public function get_VCPUs_max(){}
	public function set_VCPUs_max(){}
	public function get_VCPUs_at_startup(){}
	public function set_VCPUs_at_startup(){}
	public function get_actions_after_shutdown(){}
	public function set_actions_after_shutdown(){}
	public function get_actions_after_reboot(){}
	public function set_actions_after_reboot(){}
	public function get_actions_after_crash(){}
	public function set_actions_after_crash(){}
	public function get_consoles(){}
	public function get_VIFs(){}
	public function get_VBDs(){}
	public function get_crash_dumps(){}
	public function get_VTPMs(){}
	public function get_DPCIs(){}
	public function get_PV_bootloader(){}
	public function set_PV_bootloader(){}
	public function get_PV_kernel(){}
	public function set_PV_kernel(){}
	public function get_PV_ramdisk(){}
	public function set_PV_ramdisk(){}
	public function get_PV_args(){}
	public function set_PV_args(){}
	public function get_PV_bootloader_args(){}
	public function set_PV_bootloader_args(){}
	public function get_HVM_boot_policy(){}
	public function set_HVM_boot_policy(){}
	public function get_HVM_boot_params(){}
	public function set_HVM_boot_params(){}
	public function add_to_HVM_boot_params(){}
	public function remove_from_HVM_boot_params(){}
	public function get_platform(){}
	public function set_platform(){}
	public function add_to_platform(){}
	public function remove_from_platform(){}
	public function get_PCI_bus(){}
	public function set_PCI_bus(){}
	public function get_other_config(){}
	public function set_other_config(){}
	public function add_to_other_config(){}
	public function remove_from_other_config(){}
	public function get_domid(){}
	public function get_is_control_domain(){}
	public function get_metrics(){}
	public function get_guest_metrics(){}
	public function get_security_label(){}
	public function set_security_label(){}
	public function create(){}
	public function destroy(){}
	public function get_by_uuid(){}
	public function get_record(){}
	public function get_by_name_label(){}
}
