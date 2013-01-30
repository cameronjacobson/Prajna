<?php

namespace Prajna\Objects;

class HostCpu
{
	public $uuid;
	public $host;
	public $number;
	public $vendor;
	public $speed;
	public $modelname;
	public $family;
	public $model;
	public $stepping;
	public $flags;
	public $features;
	public $utilisation;
	public $other_config;

	public function __construct(){}
}
