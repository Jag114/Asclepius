<?php
namespace App\Prescription\Entity;


use App\Database\Entity\Entity;

class PrescriptionEntity extends Entity
{
    private $id;
    private $patient_id;
    private $doctor_id;
    private $drug_name;
    private $quantity;
    private $dosage;

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
    public function getDrugName()
    {
        return $this->drug_name;
    }

    /**
     * @param mixed $drug_name
     */
    public function setDrugName($drug_name)
    {
        $this->drug_name = $drug_name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * @param mixed $dosage
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;
    }



}

?>