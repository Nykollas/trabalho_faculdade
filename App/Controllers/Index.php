<?php

namespace App\Controllers;

use SI\Controller\Action;

/**
Controller index
**/
class Index extends Action
{
    /**
    Action index
    **/
	public function index()
	{
		$this->render('index');
		//renderizar uma view
	}

	/**
    Action add
    **/
	public function add()
	{
		$this->render('add');
	}	
	
	
}
