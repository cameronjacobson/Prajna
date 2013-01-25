<?php

include(dirname(__DIR__).'/vendor/autoload.php');

$config = parse_ini_file(dirname(__DIR__).'/config/config.ini',true);

use Prajna\Prajna;
use Zend\XmlRpc\Client\Exception\FaultException;
use Zend\XmlRpc\Client\Exception\HttpException;
use Prajna\PrajnaException;

try{
	$x = new Prajna($config['xapi']);
	$host = $x->host();
	$hosts = $host->get_all();
var_dump($hosts);
	var_dump($host->get_record($hosts[0]));
	$x->logout();

}catch(PrajnaException $e){
	echo $e->getCode().' '.$e->getMessage();
}catch(HttpException $e) {
	echo $e->getCode().' '.$e->getMessage();
}catch(FaultException $e){
	echo $e->getCode().' '.$e->getMessage();
}catch(\Exception $e){
	echo $e->getCode().' '.$e->getMessage();
}
