<?php namespace App\Patient_card\Repository;

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Patient_card\Entity\Patient_cardEntity;
use PDO;


class Patient_cardRepository extends Repository
{
    protected function getEntityName() {
        return "App\Patient_card\Entity\Patient_cardEntity";
    }

    protected function getTableName() {
        return "patient_card";
    }

}

?>