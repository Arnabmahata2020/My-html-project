<?php
session_start();
 
class connection{
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $db_name='oops';

	public function __construct(){
		$this->con=mysqli_connect('localhost','root','','oops');
	}
}

?>
