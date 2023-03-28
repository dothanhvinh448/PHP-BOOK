<?php
class connect
{
	var $db=null;
	public function __construct() 
	{
		$dsn='mysql:host=localhost;dbname=thuvien';
		$user='root';
		$pass='root';
		$this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
		
	}
	public function getInstance($select)
	{
		$results=$this->db->query($select);
		// echo $select;
		$result=$results->fetch();
		return $result;
	}
	
//	Lấy nhiều rows
	public function getList($select)
	{
		$results=$this->db->query($select);
		
		return($results);
	}
//	https://viblo.asia/p/cai-dat-ung-dung-php-thuan-su-dung-mvc-va-oop-4P856aA3lY3
	public function exec($query)
	{
		$results=$this->db->exec($query);
		
		return($results);
	}
	
}
?>