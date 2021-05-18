<?php
	namespace App\Doctor\Service;


	use App\Doctor\Entity\DoctorEntity;
	use App\Doctor\Model\DoctorRequest;
	use App\Doctor\Model\DoctorResponse;
	use App\Doctor\Repository\DoctorRepository;

	class DoctorService {

		/**
		 * @var DoctorRepository
		 */
		private $doctorRepository;

		/**
		 * DoctorService constructor.
		 */
		public function __construct() {
			$this->doctorRepository = new DoctorRepository();
		}

		/**
		 * @param DoctorRequest $model
		 * @return DoctorResponse | bool
		 * @throws \ReflectionException
		 */
		public function addDoctor(DoctorRequest $model) {

			$DoctorEntity = new DoctorEntity();

			$DoctorEntity->setPesel($model->getPesel())
				->setPasswordHash(sha1($model->getPassword()));

			return $this->convertDoctorEntityToDoctorResponse($this->DoctorRepository->save($DoctorEntity));
		}

		/**
		 * @param $id
		 * @return DoctorResponse
		 */
		public function getDoctor($id) {

			return $this->convertDoctorEntityToDoctorResponse($this->DoctorRepository->getById($id));
		}

		public function isDoctorWithPasswordExists($email, $password) {
			return $this->DoctorRepository->isDoctorWithPasswordExists($email, $password);
		}

		/**
		 * @param DoctorEntity $DoctorEntity
		 * @return DoctorResponse | bool
		 */
		private function convertDoctorEntityToDoctorResponse($DoctorEntity) {

			if (empty($DoctorEntity)) {
				return false;
			}

			$DoctorResponse = new DoctorResponse();

			$DoctorResponse
				->setId($DoctorEntity->getId())
				->setEmail($DoctorEntity->getEmail());

			return $DoctorResponse;
		}
	}
