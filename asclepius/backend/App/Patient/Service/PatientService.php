<?php
	namespace App\Patient\Service;


	use App\Patient\Entity\PatientEntity;
	use App\Patient\Model\PatientRequest;
	use App\Patient\Model\PatientResponse;
	use App\Patient\Repository\PatientRepository;

	class PatientService {

		/**
		 * @var PatientRepository
		 */
		private $patientRepository;

		/**
		 * PatientService constructor.
		 */
		public function __construct() {
			$this->patientRepository = new PatientRepository();
		}

		/**
		 * @param PatientRequest $model
		 * @return PatientResponse | bool
		 * @throws \ReflectionException
		 */
		public function addPatient(PatientRequest $model) {

			$patientEntity = new PatientEntity();

			$patientEntity->setPesel($model->getPesel());
				$patientEntity->setPassword(sha1($model->getPassword()));

			return $this->convertPatientEntityToPatientResponse($this->patientRepository->save($patientEntity));
		}

		/**
		 * @param $id
		 * @return PatientResponse
		 */
		public function getPatient($id) {

			return $this->convertPatientEntityToPatientResponse($this->patientRepository->getById($id));
		}

		public function isPatientWithPasswordExists($pesel, $password) {
			return $this->patientRepository->isPatientWithPasswordExists($pesel, $password);
		}

		/**
		 * @param Entity $PatientEntity
		 * @return PatientResponse | bool
		 */
		private function convertPatientEntityToPatientResponse($PatientEntity) {

			if (empty($PatientEntity)) {
				return false;
			}

			$PatientResponse = new PatientResponse();

			$PatientResponse
				->setId($PatientEntity->getId())
				->setPesel($PatientEntity->getPesel());

			return $PatientResponse;
		}
	}

?>