<?php

namespace Prajna\Traits;

use \Zend\XmlRpc\Request;
use \Prajna\PrajnaException;

trait XmlRpcHelper
{
    protected function doCall($method,$params){
        $request = new Request();
        $request->setMethod($method);
        $request->setParams($params);
        $this->client->doRequest($request);
        $resp = $this->client->getLastResponse();
        $response = $this->returnResponse($this->client->getLastResponse());
        return $response['Value'];
    }

    protected function returnResponse($response){
        $responseValue = $response->getReturnValue();
        if($responseValue['Status'] === 'Failure'){
            throw new PrajnaException($responseValue['ErrorDescription']);
        }
        return $response->getReturnValue();
    }
}
