<?php
namespace Service;
error_reporting(E_ALL);
ini_set('display_errors','On');

use config\DatabaseConfig;
use Entity\BaseEntity;
abstract class EntityManager{
    protected $myDB;

    /**
     * EntityManager constructor.
     * @param $myDB
     */
    abstract function __construct(DatabaseConfig $myDB);
    abstract function getById(int $id);
    abstract function save(BaseEntity $object);
}