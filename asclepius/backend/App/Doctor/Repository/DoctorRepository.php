<?php

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Doctor\Entity\DoctorEntity;
use PDO;


class DoctorRepository extends Repository
{
    protected function getEntityName() {
        return "App\Doctor\Entity\DoctorEntity";
    }

    protected function getTableName() {
        return "doctor";
    }

    /**
     * @param $email
     * @param $password
     * @return DoctorEntity | bool
     */

    public function getDoctorByDoctorNameAndPassword($email, $password) {
        $query = $this->prepare("Select * from " . $this->getTableName() . " where email=:email and password=:password");

        $query->execute(array(
            ":email" => $email,
            ":password" => sha1($password)
        ));


        return $query->fetch();
    }



}




