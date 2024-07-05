<?php

/**
 * login class
 */
class NewClient
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$client = new Client;
			// $arr['email'] = $_POST['email'];

			// $row = $user->first($arr);

			// if($row)
			// {
			// 	if($row->password === $_POST['password'])
			// 	{
			// 		$_SESSION['USER'] = $row;
			// 		redirect('home');
			// 	}
			// }

			// $user->errors['email'] = "Wrong email or password";

			// $data['errors'] = $user->errors;
		}

		$this->view('newClient', $data);
	}
}
