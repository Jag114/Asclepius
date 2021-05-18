<?php namespace App;



use App\Database\Repository\Repository;
use App\Patient\Entity\PatientEntity;
use App\Patient\Repository\PatientRepository;
use App\Doctor\Entity\DoctorEntity;
use App\Doctor\Repository\DoctorRepository;
use App\Hospital\Entity\HospitalEntity;
use App\Hospital\Repository\HospitalRepository;
use App\Prescription\Entity\PrescriptionEntity;
use App\Prescription\Repository\PrescriptionRepository;
use App\Patient_card\Entity\Patient_cardEntity;
use App\Patient_card\Repository\Patient_cardRepository;
use App\Pc_info\Entity\Pc_infoEntity;
use App\Pc_info\Repository\Pc_infoRepository;
use App\Spec\Entity\SpecEntity;
use App\Spec\Repository\SpecRepository;

class Application {


public static function run() {
$PatientRepository = new PatientRepository();
$DoctorRepository = new DoctorRepository();
$HospitalRepository = new HospitalRepository();
$Patient_cardRepository = new Patient_cardRepository();
$Pc_infoRepository = new Pc_infoRepository();
$SpecRepository = new SpecRepository();

//        $result = $userRepository->getById(1);



$PatientEntity = new PatientEntity();
$PatientEntity->setPesel("123");
$PatientEntity->setPassword("abc");



$DoctorEntity = new DoctorEntity();
$DoctorEntity->setEmail("Pan");
$DoctorEntity->setPassword("xyz");


try {
$PatientRepository->save($PatientEntity);
$DoctorRepository->save($DoctorEntity);
} catch (\ReflectionException $e) {
}
}
}
?>