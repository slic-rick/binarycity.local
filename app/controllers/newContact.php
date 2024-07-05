<?php

/**
 * login class
 */
class NewContact
{
    use Controller;

    public function index()
    {
        $data = [];

        // if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //     $client = new Client;
        //     // $arr['email'] = $_POST['email'];

        //     // $row = $user->first($arr);

        //     // if($row)
        //     // {
        //     // 	if($row->password === $_POST['password'])
        //     // 	{
        //     // 		$_SESSION['USER'] = $row;
        //     // 		redirect('home');
        //     // 	}
        //     // }

        //     // $user->errors['email'] = "Wrong email or password";

        //     // $data['errors'] = $user->errors;
        // }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $contact = new Contact;

            // Validate form input
            $errors = $this->validate($_POST);

            if (empty($errors)) {
                // Generate client code
                // Insert client data
                $contact->insert($_POST);

                // Redirect to a success page or another appropriate page
                header('Location: /');
                exit;
            } else {
                $data['errors'] = $errors;
                $data['name'] = $_POST['name'];
                $data['surname'] = $_POST['surname'];
                $data['email'] = $_POST['email'];
            }
        }

        $this->view('newContact', $data);
    }

    private function validate($data)
    {
        $errors = [];

        if (empty($data['name'])) {
            $errors[] = "Name is required.";
        }

        if (empty($data['surname'])) {
            $errors[] = "Surname is required.";
        }

        if (empty($data['email'])) {
            $errors[] = "Email is required.";
        }



        // Additional validation rules here

        return $errors;
    }
}
