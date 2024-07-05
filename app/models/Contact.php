<?php


/**
 * Contact class
 */
class Contact
{

    use Model;

    protected $table = 'contacts';

    protected $allowedColumns = [

        'surname',
        'name',
        'email'
    ];

    // public function validate($data)
    // {
    //     $this->errors = [];

    //     if (empty($data['email'])) {
    //         $this->errors['email'] = "Email is required";
    //     } else
    // 	if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    //         $this->errors['email'] = "Email is not valid";
    //     }


    //     if (empty($this->errors)) {
    //         return true;
    //     }

    //     return false;
    // }
}
