<?php

trait Database
{
	private $connection;
	private function connect()
	{
		if ($this->connection === null) {
			$string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
			$this->connection = new PDO($string, DBUSER, DBPASS);
		}
		return $this->connection;
	}

	public function query($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if ($check) {
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
			if (is_array($result) && count($result)) {
				return $result;
			}
		}

		return false;
	}

	public function get_row($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if ($check) {
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if (is_array($result) && count($result)) {
				return $result[0];
			}
		}

		return false;
	}
}
