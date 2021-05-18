<?php namespace App\Patient\Repository;


use App\Database\DatabaseConnector;
use App\Database\Repository\Repository;
use App\Patient\Entity\PatientEntity;
use PDO;

class PatientRepository extends Repository {

    protected function getEntityName() {
        return "App\Patient\Entity\PatientEntity";
    }

    protected function getTableName() {
        return "patient";
    }

    /**
     * @param $username
     * @param $password
     * @return PatientEntity | bool
     */
    public function getUserByUsernameAndPassword($username, $password) {
        $query = $this->prepare("Select * from " . $this->getTableName() . " where pesel=:pesel and password=:password");

        $query->execute(array(
            ":pesel" => $username,
            ":password" => sha1($password)
        ));

        return $query->fetch();
    }
}