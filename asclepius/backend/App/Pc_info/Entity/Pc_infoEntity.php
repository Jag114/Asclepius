<?php
namespace App\Pc_info\Entity;


use App\Database\Entity\Entity;

class Pc_infoEntity extends Entity
{
    private $id;
    private $patient_id;
    private $illness;
    private $date_of_visit;
    private $doctor_id;
    private $drugs_in_use;

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
    public function getPatientId()
    {
        return $this->patient_id;
    }

    /**
     * @param mixed $patient_id
     */
    public function setPatientId($patient_id)
    {
        $this->patient_id = $patient_id;
    }

    /**
     * @return mixed
     */
    public function getIllness()
    {
        return $this->illness;
    }

    /**
     * @param mixed $illness
     */
    public function setIllness($illness)
    {
        $this->illness = $illness;
    }

    /**
     * @return mixed
     */
    public function getDateOfVisit()
    {
        return $this->date_of_visit;
    }

    /**
     * @param mixed $date_of_visit
     */
    public function setDateOfVisit($date_of_visit)
    {
        $this->date_of_visit = $date_of_visit;
    }

    /**
     * @return mixed
     */
    public function getDoctorId()
    {
        return $this->doctor_id;
    }

    /**
     * @param mixed $doctor_id
     */
    public function setDoctorId($doctor_id)
    {
        $this->doctor_id = $doctor_id;
    }

    /**
     * @return mixed
     */
    public function getDrugsInUse()
    {
        return $this->drugs_in_use;
    }

    /**
     * @param mixed $drugs_in_use
     */
    public function setDrugsInUse($drugs_in_use)
    {
        $this->drugs_in_use = $drugs_in_use;
    }



}
?>