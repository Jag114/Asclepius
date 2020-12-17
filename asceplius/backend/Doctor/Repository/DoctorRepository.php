<?php namespace App\User\Repository;


use App\Database\Connector;
use App\Database\Repository\Repository;
use App\Doctor\Entity\Doctor\Entity;
use PDO;

class DoctorRepository extends Repository {

    /**
     * UserRepository constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    public function getEntityName() {
        return "App\Doctor\Entity\UserEntity";
    }

    protected function getTableName() {
        return "doctor";
    }
}
?>