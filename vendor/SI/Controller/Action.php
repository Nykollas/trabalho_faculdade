<?php

namespace SI\Controller;

class Action
{
	protected $view;
	protected $action;

	public function __construct()
	{
		$this->view = new \stdClass();
	}

	public function render($action, $layout=true)
	{
		$this->action = $action;
		if ($layout == true && file_exists("App/views/index/layout.phtml")) {
			include_once "App/views/layout.phtml";
		} else {
			$this->content();
		}		
	}

	public function content()
	{
		$actual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", "", $actual));
		
		if (file_exists('App/views/' . $singleClassName . '/' . $this->action . '.phtml')) {
			include_once 'App/views/' . $singleClassName . '/' . $this->action . '.phtml';
		} else {
			echo $this->action;
		}		
	
	}
}