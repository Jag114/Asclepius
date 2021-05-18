<?php
	namespace App\Doctor\Model;

	class DoctorRequest {

		private $email;
		private $password;

		/**
		 * @return mixed
		 */
		public function getEmail() {
			return $this->email;
		}

		/**
		 * @param mixed $email
		 */
		public function setUsername($email) {
			$this->email = $email;
		}

		/**
		 * @return mixed
		 */
		public function getPassword() {
			return $this->password;
		}

		/**
		 * @param mixed $password
		 */
		public function setPassword($password) {
			$this->password = $password;
		}
	}