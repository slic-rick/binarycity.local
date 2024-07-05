<?php

/**
 * home class
 */
class Contacts
{
    use Controller;

    public function index()
    {
        $contact = new Contact;

        $contacts = $contact->findAll();

        $data['contacts'] = $contacts;

        // show($data);
        $this->view('contacts', $data);
    }
}
