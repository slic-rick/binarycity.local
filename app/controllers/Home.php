<?php

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		$client = new Client;

		$clients = $client->findAll();

		$data['clients'] = $clients;

		// show($data);
		$this->view('home', $data);
	}
}
