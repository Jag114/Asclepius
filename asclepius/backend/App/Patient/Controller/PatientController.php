<?php
	namespace App\Patient\Controller;

	use App\Router\RestBodyReader;
	use App\Serializer\JsonSerializer;
	use App\Patient\Model\PatientRequest;
	use App\Patient\Service\PatientService;

	/**
	 * @Controller(path="/patient")
	 */
	class PatientController {
		/**
		 * @var PatientService
		 */
		private $patientService;

		/**
		 * PatientController constructor.
		 */
		public function __construct() {
			$this->patientService = new PatientService();
		}


		/**
		 * @Action(method="GET")
		 */
		public function getPatients() {
			echo json_encode(array("test" => "hahaxd"));
		}

		/**
		 * @Action(method="POST")
		 */
		public function addPatient() {
			/** @var PatientRequest $requestBody */
			$requestBody = RestBodyReader::readBody(PatientRequest::class);

			$patient = $this->patientService->addPatient($requestBody);

			echo JsonSerializer::getInstance()->serialize($patient, 'json');
		}

		/**
		 * @Action(method="GET", path="/{id}")
		 */
		public function getPatient($id) {
			$patient = $this->patientService->getPatient($id);

			echo JsonSerializer::getInstance()->serialize($patient, 'json');
		}

		/**
		 * @Action(method="PUT", path="/{id}")
		 */
		public function updatePatient($id) {
			echo sprintf("Updated patient with id: %s", array($id));
		}

		/**
		 * @Action(method="DELETE", path="/{id}")
		 */
		public function deletePatient($id) {
			echo sprintf("Deleted patient with id: %s", array($id));
		}
	}
?>
