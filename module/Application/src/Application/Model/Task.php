<?php

namespace Application\Model;

class Task {

	public $id;
	public $userId;
	public $projectId;
	public $description;

	public function exchangeArray($data){
		$this->id	   = (!empty($data['ID'])) ? $data['ID'] : null;
		$this->userId	   = (!empty($data['USER_ID'])) ? $data['USER_ID'] : null;
		$this->projectId   = (!empty($data['PROJECT_ID'])) ? $data['PROJECT_ID'] : null;
		$this->description = (!empty($data['DESCRIPTION'])) ? $data['DESCRIPTION'] : null;		
	}

}
