<?php
	namespace App\Doctor\Service;

	use App\Helpers\JwtHelper;
	use App\Doctor\Model\Token;

	class AuthService {

		private $doctorService;

		/**
		 * AuthService constructor.
		 */
		public function __construct() {
			$this->doctorService = new DoctorService();
		}

		public function login($email, $password) {

			$isDoctorExists = $this->userService->isDoctorWithPasswordExists($email, $password);

			if ($isDoctorExists) {
				return new Token(JwtHelper::generateDoctorToken($email));
			}

			return null;
		}
	}