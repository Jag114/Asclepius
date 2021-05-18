<?php
namespace App\Patient_card\Entity;


use App\Database\Entity\Entity;

class Patient_cardEntity extends Entity
{
    private $id;
    private $info_id;
    private $hospital_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInfoId()
    {
        return $this->info_id;
    }

    /**
     * @param mixed $info_id
     */
    public function setInfoId($info_id)
    {
        $this->info_id = $info_id;
    }

    /**
     * @return mixed
     */
    public function getHospitalId()
    {
        return $this->hospital_id;
    }

    /**
     * @param mixed $hospital_id
     */
    public function setHospitalId($hospital_id)
    {
        $this->hospital_id = $hospital_id;
    }




}
?>