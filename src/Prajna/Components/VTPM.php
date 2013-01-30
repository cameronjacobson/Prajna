<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VTPM
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_uuid($VTPM){
		return $this->doCall('VTPM.get_uuid',array(
			$this->session_id,
			$VTPM
		));
	}

	public function get_VM($VTPM){
		return $this->doCall('VTPM.get_VM',array(
			$this->session_id,
			$VTPM
		));
	}

	public function get_backend($VTPM){
		return $this->doCall('VTPM.get_backend',array(
			$this->session_id,
			$VTPM
		));
	}

	public function create($VTPMRecord){
		return $this->doCall('VTPM.create',array(
			$this->session_id,
			$VTPMRecord
		));
	}

	public function destroy($VTPM){
		return $this->doCall('VTPM.destroy',array(
			$this->session_id,
			$VTPM
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('VTPM.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VTPM){
		return $this->doCall('VTPM.get_record',array(
			$this->session_id,
			$VTPM
		));
	}
}
