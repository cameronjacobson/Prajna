<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PIF
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create_VLAN($device,$network,$host,$VLAN){
		return $this->doCall('PIF.create_VLAN',array(
			$this->session_id,
			$device,
			$network,
			$host,
			$VLAN
		));
	}

	public function destroy($PIF){
		return $this->doCall('PIF.destroy',array(
			$this->session_id,
			$PIF
		));
	}

	public function reconfigure_ip($PIF,$mode,$IP,$netmask,$gateway,$DNS){
		return $this->doCall('PIF.reconfigure_ip',array(
			$this->session_id,
			$PIF,
			$mode,
			$IP,
			$netmask,
			$gateway,
			$DNS
		));
	}

	public function reconfigure_ipv6($PIF,$mode,$IPv6,$gateway,$DNS){
		return $this->doCall('PIF.reconfigure_ipv6',array(
			$this->session_id,
			$PIF,
			$mode,
			$IPv6,
			$gateway,
			$DNS
		));
	}

	public function set_primary_address_type($PIF,$address_type){
		return $this->doCall('PIF.set_primary_address_type',array(
			$this->session_id,
			$PIF,
			$address_type
		));
	}

	public function scan($host){
		return $this->doCall('PIF.scan',array(
			$this->session_id,
			$host
		));
	}

	public function introduce($host,$MAC,$device){
		return $this->doCall('PIF.introduce',array(
			$this->session_id,
			$host,
			$MAC,
			$device
		));
	}

	public function forget($PIF){
		return $this->doCall('PIF.forget',array(
			$this->session_id,
			$PIF
		));
	}

	public function unplug($PIF){
		return $this->doCall('PIF.unplug',array(
			$this->session_id,
			$PIF
		));
	}

	public function plug($PIF){
		return $this->doCall('PIF.plug',array(
			$this->session_id,
			$PIF
		));
	}

	public function db_introduce($device,$network,$host,$MAC,$MTU,$VLAN,$physical,$ip_configuration_mode,
		$IP,$netmask,$gateway,$DNS,$bond_slave_of,$VLAN_master_of,$management,$other_config,$disallow_unplug,
		$ipv6_configuration_mode,$IPv6,$ipv6_gateway,$primary_address_type){
		return $this->doCall('PIF.db_introduce',array(
			$this->session_id,
			$device,
			$network,
			$host,
			$MAC,
			$MTU,
			$VLAN,
			$physical,
			$ip_configuration_mode,
			$IP,
			$netmask,
			$gateway,
			$DNS,
			$bond_slave_of,
			$VLAN_master_of,
			$management,
			$other_config,
			$disallow_unplug,
			$ipv6_configuration_mode,
			$IPv6,
			$ipv6_gateway,
			$primary_address_type
		));
	}

	public function db_forget($PIF){
		return $this->doCall('PIF.db_forget',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_all(){
		return $this->doCall('PIF.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('PIF.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($PIF){
		return $this->doCall('PIF.get_uuid',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_device($PIF){
		return $this->doCall('PIF.get_device',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_network($PIF){
		return $this->doCall('PIF.get_network',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_host($PIF){
		return $this->doCall('PIF.get_host',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_MAC($PIF){
		return $this->doCall('PIF.get_MAC',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_MTU($PIF){
		return $this->doCall('PIF.get_MTU',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_VLAN($PIF){
		return $this->doCall('PIF.get_VLAN',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_metrics($PIF){
		return $this->doCall('PIF.get_metrics',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_physical($PIF){
		return $this->doCall('PIF.get_physical',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_currently_attached($PIF){
		return $this->doCall('PIF.get_currently_attached',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_ip_configuration_mode($PIF){
		return $this->doCall('PIF.get_ip_configuration_mode',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_IP($PIF){
		return $this->doCall('PIF.get_IP',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_netmask($PIF){
		return $this->doCall('PIF.get_netmask',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_gateway($PIF){
		return $this->doCall('PIF.get_gateway',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_DNS($PIF){
		return $this->doCall('PIF.get_DNS',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_bond_slave_of($PIF){
		return $this->doCall('PIF.get_bond_slave_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_bond_master_of($PIF){
		return $this->doCall('PIF.get_bond_master_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_VLAN_master_of($PIF){
		return $this->doCall('PIF.get_VLAN_master_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_VLAN_slave_of($PIF){
		return $this->doCall('PIF.get_VLAN_slave_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_management($PIF){
		return $this->doCall('PIF.get_management',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_other_config($PIF){
		return $this->doCall('PIF.get_other_config',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_other_config($PIF,Array $config){
		return $this->doCall('PIF.set_other_config',array(
			$this->session_id,
			$PIF,
			$config
		));
	}

	public function add_to_other_config($PIF,$key,$value){
		return $this->doCall('PIF.get_other_config',array(
			$this->session_id,
			$PIF,
			$key,
			$value
		));
	}

	public function remove_from_other_config($PIF,$key){
		return $this->doCall('PIF.get_other_config',array(
			$this->session_id,
			$PIF,
			$key
		));
	}

	public function get_disallow_unplug($PIF){
		return $this->doCall('PIF.get_disallow_unplug',array(
			$this->session_id,
			$PIF
		));
	}

	public function set_disallow_unplug($PIF,$value){
		return $this->doCall('PIF.set_disallow_unplug',array(
			$this->session_id,
			$PIF,
			$value
		));
	}

	public function get_tunnel_access_PIF_of($PIF){
		return $this->doCall('PIF.get_tunnel_access_PIF_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_tunnel_transport_PIF_of($PIF){
		return $this->doCall('PIF.get_tunnel_transport_PIF_of',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_ipv6_configuration_mode($PIF){
		return $this->doCall('PIF.get_ipv6_configuration_mode',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_IPv6($PIF){
		return $this->doCall('PIF.get_IPv6',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_ipv6_gateway($PIF){
		return $this->doCall('PIF.get_ipv6_gateway',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_primary_address_type($PIF){
		return $this->doCall('PIF.get_primary_address_type',array(
			$this->session_id,
			$PIF
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('PIF.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($PIF){
		return $this->doCall('PIF.get_record',array(
			$this->session_id,
			$PIF
		));
	}
}
