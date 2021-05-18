<?php
	namespace App\Patient\Model;

	class PatientRequest {

	    //TODO dodac wszystko poza id
		private $pesel;
		private $password;

		/**
		 * @return mixed
		 */
		public function getPesel() {
			return $this->pesel;
		}

		/**
		 * @param mixed $pesel
		 */
		public function setPesel($pesel) {
			$this->pesel = $pesel;
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