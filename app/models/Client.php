<?php

class Client
{
    use Model;

    protected $table = 'clients';

    protected $allowedColumns = [
        'name',
        'email',
        'clientCode',
        'linked_contacts'

    ];

    // Method to check if a client code exists
    public function clientCodeExists($clientCode)
    {
        $query = "SELECT * FROM $this->table WHERE clientCode = :clientCode LIMIT 1";
        $data = ['clientCode' => $clientCode];
        $result = $this->query($query, $data);
        return !empty($result);
    }

    // Method to get the last inserted ID
    public function getLastInsertedId()
    {
        $con = $this->connect();
        return $con->lastInsertId();
    }

    // Method to increment the linked contacts count
    public function incrementLinkedContactsCount($clientId)
    {
        $client = $this->first(['id' => $clientId]);
        if ($client) {
            $newCount = $client['linked_contacts'] + 1;
            $this->update($clientId, ['linked_contacts' => $newCount]);
        }
    }
}
