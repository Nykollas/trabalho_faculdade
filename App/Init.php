<?php

namespace App;

use SI\Init\Bootstrap;

class Init extends Bootstrap
{
	//definir as rotas possíveis do projeto
	protected function initRoutes()
	{
		$taskRoutes['home'] = array(
			'route' => '/',
			'controller' => 'index',
			'action' => 'index'
		);

		$taskRoutes['add'] = array(
			'route' => '/add',
			'controller' => 'index',
			'action' => 'add'
		);
		//Rota para os assets
		$taskRoutes['add'] = array(
			'route' => '/add',
			'controller' => 'index',
			'action' => 'add'
		);

		$this->setRoutes($taskRoutes);
	}

	//conexão com o banco de dados
}