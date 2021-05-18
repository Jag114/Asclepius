<?php
	namespace App\Patient\Controller;

	use App\Helpers\JwtHelper;
	use App\Router\RestBodyReader;
	use App\Serializer\JsonSerializer;
	use App\Patient\Model\Token;
	use App\Patient\Model\PatientRequest;
	use App\Patient\Service\AuthService;

	/**
	 * @Controller(path="/auth")
	 */
	class AuthController {

		private $authService;

		/**
		 * AuthController constructor.
		 */
		public function __construct() {
			$this->authService = new AuthService();
		}

		/**
		 * @Action(method="POST", path="/login")
		 */
		public function loginAction() {
			/** @var PatientRequest $requestBody */
			$requestBody = RestBodyReader::readBody(PatientRequest::class);

			$tokenObject = $this->authService->login($requestBody->getPatientname(), $requestBody->getPassword());

			echo JsonSerializer::getInstance()->serialize($tokenObject, 'json');
		}

		/**
		 * @Action(method="POST", path="/token/verify")
		 */
		public function tokenVerifyAction() {
			/** @var Token $requestBody */
			$requestBody = RestBodyReader::readBody(Token::class);

			echo JwtHelper::verifyToken($requestBody->getToken());
		}
	}
?>