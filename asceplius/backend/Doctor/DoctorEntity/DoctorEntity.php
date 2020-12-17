<?php namespace App\Doctor\Entity;

use App\Database\Entity\Entity;

class DoctorEntity extends Entity {
	
	private $id;
	private $password;
	private $name;
	private $lastname;
	private $email;
	
	public function getID(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
		public function getLastName(){
		return $this->lastname;
	}
	
	public function setLastName($lastname){
		$this->lastname=lastname;
	}
	
	public function getPassword(){
		return $this->password;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function email(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email=$email;
	}
	
}

?>
