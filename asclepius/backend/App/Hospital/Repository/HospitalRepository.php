<?php namespace App\Hospital\Repository;

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Hospital\Entity\HospitalEntity;
use PDO;


class HospitalRepository extends Repository
{
    protected function getEntityName() {
        return "App\Hospital\Entity\HospitalEntity";
    }

    protected function getTableName() {
        return "hospital";
    }




}

?>