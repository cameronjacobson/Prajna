<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class PGPU
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('PGPU.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('PGPU.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($PGPU){
		return $this->doCall('PGPU.get_uuid',array(
			$this->session_id,
			$PGPU
		));
	}

	public function get_PCI($PGPU){
		return $this->doCall('PGPU.get_PCI',array(
			$this->session_id,
			$PGPU
		));
	}

	public function get_GPU_group($PGPU){
		return $this->doCall('PGPU.get_GPU_group',array(
			$this->session_id,
			$PGPU
		));
	}

	public function get_host($PGPU){
		return $this->doCall('PGPU.get_host',array(
			$this->session_id,
			$PGPU
		));
	}

    public function get_other_config($PGPU){
        return $this->doCall('PGPU.get_other_config',array(
            $this->session_id,
            $PGPU
        ));
    }

    public function set_other_config($PGPU,Array $config){
        return $this->doCall('PGPU.set_other_config',array(
            $this->session_id,
            $PGPU,
            $config
        ));
    }

    public function add_to_other_config($PGPU,$key,$value){
        return $this->doCall('PGPU.add_to_other_config',array(
            $this->session_id,
            $PGPU,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($PGPU,$key){
        return $this->doCall('PGPU.remove_from_other_config',array(
            $this->session_id,
            $PGPU,
            $key
        ));
    }

	public function get_by_uuid($uuid){
		return $this->doCall('PGPU.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($PGPU){
		return $this->doCall('PGPU.get_record',array(
			$this->session_id,
			$PGPU
		));
	}
}
