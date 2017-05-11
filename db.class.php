<?php

class DB extends PDO{

	private $host;
	private $login;
	private $pwd;
	private $dataname;
	public $db;


	public function __construct($host,$login,$pwd,$dataname){
		if($host!=null){
			$this->host = $host;
			$this->login = $login;
			$this->pwd = $pwd;
			$this->dataname = $dataname;
		}
		try{
			$this->db = new PDO("mysql:host=".$this->host.';dbname='.$this->dataname, $this->login, $this->pwd, array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
				PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT));
		}catch(PDOExecption $e){
			die("Connexion à la db impossible");
		}
	}
	public function query($sql){
		$req = $this->db->query($sql);
		return $req->fetchAll(PDO::FETCH_ASSOC);
	} 
}

