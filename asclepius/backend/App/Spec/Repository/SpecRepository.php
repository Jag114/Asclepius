<?php namespace App\Spec\Repository;

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Spec\Entity\SpecEntity;
use PDO;


class SpecRepository extends Repository
{
    protected function getEntityName() {
        return "App\Spec\Entity\SpecEntity";
    }

    protected function getTableName() {
        return "spec";
    }

}
