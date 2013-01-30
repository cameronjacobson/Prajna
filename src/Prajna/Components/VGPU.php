<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class VGPU
{
	use XmlRpcHelper;

	protected $session_id;

	public function __construct($client){
		$this->client = $client;
		$this->session_id = $this->client->session_id;
	}

	public function create($VM,$GPU_group,$device,Array $other_config){
		return $this->doCall('VGPU.create',array(
			$this->session_id,
			$VM,
			$GPU_group,
			$device,
			$other_config
		));
	}

	public function destroy($VGPU){
		return $this->doCall('VGPU.destroy',array(
			$this->session_id,
			$VGPU
		));
	}

	public function get_all(){
		return $this->doCall('VGPU.get_all',array(
			$this->session_id
		));
	}

	public function get_all_records(){
		return $this->doCall('VGPU.get_all_records',array(
			$this->session_id
		));
	}

	public function get_uuid($VGPU){
		return $this->doCall('VGPU.get_uuid',array(
			$this->session_id,
			$VGPU
		));
	}

	public function get_VM($VGPU){
		return $this->doCall('VGPU.get_VM',array(
			$this->session_id,
			$VGPU
		));
	}

	public function get_GPU_group($VGPU){
		return $this->doCall('VGPU.get_GPU_group',array(
			$this->session_id,
			$VGPU
		));
	}

	public function get_device($VGPU){
		return $this->doCall('VGPU.get_device',array(
			$this->session_id,
			$VGPU
		));
	}

	public function get_currently_attached($VGPU){
		return $this->doCall('VGPU.get_currently_attached',array(
			$this->session_id,
			$VGPU
		));
	}

    public function get_other_config($VGPU){
        return $this->doCall('VGPU.get_other_config',array(
            $this->session_id,
            $VGPU
        ));
    }

    public function set_other_config($VGPU,Array $config){
        return $this->doCall('VGPU.set_other_config',array(
            $this->session_id,
            $VGPU,
            $config
        ));
    }

    public function add_to_other_config($VGPU,$key,$value){
        return $this->doCall('VGPU.add_to_other_config',array(
            $this->session_id,
            $VGPU,
            $key,
            $value
        ));
    }

    public function remove_from_other_config($VGPU,$key){
        return $this->doCall('VGPU.remove_from_other_config',array(
            $this->session_id,
            $VGPU,
            $key
        ));
    }

	public function get_by_uuid($uuid){
		return $this->doCall('VGPU.get_by_uuid',array(
			$this->session_id,
			$uuid
		));
	}

	public function get_record($VGPU){
		return $this->doCall('VGPU.get_record',array(
			$this->session_id,
			$VGPU
		));
	}
}
