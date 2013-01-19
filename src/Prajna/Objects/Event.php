<?php

namespace Prajna\Objects;

class Event
{
	public $id;
	public $timestamp;
	public $class;
	public $operation;
	public $ref;
	public $obj_uuid;

	public function __construct(){}
}
