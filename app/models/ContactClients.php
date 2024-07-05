<?php


/**
 * User class
 */
class ContactClients
{

    use Model;

    protected $table = "`contact clients`";

    protected $allowedColumns = [

        'contactId',
        'clientId',
    ];

    public function countLinkedClients($contactId)
    {
        $query = "SELECT COUNT(*) as total FROM $this->table WHERE contactId = :contactId";
        $data = ['contactId' => $contactId];
        $result = $this->query($query, $data);
        return $result[0]['total'] ?? 0;
    }
}
