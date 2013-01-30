<?php

namespace Prajna\Objects;

class Bond
{
	public $uuid;
	public $master;
	public $slaves;
	public $other_config;
	public $primary_slave;
	public $mode;
	public $properties;
	public $links_up;

	public function __construct(){}
}
