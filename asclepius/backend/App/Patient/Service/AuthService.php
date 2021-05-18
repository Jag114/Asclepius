<?php
	namespace App\Patient\Service;

	use App\Helpers\JwtHelper;
	use App\Patient\Model\Token;

	class AuthService {

		private $patientService;

		/**
		 * AuthService constructor.
		 */
		public function __construct() {
			$this->patientService = new PatientService();
		}

		public function login($pesel, $password) {

			$isPatientExists = $this->userService->isPatientWithPasswordExists($pesel, $password);

			if ($isPatientExists) {
				return new Token(JwtHelper::generatePatientToken($pesel));
			}

			return null;
		}
	}