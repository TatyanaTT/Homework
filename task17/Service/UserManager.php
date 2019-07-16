<?php


namespace Service;

use Entity\BaseEntity;
use Entity\User;

class UserManager extends EntityManager
{
    /**
     * UserManager constructor.
     */
    public function __construct(){
        $this->myDB = new MysqlConfig();
    }
    public function getById(int $id): ?BaseEntity {
        $query = "SELECT * From users WHERE id = $id";
        $selectById = mysqli_query($this->myDB->connect(), $query);
        $rows = mysqli_fetch_array($selectById, MYSQLI_ASSOC);
        $object = new User($id,$rows['name'],$rows['surname'],$rows['email']);
        return $object;
    }
    public function save(BaseEntity $object){
        $query = "SELECT COUNT(id) AS id1 FROM users WHERE id =".$object->getId();
        $selectById = mysqli_query($this->myDB->connect(), $query);
        $rows = mysqli_fetch_array($selectById, MYSQLI_ASSOC);
        if (empty($rows['id1'])){
            $query = "INSERT INTO `users` (users.id,users.name, users.surname,users.email) 
                        VALUES ('".$object->getId()."','".$object->getName()."','
                        ".$object->getSurname()."','".$object->getEmail()."')";
        }
        else {
            $query = "UPDATE `users` SET users.name='".$object->getName()."', surname ='".$object->getSurname().
                "', email='".$object->getEmail()."' WHERE id=".$object->getId();
        }
        $selectById = mysqli_query($this->myDB->connect(), $query);
    }
}