<?php namespace App;


use App\Database\Repository\Repository;
use App\Patient\Entity\PatientEntity;
use App\Patient\Repository\PatientRepository;

class Application {


    public static function run() {
        $userRepository = new PatientRepository();

//        $result = $userRepository->getById(1);



        $entity = new PatientEntity();
        $entity->setPesel("123");
        $entity->setPassword("abc");


        try {
            $userRepository->save($entity);
        } catch (\ReflectionException $e) {
        }
    }
}

