<?php namespace App\User\Entity;

use App\Database\Entity\Entity;

class UserEntity extends Entity {
	
	private $id;
	private $name;
	private $lastname;
	private $password_hash;
	private $email;
	
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getPasswordHash() {
		return $this->password_hash;
	}
	
	public function setPasswordHash($password_hash) {
		$this->password_hash = $password_hash;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getLastname() {
		return $this->lastname;
	}
	
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}
}
?>