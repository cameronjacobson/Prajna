<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Blob
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($mime_type, $public){
		return $this->doCall('blob.create',array(
			$this->session_id,
			$mime_type,
			$public
		));
	}

	public function destroy($blob){
		return $this->doCall('blob.destroy',array(
			$this->session_id,
			$blob
		));
	}

	public function get_all(){
		return $this->doCall('blob.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('blob.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($blob){
		return $this->doCall('blob.get_uuid',array(
			$this->session_id,
			$blob
		));
	}

	public function get_name_label($blob){
		return $this->doCall('blob.get_name_label',array(
			$this->session_id,
			$blob
		));
	}

	public function set_name_label($blob,$name_label){
		return $this->doCall('blob.set_name_label',array(
			$this->session_id,
			$blob,
			$name_label
		));
	}

	public function get_name_description($blob){
		return $this->doCall('blob.get_name_description',array(
			$this->session_id,
			$blob
		));
	}

	public function set_name_description($blob,$name_description){
		return $this->doCall('blob.set_name_description',array(
			$this->session_id,
			$blob,
			$name_description
		));
	}

	public function get_size($blob){
		return $this->doCall('blob.get_size',array(
			$this->session_id,
			$blob
		));
	}

	public function get_public($blob){
		return $this->doCall('blob.get_public',array(
			$this->session_id,
			$blob
		));
	}

	public function set_public($blob,$public){
		return $this->doCall('blob.set_public',array(
			$this->session_id,
			$blob,
			$public
		));
	}

	public function get_last_updated($blob){
		return $this->doCall('blob.get_last_updated',array(
			$this->session_id,
			$blob
		));
	}

	public function get_mime_type($blob){
		return $this->doCall('blob.get_mime_type',array(
			$this->session_id,
			$blob
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('blob.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($blob){
		return $this->doCall('blob.get_record',array(
			$this->session_id,
			$blob
		));
	}

	public function get_by_name_label($name_label){
		return $this->doCall('blob.get_by_name_label',array(
			$this->session_id,
			$name_label
		));
	}
}
