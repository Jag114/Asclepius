<?php


	namespace App\Doctor\Model;

	class DoctorResponse {

		private $id;
		private $email;

		/**
		 * @return mixed
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * @param mixed $id
		 */
		public function setId($id) {
			$this->id = $id;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getEmail() {
			return $this->email;
		}

		/**
		 * @param mixed $email
		 */
		public function setEmail($email) {
			$this->pesel = $email;
			return $this;
		}

		
	}