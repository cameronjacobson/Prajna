<?php

namespace Prajna\Objects;

class Network
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $VIFs;
	public $PIFs;
	public $default_gateway;
	public $default_netmask;
	public $other_config;

	public function __construct(){}
}
