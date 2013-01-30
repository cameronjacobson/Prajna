<?php

namespace Prajna\Objects;

class VLAN
{
	public $uuid;
	public $tagged_PIF;
	public $untagged_PIF;
	public $tag;
	public $other_config;

	public function __construct(){}
}
