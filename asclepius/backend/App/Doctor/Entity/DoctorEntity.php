<?php
namespace App\Doctor\Entity;


use App\Database\Entity\Entity;

class DoctorEntity extends Entity
{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $phone;
    private $hospital_id;
    private $office_number;
    private $spec_id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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

    /**
     * @return mixed
     */
    public function getOfficeNumber()
    {
        return $this->office_number;
    }

    /**
     * @param mixed $office_number
     */
    public function setOfficeNumber($office_number)
    {
        $this->office_number = $office_number;
    }

    /**
     * @return mixed
     */
    public function getSpecId()
    {
        return $this->spec_id;
    }

    /**
     * @param mixed $spec_id
     */
    public function setSpecId($spec_id)
    {
        $this->spec_id = $spec_id;
    }



}
?>