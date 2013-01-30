<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Message
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($name,$priority,$cls,$obj_uuid,$body){
		return $this->doCall('message.create',array(
			$this->session_id,
			$name,
			$priority,
			$cls,
			$obj_uuid,
			$body
		));
	}

	public function destroy($message){
		return $this->doCall('message.destroy',array(
			$this->session_id,
			$message
		));
	}

	public function get($cls,$obj_uuid,$since){
		return $this->doCall('message.get',array(
			$this->session_id,
			$cls,
			$obj_uuid,
			$since
		));
	}

	public function get_all(){
		return $this->doCall('message.get_all',array(
			$this->session_id
		));
	}

	public function get_since($since){
		return $this->doCall('message.get_since',array(
			$this->session_id,
			$since
		));
	}

	public function get_record($message){
		return $this->doCall('message.get_record',array(
			$this->session_id,
			$message
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('message.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_all_records(){
		return $this->doCall('message.get_all_records',array(
			$this->session_id
		));
	}

	public function get_all_records_where($expr){
		return $this->doCall('message.get_all_records_where',array(
			$this->session_id,
			$expr
		));
	}
}
