<?php

namespace Prajna\Components;

use \Prajna\Traits\XmlRpcHelper;

class XSPolicy
{
	use XmlRpcHelper;

	protected $session_id;

    public function __construct($client){
        $this->client = $client;
        $this->session_id = $this->client->session_id;
    }

	public function get_xstype(){
        return $this->doCall('XSPolicy.get_xstype',array(
            $this->session_id
        ));
	}

	public function set_xstype($policy_type,$policy_representation,$flags,$overwrite){
        return $this->doCall('XSPolicy.set_xstype',array(
            $this->session_id,
			$policy_type,
			$policy_representation,
			$flags,
			$overwrite
        ));
	}

	public function reset_xspolicy($policy_type){
        return $this->doCall('XSPolicy.reset_xspolicy',array(
            $this->session_id,
			$policy_type
        ));
	}

	public function get_xspolicy(){
        return $this->doCall('XSPolicy.get_xspolicy',array(
            $this->session_id
        ));
	}

	public function rm_xsbootpolicy(){
        return $this->doCall('XSPolicy.rm_xsbootpolicy',array(
            $this->session_id
        ));
	}

	public function get_labeled_resources(){
        return $this->doCall('XSPolicy.get_labeled_resources',array(
            $this->session_id
        ));
	}

	public function set_resource_label($resource,$label,$oldlabel){
        return $this->doCall('XSPolicy.set_resource_label',array(
            $this->session_id,
			$resource,
			$label,
			$oldlabel
        ));
	}

	public function get_resource_label($resource){
        return $this->doCall('XSPolicy.get_resource_label',array(
            $this->session_id,
			$resource
        ));
	}

	public function can_run($security_label){
        return $this->doCall('XSPolicy.can_run',array(
            $this->session_id,
			$security_label
        ));
	}

	public function get_all(){
        return $this->doCall('XSPolicy.get_all',array(
            $this->session_id
        ));
	}

	public function get_uuid($XSPolicy){
        return $this->doCall('XSPolicy.get_uuid',array(
            $this->session_id,
			$XSPolicy
        ));
	}

	public function get_record($XSPolicy){
        return $this->doCall('XSPolicy.get_record',array(
            $this->session_id,
			$XSPolicy
        ));
	}
}
