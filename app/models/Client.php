<?php

class Client
{
    use Model;

    protected $table = 'clients';
    protected $allowedColumns = ['name', 'clientCode']; // Add any other fields as necessary

    public function clientCodeExists($clientCode)
    {
        $query = "SELECT * FROM $this->table WHERE clientCode = :clientCode LIMIT 1";
        $result = $this->query($query, ['clientCode' => $clientCode]);
        return !empty($result);
    }
}
