<?php

/**
 * NewClient class
 */
class NewClient
{
	use Controller;

	public function index()
	{
		$data = [];

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$client = new Client;

			// Validate form input
			$errors = $this->validate($_POST);

			if (empty($errors)) {
				// Generate client code
				$clientCode = $this->generateClientCode($_POST['name']);
				$_POST['clientCode'] = $clientCode;

				// Insert client data
				$client->insert($_POST);

				// Redirect to a success page or another appropriate page
				header('Location: /');
				exit;
			} else {
				$data['errors'] = $errors;
				$data['name'] = $_POST['name'];
				$data['email'] = $_POST['email'];
			}
		}

		$this->view('newClient', $data);
	}

	private function validate($data)
	{
		$errors = [];

		if (empty($data['name'])) {
			$errors[] = "Name is required.";
		}



		// Additional validation rules can be added here

		return $errors;
	}

	private function generateClientCode($clientName)
	{
		$clientName = strtoupper($clientName);
		$prefix = substr($clientName, 0, 3);

		// If the client name is shorter than 3 characters, pad with additional characters
		if (strlen($prefix) < 3) {
			$prefix = str_pad($prefix, 3, 'A');
		}

		// Ensure the prefix is exactly 3 characters long
		$prefix = substr($prefix, 0, 3);

		$client = new Client;
		$counter = 1;
		do {
			$numericPart = str_pad($counter, 3, '0', STR_PAD_LEFT);
			$clientCode = $prefix . $numericPart;
			$counter++;
		} while ($client->clientCodeExists($clientCode));

		return $clientCode;
	}
}
