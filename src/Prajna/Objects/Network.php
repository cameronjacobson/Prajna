<?php

namespace Prajna\Objects;

class Network
{
	public $uuid;
	public $name_label;
	public $name_description;
	public $allowed_operations;
	public $current_operations;
	public $VIFs;
	public $PIFs;
	public $MTU;
	public $other_config;
	public $bridge;
	public $blobs;
	public $tags;
	public $default_locking_mode;

	public function __construct(){}
}
