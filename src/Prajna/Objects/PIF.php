<?php

namespace Prajna\Objects;

class PIF
{
	public $uuid;
	public $device;
	public $network;
	public $host;
	public $MAC;
	public $MTU;
	public $VLAN;
	public $device_name;
	public $metrics;

	public $physical;
	public $currently_attached;
	public $ip_configuration_mode;
	public $IP;
	public $netmask;
	public $gateway;
	public $DNS;
	public $bond_slave_of;
	public $bond_master_of;
	public $VLAN_master_of;
	public $VLAN_slave_of;
	public $management;
	public $other_config;
	public $disallow_unplug;
	public $tunnel_access_PIF_of;
	public $tunnel_transport_PIF_of;
	public $ipv6_configuration_mode;
	public $IPv6;
	public $ipv6_gateway;
	public $primary_address_type;

	public function __construct(){}
}
