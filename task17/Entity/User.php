<?php


namespace Entity;


class User extends BaseEntity
{
private $name ;
private $surname;
private $email;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $surname
     * @param $email
     */
    public function __construct($id,$name, $surname, $email)
    {
        $this->setId($id);
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

}