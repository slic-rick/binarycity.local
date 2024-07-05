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
        $contactClient = new ContactClients;

        // Fetch the number of linked clients for each contact
        foreach ($contacts as &$contact) {
            // show($contact);
            $contact['linked_clients_count'] = $contactClient->countLinkedClients($contact['Id']);
        }

        $data['contacts'] = $contacts;

        $this->view('contacts', $data);
    }
}
