<?php

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Prescription\Entity\PrescriptionEntity;
use PDO;


class PrescriptionRepository extends Repository
{
    protected function getEntityName() {
        return "App\Prescription\Entity\PrescriptionEntity";
    }

    protected function getTableName() {
        return "prescription";
    }

}

?>