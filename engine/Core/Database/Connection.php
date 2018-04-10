<?php 

namespace Engine\Core\Database;

use \PDO;

class Connection {

	private $link;

	/**
	* Database constructor
	*/

	public function __construct()
	{
		$this->connect();
	}

   /**
	* @return $this
	*/

	private function connect()
	{
		$config = [

		      'host'     => 'localhost',
		      'db_name'   => 'teast_pdo',
		      'username' => 'root',
		      'password' => '',
		      'charset'  => 'utf8'


		];

		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'];

		$this->link = new PDO($dsn, $config['username'], $config['password']);

		return $this;

	}

	/**
	* @return $sql
	* @return mixed
	*/

	public function execute($sql)
	{
		$sth = $this->link->prepare($sql);

		return $sth->execute();

	}

	/**
	* @return $sql
	* @return array
	*/

	public function query($sql)
	{
		$exe = $this->execute($sql);

		$result = $exe->fetchAll(PDO::FETCH_ASSOC);

		if($result === false) {
			return [];
		}

		return $result;

	}

}

?>