<?php 
class Database{
	private $sql;
	private $connection;
	private $result = [];

	public function __construct(){
		$this->connection = new PDO("mysql:host=localhost;dbname=museum",'root','');
		return $this->connection;
	}
	public function getAllData($table,$lim){
		$data = $this->connection->prepare("SELECT * FROM $table limit = ?");
		$data->execute(array($lim));
		
		$this->result = $data->fetchAll(PDO::FETCH_ASSOC); 
		return $this->result;
	}
	public function selectWhere($table,$coll,$val){
		$data = $this->connection->prepare("SELECT * FROM $table WHERE $coll = ?");
		$data->execute(array($val));
		$this->result = $data->fetchAll(PDO::FETCH_ASSOC); 
		return $this->result;
	}
	public function showJson(){
		$json = json_encode($this->result);
		echo 'gon fix me some json in here';
		print_r($json);
		return $json;
	}
	public function freeQuery($sql){
		$data = $this->connection->query($sql);
		return $data;
	}
}