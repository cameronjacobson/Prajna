<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VLAN
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($PIF,$tag,$network){
		return $this->doCall('VLAN.create',array(
			$this->session_id,
			$PIF,
			$tag,
			$network
		));
	}

	public function destroy($VLAN){
		return $this->doCall('VLAN.destroy',array(
			$this->session_id,
			$VLAN
		));
	}

	public function get_all(){
		return $this->doCall('VLAN.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VLAN.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VLAN){
		return $this->doCall('VLAN.get_uuid',array(
			$this->session_id,
			$VLAN
		));
	}

	public function get_tagged_PIF($VLAN){
		return $this->doCall('VLAN.get_tagged_PIF',array(
			$this->session_id,
			$VLAN
		));
	}

	public function get_untagged_PIF($VLAN){
		return $this->doCall('VLAN.get_untagged_PIF',array(
			$this->session_id,
			$VLAN
		));
	}

	public function get_tag($VLAN){
		return $this->doCall('VLAN.get_tag',array(
			$this->session_id,
			$VLAN
		));
	}

    public function get_other_config($VLAN){
        return $this->doCall('VLAN.get_other_config',array(
            $this->session_id,
            $VLAN
        ));
    }

    public function set_other_config($VLAN,Array $config){
        return $this->doCall('VLAN.set_other_config',array(
            $this->session_id,
            $VLAN,
            $config
        ));
    }

    public function add_to_other_config($VLAN,$key,$value){
        return $this->doCall('VLAN.add_to_other_config',array(
            $this->session_id,
            $VLAN,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($VLAN,$key){
        return $this->doCall('VLAN.remove_from_other_config',array(
            $this->session_id,
            $VLAN,
            $key
        ));
    }

	public function get_by_uuid($uuid){
		return $this->doCall('VLAN.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VLAN){
		return $this->doCall('VLAN.get_record',array(
			$this->session_id,
			$VLAN
		));
	}
}
