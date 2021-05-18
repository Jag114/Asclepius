<?php namespace App\Pc_info\Repository;

use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Pc_info\Entity\Pc_infoEntity;
use PDO;


class Pc_infoRepository extends Repository
{
    protected function getEntityName() {
        return "App\Pc_info\Entity\Pc_infoEntity";
    }

    protected function getTableName() {
        return "pc_info";
    }

}

?>