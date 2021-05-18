<?php namespace App\Patient\Repository;


use App\Database\Connector;
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
     * @param $pesel
     * @param $password
     * @return PatientEntity | bool
     */
    public function getPatientByPeselAndPassword($pesel, $password) {
        $query = $this->prepare("Select * from " . $this->getTableName() . " where pesel=:pesel and password=:password");

        $query->execute(array(
            ":pesel" => $pesel,
            ":password" => sha1($password)
        ));

        return $query->fetch();
    }
}