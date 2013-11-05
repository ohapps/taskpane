<?php

namespace Api\Controller;
 
class TaskController extends BaseController
{    
    public function get($id)
    {        
        $response = $this->getResponseWithHeader()
                         ->setContent( __METHOD__.' get current data with id =  '.$id);
        return $response;
    }
     
    public function getList()
    {        
        $data = array(
            array(
                "id" => 1,
                "name" => "Craig"
            ),
            array(
                "id" => 2,
                "name" => "Bob"
            )
        );
        return $this->getFormattedResponse($data);
    }
     
    public function create($data)
    {
        $response = $this->getResponseWithHeader()
                         ->setContent( __METHOD__.' create new item of data :
                                                    <b>'.$data['name'].'</b>');
        return $response;
    }
     
    public function update($id, $data)
    {
       $response = $this->getResponseWithHeader()
                        ->setContent(__METHOD__.' update current data with id =  '. $id .
                                            ' with data of name is '. $data['name'] ) ;
       return $response;
    }
     
    public function delete($id)
    {
        $response = $this->getResponseWithHeader()
                        ->setContent(__METHOD__.' delete current data with id =  '.$id) ;
        return $response;
    }            

}