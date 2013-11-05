<?php

namespace Api\Controller;
 
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Json\Json;
 
class BaseController extends AbstractRestfulController {    

	public function get($id)
    {        
        
    }
     
    public function getList()
    {        
        
    }
     
    public function create($data)
    {
        
    }
     
    public function update($id, $data)
    {
       
    }
     
    public function delete($id)
    {
        
    }

    public function getFormattedResponse(array $data){
        $response = $this->getResponse();
        $response->getHeaders()
                 //make can accessed by *   
                 ->addHeaderLine('Access-Control-Allow-Origin','*')
                 //set allow methods
                 ->addHeaderLine('Access-Control-Allow-Methods','POST PUT DELETE GET')
                 ->addHeaderLine('Content-Type', 'application/json');
        $response->setContent(Json::encode($data)); 
        return $response;
    }

}	