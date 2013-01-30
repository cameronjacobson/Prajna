<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Tunnel
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($PIF,$network){
		return $this->doCall('tunnel.create',array(
			$this->session_id,
			$PIF,
			$network
		));
	}

	public function destroy($tunnel){
		return $this->doCall('tunnel.destroy',array(
			$this->session_id,
			$tunnel
		));
	}

	public function get_all(){
		return $this->doCall('tunnel.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('tunnel.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($tunnel){
		return $this->doCall('tunnel.get_uuid',array(
			$this->session_id,
			$tunnel
		));
	}

	public function get_access_PIF($tunnel){
		return $this->doCall('tunnel.get_access_PIF',array(
			$this->session_id,
			$tunnel
		));
	}

	public function get_transport_PIF($tunnel){
		return $this->doCall('tunnel.get_transport_PIF',array(
			$this->session_id,
			$tunnel
		));
	}

	public function get_status($tunnel){
		return $this->doCall('tunnel.get_status',array(
			$this->session_id,
			$tunnel
		));
	}

	public function set_status($tunnel,Array $status){
		return $this->doCall('tunnel.set_status',array(
			$this->session_id,
			$tunnel
		));
	}

	public function add_to_status($tunnel,$key,$value){
		return $this->doCall('tunnel.add_to_status',array(
			$this->session_id,
			$tunnel
		));
	}

	public function remove_from_status($tunnel,$key){
		return $this->doCall('tunnel.remove_from_status',array(
			$this->session_id,
			$tunnel,
			$key
		));
	}

    public function get_other_config($tunnel){
        return $this->doCall('tunnel.get_other_config',array(
            $this->session_id,
            $tunnel
        ));
    }

    public function set_other_config($tunnel,Array $config){
        return $this->doCall('tunnel.set_other_config',array(
            $this->session_id,
            $tunnel,
            $config
        ));
    }

    public function add_to_other_config($tunnel,$key,$value){
        return $this->doCall('tunnel.add_to_other_config',array(
            $this->session_id,
            $tunnel,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($tunnel,$key){
        return $this->doCall('tunnel.remove_from_other_config',array(
            $this->session_id,
            $tunnel,
            $key
        ));
    }

	public function get_by_uuid($uuid){
		return $this->doCall('tunnel.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($tunnel){
		return $this->doCall('tunnel.get_record',array(
			$this->session_id,
			$tunnel
		));
	}
}
