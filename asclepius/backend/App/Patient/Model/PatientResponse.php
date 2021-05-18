<?php


	namespace App\Patient\Model;

	class PatientResponse {

	    //TODO dodac wszystko poza haslem
		private $id;
		private $pesel;

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
		public function getPesel() {
			return $this->pesel;
		}

		/**
		 * @param mixed $pesel
		 */
		public function setPesel($pesel) {
			$this->pesel = $pesel;
			return $this;
		}

		
	}
?>