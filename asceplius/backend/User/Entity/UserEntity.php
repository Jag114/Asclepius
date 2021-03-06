<?php namespace App\User\Entity;

use App\Database\Entity\Entity;

class UserEntity extends Entity {
	
	private $id;
	private $username;
	private $password_hash;
	
	
	public function getId() {
		return $this->id;
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	public function setUsername($username) {
		$this->username = $username;
	}
	
	public function getPasswordHash() {
		return $this->password_hash;
	}
	
	public function setPasswordHash($password_hash) {
		$this->password_hash = $password_hash;
	}
	
}
?>
