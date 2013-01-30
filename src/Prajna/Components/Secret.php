<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class Secret
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function get_all(){
		return $this->doCall('secret.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('secret.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($secret){
		return $this->doCall('secret.get_uuid',array(
			$this->session_id,
			$secret
		));
	}

	public function get_value($secret){
		return $this->doCall('secret.get_value',array(
			$this->session_id,
			$secret
		));
	}

	public function set_value($secret,$value){
		return $this->doCall('secret.set_value',array(
			$this->session_id,
			$secret,
			$value
		));
	}

    public function get_other_config($secret){
        return $this->doCall('secret.get_other_config',array(
            $this->session_id,
            $secret
        ));
    }

    public function set_other_config($secret,Array $config){
        return $this->doCall('secret.set_other_config',array(
            $this->session_id,
            $secret,
            $config
        ));
    }

    public function add_to_other_config($secret,$key,$value){
        return $this->doCall('secret.add_to_other_config',array(
            $this->session_id,
            $secret,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($secret,$key){
        return $this->doCall('secret.remove_from_other_config',array(
            $this->session_id,
            $secret,
            $key
        ));
    }

	public function create($PIF,$args){
		return $this->doCall('secret.create',array(
			$this->session_id,
			$args
		));
	}

	public function destroy($secret){
		return $this->doCall('secret.destroy',array(
			$this->session_id,
			$secret
		));
	}

	public function get_by_uuid($uuid){
		return $this->doCall('secret.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($secret){
		return $this->doCall('secret.get_record',array(
			$this->session_id,
			$secret
		));
	}
}
